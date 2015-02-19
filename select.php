<?php
	require_once "header.php";

	//分類データ取得
	$subject = $_GET['subject'];
	$workbook = $_GET['workbook'];
	$smarty->assign('subject', $subject);
	$smarty->assign('workbook', $workbook);

	//エラー取得
	$smarty->assign('select_error', isset($_GET['select_error']));

	//セッションを初期化
	$_SESSION['ok']=0;
	$_SESSION['ng']=0;
	$_SESSION['reverse']=0;
	$_SESSION['q_array']=array();
	$_SESSION['judge_array']=array();

	//問題データ配列初期化
	$questions = array();

	//デフォルトの選択状態
	$smarty->assign('sort_1', "none");
	$smarty->assign('up_down_1', "up");
	$smarty->assign('sort_2', "none");
	$smarty->assign('up_down_2', "up");
	$smarty->assign('sort_3', "none");
	$smarty->assign('up_down_3', "up");
	$smarty->assign('random', "false");
	$smarty->assign('reverse', "false");
	$smarty->assign('zero_percent', "false");
	$smarty->assign('zero_answer', "false");
	

	//検索/並べ替えフォームの処理
	$search="";
	$sort_query="";
	if (isset($_POST['search_sort'])) 
	{
		$search=$_POST['search'];
	
		//優先度
		for ($i=1; $i <= $BENCHMARK_NUM; $i++)
		{ 
			if($_POST['sort_'.$i] != "none")
			{
				switch ($_POST['sort_'.$i])
				{
					case 'rate': $sort_query .= "answer_rate"; break;
					case 'num': $sort_query .= "answer_num"; break;
					case 'append': $sort_query .= "q_no"; break;
					default:break;
				}
				if($_POST['up_down_'.$i]=="down")$sort_query .= " desc";
				$sort_query .= ",";
				$smarty->assign('sort_'.$i, $_POST['sort_'.$i]);
				$smarty->assign('up_down_'.$i, $_POST['up_down_'.$i]);
			}
		}
		//最後のコンマを取り除く
		if($sort_query != "")$sort_query = "order by " . rtrim ( $sort_query, ",");
	}
	$smarty->assign('search', $search);

	$zero_answer_query="";
	$zero_percent_query="";
	if(isset($_POST['zero_percent']) & isset($_POST['zero_answer']))
	{
		$zero_percent_query=" and ok = 0 ";
		$smarty->assign('zero_percent', "true");
		$smarty->assign('zero_answer', "true");
	}
	else
	{
		//正答率0%
		if(isset($_POST['zero_percent']))
		{
			$zero_percent_query=" and ok/(ok+ng) = 0 ";
			$smarty->assign('zero_percent', "true");
		}

		//解答回数0回
		if(isset($_POST['zero_answer']))
		{
			$zero_answer_query=" and ok+ng = 0 ";
			$smarty->assign('zero_answer', "true");
		}
	}

	
	//問題を検索する処理
	try
	{
		$stmt = $pdo->prepare(" SELECT q_no , question, answer,
								ok+ng as answer_num, ok/(ok+ng) as answer_rate FROM ${TABLE_QUESTIONS} 
								where id = :id and subject = :subject and workbook = :workbook 
								and concat(question, char(0), answer) like '%" . $search . "%'"
								. $zero_answer_query . $zero_percent_query 
								. $sort_query
								);
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $workbook);
		$stmt->execute();


		//問題データ割り当て
		while ( $data = $stmt->fetch(PDO::FETCH_ASSOC) )
		{
			if($data['answer_num']==0)
			{
				$data['answer_rate']="未解答";
			}
			else
			{
				$data['answer_rate']=(int)($data['answer_rate']*100) . "% ";
			}

			//リバースボタンが押されていたら、解答の方を表示する。
			if (isset($_POST['reverse']))
			{
				$data['question']=$data['answer'];
				$smarty->assign('reverse', "true");	
				$_SESSION['reverse']=1;
			}
			else
			{
				$_SESSION['reverse']=0;
			}

			//文字数が設定値を越えていたらTRUEを与えておく
			$data['len_q'] = mb_strlen($data['question'])>$DISP_Q_NUM;

			//文字数を設定値に変更
			$data['question'] = mb_substr($data['question'], 0, $DISP_Q_NUM);

			//割り当て
			$questions[]=$data;
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}
	//データベース接続終了
	$pdo = null;


	//ランダム
	if(isset($_POST['random']))
	{
		shuffle($questions);
		$smarty->assign('random', "true");
	}

	//問題データ確定
	$smarty->assign('questions', $questions);


	//問題を解く順番を決める
	for($i=0; isset($questions[$i]['q_no']); $i++)
	{
		array_push($_SESSION['q_array'], $questions[$i]['q_no']);
	}

	//結果表示
	$smarty->display('select.html');
?>