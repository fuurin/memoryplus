<?php
	require_once "header.php";

	//問題番号を受け取る
	$q_no = $_GET['q_no'];

	//再挑戦時の初期化処理
	if (isset($_GET['restart']))
	{
		date_default_timezone_set("Asia/Tokyo");
		$_SESSION['start_time'] = date('YmdHis');
		$restart = $_GET['restart'];
		$_SESSION['ok']=0;
		$_SESSION['ng']=0;
		if ($restart=="ng")$_SESSION['q_array']=$_SESSION['q_ng'];
		if ($restart=="ok")$_SESSION['q_array']=$_SESSION['q_ok'];
	}

	//現在解いた問題数
	$answer_count = $_SESSION['ok'] + $_SESSION['ng'];

	//問題を解き始めたところなら、初期化処理を行う。
	if ($answer_count==0)
	{
		date_default_timezone_set("Asia/Tokyo");
		$_SESSION['start_time']=date('YmdHis');
		$_SESSION['start_num']=array_search($q_no, $_SESSION['q_array']);
		$_SESSION['q_ok']=array();
		$_SESSION['q_ng']=array();
		$_SESSION['already']=array();
	}

	//現在何問目かは解いた問題数で決める
	$smarty->assign('q_count', $answer_count + 1);

	//総問題数は、途中から数えても良いように、開始番号の値だけ引く
	$smarty->assign('q_sum', count($_SESSION['q_array'])-$_SESSION['start_num']);

	try
	{
		//問題を検索する処理
		$stmt = $pdo->prepare(" SELECT * FROM ${TABLE_QUESTIONS}  
								where id = :id and q_no = :q_no");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':q_no', $q_no, PDO::PARAM_INT);
		$stmt->execute();

		foreach ($stmt as $question) 
		{
			//覚え方を入手
			if (isset($_POST['memory'])) 
			{
				$smarty->assign('memory', 1);
				
				if($question['memory']==NULL)
				{
					$question['memory']="覚え方が登録されていません。";
				}
			}

			//正答率の割り当て
			$answer_num = $question['ok']+$question['ng'];
			$smarty->assign('answer_num', "$answer_num");
			if($answer_num <= 0)
			{
				$smarty->assign('answer_rate', "未解答");
			}
			else
			{
				$smarty->assign('answer_rate', 
					(int)(($question['ok']/$answer_num)*100).'%' );
			}

			//反転処理	
			if ($_SESSION['reverse']==1)
			{
				$tmp=$question['question'];
				$question['question']=$question['answer'];
				$question['answer']=$tmp;
			}

			//問題データ割り当て
			$smarty->assign('question', $question);
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('question.html');
?>