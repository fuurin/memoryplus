<?php
	require_once "macro.php";

	//データベース接続（すべてのPHPファイルでは必ずDB接続を最後に切断すること）
	try
	{
		$pdo = new PDO('mysql:dbname='.$dbname.';host='.$host,$hostname,$password,
						array(	PDO::MYSQL_ATTR_INIT_COMMAND => "SET SESSION sql_mode='TRADITIONAL'",
								PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$pdo->query('SET NAMES utf8');
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}



	//テンプレート利用準備
	//smartyクラスの読み込み
	require_once $SMARTY_PATH;
	
	//smartyのインスタンスを作成
	$smarty = new Smarty();

	//テンプレートディレクトリを選択
	$smarty->template_dir = 'templates/';

	//コンパイルデータを保存するディレクトリを選択
	$smarty->compile_dir = 'templates_c/';

	//HTMLでも使うマクロを割り当て
	$smarty->assign('MAX_TEXT_NUM', $MAX_TEXT_NUM);
	$smarty->assign('MAX_PASS_NUM', $MAX_PASS_NUM);
	$smarty->assign('MIN_PASS_NUM', $MIN_PASS_NUM);
	$smarty->assign('EXP_ROW_NUM', $EXP_ROW_NUM);


	//セッションスタート（すべてのPHPファイルではセッションをスタートしないこと）
	session_start();
?>