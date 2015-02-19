<?php
	require_once "header.php";

	//データ受け取り
	$subject=$_POST['subject'];
	$workbook=$_POST['workbook'];
	$path=$_POST['path'];

	//パスを修正
	$path = str_replace("\\", "/", $path);

	//受け取ったデータをアサイン
	$smarty->assign('subject', $subject);
	$smarty->assign('workbook', $workbook);
	$smarty->assign('path', $path);

	//入力内容チェック、存在するフォルダかどうか調べる
	if(!file_exists($path) || !is_dir($path))
	{
		//帰らせる
		header("location: download_csv_form.php?subject=" 
			. $subject . "&workbook=" . $workbook . "&path=" . $path);
		exit();
	}



	//ファイルの前半の名前を作成
	$name = $user_name . "_" . $subject . "_" . $workbook . "_";

	//ファイルの後半の名前（現時点の時間）を作成
	date_default_timezone_set("Asia/Tokyo");
	$date = date("YmdHis");

	//ファイル名を作成
	$file_name = $name . $date . ".csv";
	$smarty->assign('file_name', $file_name);

	//ファイルパスを作成
	$file_path = $path . "/" . $file_name;

	//Shift-JISにファイル名をエンコード（Windows用）
	$file_path = mb_convert_encoding($file_path, "SJIS"); 

	//ファイルオープンで作成
	$fp = fopen($file_path, "w");



	//一問を検索するSQLを準備
	$stmt = $pdo->prepare(" SELECT subject, workbook, question, answer, memory 
							FROM ${TABLE_QUESTIONS} where id = ? and q_no = ?");
	//ファイル作成開始
	try
	{
		//CSVファイルに見出しを書き込む 
		$title_subject=mb_convert_encoding("教科名", "SJIS");
		$title_workbook=mb_convert_encoding("問題集名", "SJIS");
		$title_question=mb_convert_encoding("問題", "SJIS");
		$title_answer=mb_convert_encoding("解答", "SJIS");
		$title_memory=mb_convert_encoding("覚え方", "SJIS");
		fputcsv($fp, array($title_subject, $title_workbook, 
			$title_question, $title_answer, $title_memory) );

		//Shift-JISでデータを受け取る
		$pdo->query('SET NAMES sjis');

		//一問ずつCSVファイルに保存
		for ($i=0; isset($_SESSION['q_array'][$i]); $i++) 
		{ 
			//問題番号を受け取る
			$q_no = $_SESSION['q_array'][$i];

			//検索する
			$stmt->execute(array($_SESSION['user_id'], $q_no));

			//検索結果を受け取る
			$data = $stmt->fetch(PDO::FETCH_ASSOC);

			//問題と解答が反転されているなら書き込みも反転
			if ($_SESSION['reverse']==1)
			{
				$tmp=$data['question'];
				$data['question']=$data['answer'];
				$data['answer']=$tmp;
			}

			//CSVファイルに書き込む 
			fputcsv($fp, array($data['subject'], $data['workbook'], 
				$data['question'], $data['answer'], $data['memory']) );
		}

		//文字コードを元に戻す
		$pdo->query('SET NAMES utf8');
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//ファイルクローズ
	fclose($fp);

	///結果表示
	$smarty->display('download_csv_complete.html');
?>