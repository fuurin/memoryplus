<?php
	require_once "header.php";

	//データ受け取り
	$q_no = $_GET['q_no'];
	$answering = $_GET['answering']?"&answering=1":""; 
	$subject = $_POST['subject'];
	$workbook = $_POST['workbook'];
	$question = $_POST['question'];
	$answer =  $_POST['answer'];
	$memory = $_POST['memory'];
	$reset = $_POST['reset']?"&reset=1":"";

	//入力内容チェック
	$error_get = "";
	if ( $subject=="" )$error_get .= "&subject_error=1";
	if ( $workbook=="" )$error_get .= "&workbook_error=1";
	if ( $question=="" )$error_get .= "&question_error=1";
	if ( $answer=="" )$error_get .= "&answer_error=1";
	if ( mb_strlen($subject)>$MAX_TEXT_NUM )$error_get .= "&subject_long_error=1";
	if ( mb_strlen($workbook)>$MAX_TEXT_NUM )$error_get .= "&workbook_long_error=1";
	if ( mb_strlen($memory)>$MAX_TEXT_NUM )$error_get .= "&memory_long_error=1";

	if($error_get!="")
	{
		header("location: revise_form.php?q_no=" 
				. $q_no . $error_get . $answering . $reset);
		exit();
	}


	//正答率、解答回数リセット
	$reset_query=isset($_POST['reset']) ? ",ok=0,ng=0 " : "";	
	

	try
	{
		//問題を更新する処理
		$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET subject=:subject,
								workbook=:workbook, question=:question, 
								answer=:answer, memory = :memory "
								. $reset_query .
								"WHERE id = :id and q_no = :q_no");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':q_no', $q_no, PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $workbook);
		$stmt->bindValue(':question', $question);
		$stmt->bindValue(':answer', $answer);
		$stmt->bindValue(':memory', $memory);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	if($answering)
	{
		header("location: question.php?q_no=" . $q_no);	
		exit();
	}
	else
	{
		//問題が編集された問題集に移る
		header("location: select.php?subject=" . $subject . "&workbook=" . $workbook);
		exit();
	}
?>