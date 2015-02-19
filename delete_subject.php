<?php
	require_once "header.php";

	$subject=$_POST['subject'];

	//教科を削除する処理
	try
	{
		$stmt = $pdo->prepare("DELETE FROM ${TABLE_QUESTIONS} WHERE id = :id and subject = :subject");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}
	//データベース接続終了
	$pdo = null;

	//教科に移る
	header("location: menu.php");
?>