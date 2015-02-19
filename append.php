<?php
	require_once "header.php";

	//ポストデータ受け取り
	$subject=$_POST['subject'];
	$workbook=$_POST['workbook'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	$memory=$_POST['memory'];

	$smarty->assign('subject', $subject);
	$smarty->assign('workbook', $workbook);
	
	//入力内容チェック
	if ( $subject=="" )$error_flag = $smarty->assign('subject_error', 1);
	if ( $workbook=="" )$error_flag = $smarty->assign('workbook_error', 1);
	if ( $question=="" )$error_flag = $smarty->assign('question_error', 1);
	if ( $answer=="" )$error_flag = $smarty->assign('answer_error', 1);
	if ( mb_strlen($subject)>$MAX_TEXT_NUM )$error_flag = $smarty->assign('subject_long_error', 1);
	if ( mb_strlen($workbook)>$MAX_TEXT_NUM )$error_flag =$smarty->assign('workbook_long_error', 1);
	if ( mb_strlen($memory)>$MAX_TEXT_NUM )$error_flag =$smarty->assign('memory_long_error', 1);

	if( isset($error_flag) )
	{
		$smarty->assign('error', $error_flag);
		$smarty->assign('question', $question);
		$smarty->assign('answer', $answer);
		$smarty->assign('memory', $memory);
		$smarty->display('append_form.html');
		exit();
	}


	try
	{
		//データ登録
		$stmt = $pdo->prepare("INSERT INTO ${TABLE_QUESTIONS}(id, subject, workbook, question, answer, ok, ng, memory) 
							VALUES (:user_id,:subject,:workbook,:question,:answer,0,0,:memory)");
		$stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $workbook);
		$stmt->bindValue(':question', $question);
		$stmt->bindValue(':answer', $answer);
		$stmt->bindValue(':memory', $memory);
		$stmt->execute();

		//データカウント
		$stmt = $pdo->prepare("	SELECT count(*) as count from ${TABLE_QUESTIONS}
								where id = :user_id and subject = :subject and workbook = :workbook");
		$stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $workbook);
		$stmt->execute();

		//何問目に追加したかを割り当て
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		$smarty->assign('count', $data['count']);
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース終了
	$pdo = null;

	//結果表示
	$smarty->display('append_form.html');
?>