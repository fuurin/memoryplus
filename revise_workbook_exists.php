<?php
	require_once "header.php";

	//データ受け取り
	$subject = $_GET['subject']; 
	$workbook = $_GET['workbook']; 
	$new_workbook = $_POST['marge_list'];

	//入力内容チェック
	$error_get = "";
	if ( $new_workbook=="none" )$error_get .= "&workbook_select_error=1";
	if($error_get!="")
	{
		header("location: revise_workbook_form.php?subject=" . $subject . "&workbook=" . $workbook . $error_get);
		exit();
	}


	try
	{
		//問題を更新する処理
		$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET workbook= :new_workbook
								WHERE id = :id and subject = :subject and workbook = :workbook");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':new_workbook', $new_workbook);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $workbook);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//編集ページに戻る
	header("location: revise_workbook_form.php?subject=" . $subject . "&workbook=" . $new_workbook . "&exists_complete=1");	
	exit();
?>