<?php
	require_once "header.php";

	$subject = $_POST['subject'];
	$workbook = $_POST['workbook'];

	
	//解答履歴をリセットする処理
	try
	{
		foreach ($_SESSION['q_array'] as $q_no) 
		{
			$stmt = $pdo->prepare("	UPDATE ${TABLE_QUESTIONS} SET ok=0, ng=0 
									WHERE id = :id and q_no = :q_no");
			$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
			$stmt->bindValue(':q_no', $q_no);
			$stmt->execute();
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}
	//データベース接続終了
	$pdo = null;

	//選択画面に移る
	header("location: select.php?subject={$subject}&workbook={$workbook}");
?>