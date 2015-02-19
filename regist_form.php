<?php
	require_once "header_super.php";

	//データベース接続終了
	$pdo = null;

	//セッションを初期化
	$_SESSION['user_id']=NULL;

	//エラー状況読み込み
	$smarty->assign('identifical', isset($_GET['identifical']) );
	$smarty->assign('match', isset($_GET['match']) );
	$smarty->assign('name_range', isset($_GET['name_range']) );
	$smarty->assign('pass_range', isset($_GET['pass_range']) );
	
	//エラー起こしたときのための名前割り当て
	if( isset($_GET['name']) )
	{
		$smarty->assign('name', $_GET['name'] );
	}

	//結果表示
	$smarty->display('regist_form.html');
?>