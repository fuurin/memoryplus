<?php
	require_once "header.php";

	//データ受け取り
	$subject = $_GET['subject'];
	$smarty->assign('subject', $subject);
	$smarty->assign('subject_error', isset($_GET['subject_error']));
	$smarty->assign('subject_long_error', isset($_GET['subject_long_error']));
	$smarty->assign('subject_same_error', isset($_GET['subject_same_error']));
	$smarty->assign('subject_exists_error', isset($_GET['subject_exists_error']));
	$smarty->assign('subject_select_error', isset($_GET['subject_select_error']));
	$smarty->assign('revise_complete', isset($_GET['revise_complete']));
	$smarty->assign('exists_complete', isset($_GET['exists_complete']));
	$smarty->assign('reset_complete', isset($_GET['reset_complete']));
	
	if (isset($_GET['subject_exists_error'])) 
	{
		$smarty->assign('error_subject', $_GET['subject_exists_error']);
	}

	try
	{
		//教科を検索する処理
		$stmt = $pdo->prepare(" SELECT subject FROM ${TABLE_QUESTIONS}  
								where id = :id and subject != :subject 
								group by subject" );
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->execute();

		//教科データ割り当て
		$subjects = array();
		while($data = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$subjects[] = $data;
		}
		
		$smarty->assign('subjects', $subjects);
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('revise_subject_form.html');
?>