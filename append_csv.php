<?php
	require_once "header.php";

	try 
	{
		//CSVファイルかどうか調べる
		$file_name=$_FILES['q_csv']['name'];
		if(!preg_match("/.csv$/",$file_name))
		{
			throw new RuntimeException('CSVファイルを選択してください。');
		}


        //ファイルアップロードエラーチェック
        switch ($_FILES['q_csv']['error']) 
        {
            case UPLOAD_ERR_OK:break;
            case UPLOAD_ERR_NO_FILE:throw new RuntimeException('正常にCSVファイルが選択されていません。');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:throw new RuntimeException('CSVファイルのサイズが大きすぎます。');
            default:throw new RuntimeException('未知のエラーです。');
		}


		//テンポラリファイルの文字コードをUTF-8に変換
		$tmp_name= $_FILES['q_csv']['tmp_name'];
		$detect_order = 'ASCII,JIS,UTF-8,CP51932,SJIS-win';
		setlocale(LC_ALL, 'ja_JP.UTF-8');
		$buffer = file_get_contents($tmp_name);
        if (!$encoding = mb_detect_encoding($buffer, $detect_order, true)) 
        {
            unset($buffer);
            throw new RuntimeException('文字コードの自動判定に失敗しました。');
        }
        file_put_contents($tmp_name, mb_convert_encoding($buffer, 'UTF-8', $encoding));
        unset($buffer);



		//データ検索テンプレート
        $stmt1=$pdo->prepare("SELECT 1 as exist from ${TABLE_QUESTIONS} 
        						where id = ? and subject = ? and workbook = ?
        						and question = ? and answer = ?");

	 	//データ登録テンプレート
	 	$stmt2=$pdo->prepare("INSERT INTO ${TABLE_QUESTIONS}(id, subject, workbook, question, answer, ok, ng, memory) 
	 						VALUES (?, ?, ?, ?, ?, 0, 0, ?)");
		
		//トランザクション開始
        $pdo->beginTransaction();
        try 
        {
            $fp = fopen($tmp_name, 'rb');
            $count=0;
            $skip=array();
            while ($row = fgetcsv($fp)) 
            {
            	//行番号を更新
            	$count++;

                //指定列数でなければその時点で終了
                if (count($row)!=$EXP_ROW_NUM) 
                {
                    throw new RuntimeException("列数が違います。");
                }

                //1行目はスキップ
                if ($count == 1)
                {
                    continue;
                }

            	//空行はスキップ
                if ($row === array("","","","",""))
                {
                	continue;
				}

                //覚え方を除いた配列をチェック
                $except_memory = array();
                for ($i=0; $i < $EXP_ROW_NUM-1; $i++) 
                { 
                    array_push($except_memory, $row[$i]);
                }

                //必須項目未入力
                if (in_array("", $except_memory)) 
                {
                    throw new RuntimeException($count."行目に入力されていない必須項目があります。");
                }

                //教科名文字数超過
                if (mb_strlen($row[0])>$MAX_TEXT_NUM)
                {
                    throw new RuntimeException($count."行目の教科名が".$MAX_TEXT_NUM."文字より多いです。");
                }

                //問題集名文字数超過
                if (mb_strlen($row[1])>$MAX_TEXT_NUM)
                {
                    throw new RuntimeException($count."行目の問題集名が".$MAX_TEXT_NUM."文字より多いです。");
                }

                //覚え方文字数超過
                if (mb_strlen($row[4])>$MAX_TEXT_NUM)
                {
                    throw new RuntimeException($count."行目の覚え方が".$MAX_TEXT_NUM."文字より多いです。");
                }

                //現在のIDを仕込む
                array_unshift($except_memory, $_SESSION['user_id']);
                array_unshift($row, $_SESSION['user_id']);


                //覚え方以外全て同じデータが存在したらスキップ
                $stmt1->execute($except_memory);
                if ($data = $stmt1->fetch(PDO::FETCH_ASSOC))
                {
                	array_push($skip, $count);
                	continue;
   				}
                
                //登録
                $stmt2->execute($row);
            }

            // ファイルポインタが終端に達していなければエラー
            if (!feof($fp)) 
            {
                throw new RuntimeException('異常終了しました。');
            }

            fclose($fp);
            $pdo->commit();
        } 
        catch (Exception $e) 
        {
            fclose($fp);
            $pdo->rollBack();
            throw $e;
        }

        //データベース終了
		$pdo = null;

		$smarty->assign('skip', $skip);
		$smarty->assign('complete_message', "CSVファイル「 $file_name 」の追加処理が完了しました。");
	}
	catch (Exception $e) 
	{
	    $msg = array($e->getMessage());
	    $smarty->assign("error", $msg);
	}

	//結果表示
	$smarty->display('append_csv_form.html');
?>