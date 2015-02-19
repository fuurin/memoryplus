<?php
	require_once "header.php";

	//教科名を割り当て
	$smarty->assign('subject', $_GET['subject']);
	$smarty->assign('workbook', $_GET['workbook']);

	//DB切断
	$pdo = null;

	//結果表示
	$smarty->display('delete_workbook_check.html');
?>