<?php
	require_once "header.php";

	$subject = $_POST['subject'];
	$workbook = $_POST['workbook'];

	//問題集を削除する処理
	try
	{
		$stmt = $pdo->prepare("	DELETE FROM ${TABLE_QUESTIONS} WHERE id = :id 
								and subject = :subject and workbook = :workbook");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
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

	//教科に移る
	header("location: workbook.php?subject={$subject}");
?>