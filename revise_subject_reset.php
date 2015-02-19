<?php
	require_once "header.php";

	//データ受け取り
	$subject = $_GET['subject']; 

	//入力内容チェック

	if ( isset($_POST['reset_check']) )
	{
		try
		{
			//問題の正答数と解答回数を0にする処理
			$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET ok=0, ng=0 
									WHERE id = :id and subject = :subject");
			$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
			$stmt->bindValue(':subject', $subject);
			$stmt->execute();
		}
		catch(PDOException $e)
		{
			exit($e->getMessage());
		}

		$msg = "&reset_complete=1";
	}
	else
	{
		$msg = "";	
	}

	//データベース接続終了
	$pdo = null;

	//編集ページに戻る
	header("location: revise_subject_form.php?subject=".$subject.$msg);	
	exit();
?>