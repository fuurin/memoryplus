<?php
	require_once "header.php";
	
	//問題を削除する処理
	try
	{	
		$stmt = $pdo->prepare("DELETE FROM ${TABLE_QUESTIONS} WHERE id = :id and q_no = :q_no");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':q_no', $_POST['q_no'], PDO::PARAM_INT);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//問題が編集された問題集に移る
	header("location: select.php?subject=" . $_POST['subject'] . "&workbook=" . $_POST['workbook']);
?>