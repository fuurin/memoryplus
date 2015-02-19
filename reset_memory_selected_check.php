<?php
	require_once "header.php";

	//教科名を割り当て
	$subject = $_GET['subject'];
	$workbook = $_GET['workbook'];
	$smarty->assign('subject', $subject);
	$smarty->assign('workbook', $workbook);
	
	if($_SESSION['q_array']===array())
	{
		//選択画面に移る
		header("location: select.php?subject={$subject}&workbook={$workbook}&select_error=1");
	}
	else
	{
		//問題を検索する処理
		try
		{
			$questions=array();
			foreach ($_SESSION['q_array'] as $q_no)
			{
				$stmt = $pdo->prepare(" SELECT question, answer, memory 
										FROM ${TABLE_QUESTIONS}  
										where id = :id and q_no = :q_no");
				$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
				$stmt->bindValue(':q_no', $q_no, PDO::PARAM_INT);
				$stmt->execute();


				//問題データ割り当て
				while ( $data = $stmt->fetch(PDO::FETCH_ASSOC) )
				{
					//反転処理
					if ($_SESSION['reverse']==1)
					{
						$tmp = $data['question'];
						$data['question']=$data['answer'];
						$data['answer']=$tmp;
					}

					if($data['memory']=="")
					{
						$data['memory']="登録されていません。";
					}

					//文字数が設定値を越えていたらTRUEを与えておく
					$data['len_q'] = mb_strlen($data['question'])>$DISP_Q_NUM;
					$data['len_a'] = mb_strlen($data['answer'])>$DISP_Q_NUM;
					$data['len_m'] = mb_strlen($data['memory'])>$DISP_Q_NUM;

					//文字数を設定値に変更
					$data['question'] = mb_substr($data['question'], 0, $DISP_Q_NUM);
					$data['answer'] = mb_substr($data['answer'], 0, $DISP_Q_NUM);
					$data['memory'] = mb_substr($data['memory'], 0, $DISP_Q_NUM);

					if($data['memory']=="")
					{
						$data['memory']="登録されていません。";
					}

					//割り当て
					array_push($questions, $data);
				}
			}
		}
		catch(PDOException $e)
		{
			exit($e->getMessage());
		}

		//検索結果を割り当て
		$smarty->assign('questions', $questions);
	}
	
	//DB切断
	$pdo = null;

	//結果表示
	$smarty->display('reset_memory_selected_check.html');
?>