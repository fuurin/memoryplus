<?php
	require_once "header.php";

	$subject = $_GET['subject'];
	
	try
	{
		//問題集を検索する処理
		$stmt = $pdo->prepare(" SELECT workbook FROM ${TABLE_QUESTIONS}  
								where id = :id and subject = :subject 
								group by workbook" );
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->execute();

		//問題集データ割り当て
		$workbooks = array();
		while ( $data = $stmt->fetch(PDO::FETCH_ASSOC) )
		{
			$workbooks[]=$data;
		}
		$smarty->assign('workbooks', $workbooks);
		$smarty->assign('subject', $subject);
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('workbook.html');
?>