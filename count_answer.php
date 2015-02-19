<?php
	require_once "header.php";

	$subject = $_GET['subject'];
	$workbook = $_GET['workbook'];

	//完了タイムを測定
	date_default_timezone_set("Asia/Tokyo");
	$_SESSION['time']=strtotime(date("YmdHis"))-strtotime($_SESSION['start_time']);

	try
	{
		$count = count($_SESSION['judge_array']);
		for($i=0;$i<$count;$i++)
		{
			//正解数と正解問題または不正解数と不正解問題を更新する処理
			if($_SESSION['judge_array'][$i]=="true")
			{
				$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET ok = ok + 1
										WHERE id = :id and q_no = :q_no");
			}
			else if($_SESSION['judge_array'][$i]=="false")
			{
				$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET ng = ng + 1
										WHERE id = :id and q_no = :q_no");
			}
			$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
			$stmt->bindValue(':q_no', $_SESSION['q_array'][$i+$_SESSION['start_num']], PDO::PARAM_INT);
			$stmt->execute();
		}
		$_SESSION['judge_array']=array();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	if (isset($_GET['finish'])) 
	{
		header("location: result.php?subject=${subject}&workbook=${workbook}");
		exit();
	}
	else
	{
		header("location: select.php?subject=${subject}&workbook=${workbook}");
		exit();
	}
?>