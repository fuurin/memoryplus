<?php
	require_once "header.php";

	//分類を割り当て
	$smarty->assign('subject', $_GET['subject']);
	$smarty->assign('workbook', $_GET['workbook']);
	$smarty->assign('path', $_GET['path']);

	//DB切断
	$pdo = null;

	//結果表示
	$smarty->display('download_csv_complete.html');
?>