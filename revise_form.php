<?php
	require_once "header.php";

	//データ受け取り
	$q_no = $_GET['q_no'];
	$smarty->assign('q_no', $q_no);
	$smarty->assign('subject_error', isset($_GET['subject_error']));
	$smarty->assign('workbook_error', isset($_GET['workbook_error']));
	$smarty->assign('subject_long_error', isset($_GET['subject_long_error']));
	$smarty->assign('workbook_long_error', isset($_GET['workbook_long_error']));
	$smarty->assign('memory_long_error', isset($_GET['memory_long_error']));
	$smarty->assign('question_error', isset($_GET['question_error']));
	$smarty->assign('answer_error', isset($_GET['answer_error']));
	$smarty->assign('reset', isset($_GET['reset']));
	$smarty->assign('answering', isset($_GET['answering']));

	try
	{
		//問題を検索する処理
		$stmt = $pdo->prepare(" SELECT * FROM ${TABLE_QUESTIONS}  
								where id = :id and q_no = :q_no" );
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':q_no', $q_no, PDO::PARAM_INT);
		$stmt->execute();

		//問題データ割り当て
		$question = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$smarty->assign('question', $question);
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('revise_form.html');
?>