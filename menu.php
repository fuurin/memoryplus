<?php
	require_once "header.php";

	//科目データ配列初期化
	$subjects = array();

	try
	{
		//科目を検索する処理
		$stmt = $pdo->prepare(" SELECT subject FROM ${TABLE_QUESTIONS} 
								where id = :id group by subject ");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->execute();

		while ( $data = $stmt->fetch(PDO::FETCH_ASSOC) )
		{
			$subjects[]=$data;
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	$smarty->assign('subjects', $subjects);

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('menu.html');
?>