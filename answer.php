<?php
	require_once "header.php";

	$q_no = $_GET['q_no'];
	$judge = $_GET['judge'];

	if(!in_array($q_no, $_SESSION['already']))
	{
		//正解数と正解問題または不正解数と不正解問題を更新する準備をする処理
		if($judge=="true")
		{
			$_SESSION["ok"]++;
			array_push($_SESSION["q_ok"], $q_no);
			array_push($_SESSION["judge_array"], "true");
		}
		else if($judge=="false")
		{
			$_SESSION["ng"]++;
			array_push($_SESSION["q_ng"], $q_no);
			array_push($_SESSION["judge_array"], "false");
		}

		//すでに解いたことを示す
		array_push($_SESSION['already'], $q_no);
	}
	
	try
	{
		//次の問題の番号を調べ、無ければ結果画面へ
		$next_q_no = $_SESSION['q_array'][array_search($q_no, $_SESSION['q_array'])+1];
		if( isset($next_q_no) )
		{
			$next_site = "question.php?q_no=" . $next_q_no;
		}
		else
		{
			//今やった問題の教科と問題集を調べる
			$stmt = $pdo->prepare("	SELECT subject, workbook from ${TABLE_QUESTIONS}
									where id = :id and q_no = :q_no");
			$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
			$stmt->bindValue(':q_no', $q_no, PDO::PARAM_INT);
			$stmt->execute();
			$data = $stmt->fetch(PDO::FETCH_ASSOC);
			$subject = $data['subject'];
			$workbook = $data['workbook'];

			$next_site = "count_answer.php?subject=" . $subject . "&workbook=" . $workbook ."&finish=1";
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//次の問題に移る
	header("location: " . $next_site);
?>

