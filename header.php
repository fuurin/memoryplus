<?php
	require_once 'header_super.php';

	if(isset($_SESSION['user_id']))
	{
		try
		{
			$stmt = $pdo->prepare("SELECT name from ${TABLE_USERS} where id = :id");
			$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
			$stmt->execute();

			if ($data = $stmt->fetch(PDO::FETCH_ASSOC)) 
			{
				$smarty->assign('user', $data);
				$user_name = $data['name'];
			}
			else
			{
				//データベース接続終了
				$pdo = null;

				//セッションをクリア
				$_SESSION['user_id']=NULL;

				header("location:index.php?error=USER");
				exit;
			}
		}
		catch(PDOException $e)
		{
			exit($e->getMessage());
		}
	}
	//セッションにIDがなければログインページに飛ばす
	else 
	{
		$pdo = null;
		header("location:index.php?error=ID");
		exit;
	}
?>