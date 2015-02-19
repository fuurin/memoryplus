<?php
	require_once "header.php";

	//ユーザの情報を全て削除する処理
	try
	{
		$stmt = $pdo->prepare("DELETE FROM ${TABLE_QUESTIONS} WHERE id = :id");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->execute();

		$stmt = $pdo->prepare("DELETE FROM ${TABLE_USERS} where id = :id");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}
	//データベース接続終了
	$pdo = null;

	//セッションを初期化
	$_SESSION['user_id']=NULL;
	
	//ログイン画面に移る
	header("location: index.php");
?>