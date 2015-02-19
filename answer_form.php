<?php
	require_once "header.php";

	//データ受け取り
	$q_no = $_GET['q_no'];
	$user_answer=$_POST['user_answer'];

	//ユーザの答えの割り当て
	$smarty->assign('user_answer', $user_answer);

	//現在何問目かは解いた問題数で決める
	$answer_count = $_SESSION['ok'] + $_SESSION['ng'];
	$smarty->assign('q_count', $answer_count + 1);

	//総問題数は、途中から数えても良いように、開始番号の値だけ引く
	$smarty->assign('q_sum', count($_SESSION['q_array'])-$_SESSION['start_num']);

	//問題を検索する処理
	try
	{
		//覚え方の登録、編集
		if (isset($_POST['memory'])) 
		{
			$user_memory = $_POST['user_memory'];
			if(mb_strlen($user_memory)>$MAX_TEXT_NUM)
			{
				$smarty->assign('memory_error',1);
			}
			else
			{
				$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET memory=:memory
										WHERE id = :id and q_no = :q_no");
				$stmt->bindValue(':memory', $user_memory);
				$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
				$stmt->bindValue(':q_no', $q_no, PDO::PARAM_INT);
				$stmt->execute();
			}
		}

		$stmt = $pdo->prepare(" SELECT * FROM ${TABLE_QUESTIONS} 
								where id = :id and q_no = :q_no");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':q_no', $q_no, PDO::PARAM_INT);
		$stmt->execute();

		//問題データ割り当て
		$question = $stmt->fetch(PDO::FETCH_ASSOC);

		//反転処理	
		if ($_SESSION['reverse']==1)
		{
			$tmp=$question['question'];
			$question['question']=$question['answer'];
			$question['answer']=$tmp;
		}
			
		$smarty->assign('question', $question);
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	$str_mached="";
	$str_unmached="";

	//前方の一致部分と一致していない部分に分ける
	if($user_answer!="")
	{
		for($i=0; preg_match("/^".mb_substr($question['answer'], 0, $i)."/", $user_answer); $i++)
		{
			if ($i>mb_strlen($user_answer) || $i>mb_strlen($question['answer'])) break;
		}
		$i--;
		if($i>0)$str_mached=mb_substr($user_answer, 0, $i);
		$str_unmached=mb_substr($user_answer, $i, mb_strlen($user_answer));
	}
	
	//前方が全て一致してかつ文字数が足りないときは、答えが足りていない
	if($str_unmached=="" && $user_answer!="" && mb_strlen($user_answer)<mb_strlen($question['answer']))
	{
		$str_unmached="____";
	}

	//合致部分、非合致部分を割り当て
	$smarty->assign('str_mached', $str_mached);
	$smarty->assign('str_unmached', $str_unmached);

	//結果表示
	$smarty->display('answer_form.html');
?>