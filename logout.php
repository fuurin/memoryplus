<?php
	require_once "header_super.php";

	//ユーザIDを解放
	$_SESSION['user_id'] = NULL;

	//DB切断
	$pdo = null;

	//ログインページに飛ぶ
	header("location:index.php");
	
?>