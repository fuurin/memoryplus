<?php
	require_once "header_super.php";

	if( isset($_SESSION['user_id']) )
	{
		header("location:menu.php");
		exit;
	}

	if(isset($_GET['error']))
	{
		switch ($_GET['error']) 
		{
			case 'LOGIN':
				$smarty->assign('message', "ユーザ名かパスワードが違います。");
				break;

			case 'USER':
				$smarty->assign('message', "あなたはユーザ登録されていません。新規登録してください。");
				break;

			case 'ID':
				$smarty->assign('message', "IDが有効になっていません。ログインし直してください。");
				break;
			
			default:
				$smarty->assign('message', "未知のエラーです。");
				break;
		}
	}

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('index.html');
?>