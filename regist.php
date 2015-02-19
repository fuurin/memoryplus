<?php
	require_once "header_super.php";

	//ポストデータ受け取り
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$conf=$_POST['conf'];

	//入力内容チェック
	$error = "";
	if ( $name=="" or mb_strlen($name)>$MAX_TEXT_NUM )$error .= "&name_range=error";
	if ( mb_strlen($pass)<$MIN_PASS_NUM or mb_strlen($pass)>$MAX_PASS_NUM )$error .= "&pass_range=error";
	if ( $pass != $conf )$error .= "&match=error";

	try
	{
		//同じ名前とパスワードの組み合わせがないか検索
		$stmt = $pdo->prepare("	SELECT name from ${TABLE_USERS} where name = :name");
		$stmt->bindValue(':name', $name);
		$stmt->execute();

		if($data=$stmt->fetch(PDO::FETCH_ASSOC))$error .= "&identifical=error";
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	if( $error!="" )
	{
		$pdo = null;
		header('location:regist_form.php?name='.$name.$error);
		exit();
	}
	else
	{
		try
		{
			//データ登録
			$stmt = $pdo->prepare("INSERT INTO ${TABLE_USERS}(name, pass) VALUES (:name, :pass)");
			$stmt->bindValue(':name', $name);
			$stmt->bindValue(':pass', $pass);
			$stmt->execute();

			//ID入手
			$stmt = $pdo->prepare("SELECT id, name from ${TABLE_USERS} where name = :name");
			$stmt->bindValue(':name', $name);
			$stmt->execute();

			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			$smarty->assign('user', $user);
		}
		catch(PDOException $e)
		{
			exit($e->getMessage());
		}
	}

	//データベース終了
	$pdo = null;

	//セッションにセット
	$_SESSION['user_id']=$user['id'];

	//結果表示
	$smarty->display('regist_complete.html');
?>