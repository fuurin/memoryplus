<?php
	require_once "header.php";

	//データ受け取り
	$subject = $_GET['subject'];
	$workbook = $_GET['workbook'];
	$smarty->assign('subject', $subject);
	$smarty->assign('workbook', $workbook);
	$smarty->assign('workbook_error', isset($_GET['workbook_error']));
	$smarty->assign('workbook_long_error', isset($_GET['workbook_long_error']));
	$smarty->assign('workbook_same_error', isset($_GET['workbook_same_error']));
	$smarty->assign('workbook_exists_error', isset($_GET['workbook_exists_error']));
	$smarty->assign('workbook_select_error', isset($_GET['workbook_select_error']));
	$smarty->assign('revise_complete', isset($_GET['revise_complete']));
	$smarty->assign('exists_complete', isset($_GET['exists_complete']));
	$smarty->assign('reset_complete', isset($_GET['reset_complete']));
	
	if (isset($_GET['workbook_exists_error'])) 
	{
		$smarty->assign('error_workbook', $_GET['workbook_exists_error']);
	}

	try
	{
		//問題集を検索する処理
		$stmt = $pdo->prepare(" SELECT workbook FROM ${TABLE_QUESTIONS} 
								where id = :id and subject = :subject 
								and workbook != :workbook group by workbook" );
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $workbook);
		$stmt->execute();

		//問題集データ割り当て
		$workbooks = array();
		while($data = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$workbooks[] = $data;
		}
		
		$smarty->assign('workbooks', $workbooks);
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('revise_workbook_form.html');
?>