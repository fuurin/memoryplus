<?php
	require_once 'header_super.php';

	//ユーザIDを一旦解放
	$_SESSION['user_id']=NULL;

	//ユーザ認証データ
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	
	//ユーザ認証
	try
	{
		$stmt = $pdo->prepare(" SELECT id FROM ${TABLE_USERS}
								where name = :name and pass = :pass");
		$stmt->bindValue(':name', $name);
		$stmt->bindValue(':pass', $pass);
		$stmt->execute();

		//データベース接続終了
		$pdo = null;

		if ($data = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			//ユーザIDをセッションにセットする
			$_SESSION['user_id'] = $data['id'];

			//メニュー画面へ通す
			header("location:menu.php");
			exit;
		}
		else
		{
			//ログイン画面へ返す
			header("location:index.php?error=LOGIN");
			exit;
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}
?>