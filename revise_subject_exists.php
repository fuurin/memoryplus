<?php
	require_once "header.php";

	//データ受け取り
	$subject = $_GET['subject']; 
	$new_subject = $_POST['marge_list'];

	//入力内容チェック
	$error_get = "";
	if ( $new_subject=="none" )$error_get .= "&subject_select_error=1";
	if($error_get!="")
	{
		header("location: revise_subject_form.php?subject=" . $subject . $error_get);
		exit();
	}


	try
	{
		//問題を更新する処理
		$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET subject= :new_subject
								WHERE id = :id and subject = :subject");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':new_subject', $new_subject);
		$stmt->bindValue(':subject', $subject);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//編集ページに戻る
	header("location: revise_subject_form.php?subject=" . $new_subject . "&exists_complete=1");	
	exit();
?>