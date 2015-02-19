<?php
	require_once "header.php";

	$smarty->assign('time', date('i分s秒',$_SESSION['time']));

	//データ受け取り
	$smarty->assign('subject', $_GET['subject']);
	$smarty->assign('workbook', $_GET['workbook']);

	//解答結果を作成
	$ok = $_SESSION['ok'];
	$ng = $_SESSION['ng'];
	$sum = $ok + $ng;
	if($sum!=0)
	{
		$rate = ($ok/$sum)*100;
	}
	else
	{
		$rate=0;
	}

	//解答結果を割り当て
	$smarty->assign('ok', $ok);
	$smarty->assign('ng', $ng);
	$smarty->assign('sum', $sum);

	if ($_SESSION['ok']>0) 
	{
		$smarty->assign('q_ok_first', $_SESSION['q_ok'][0]);
	}

	if ($_SESSION['ng']>0) 
	{
		$smarty->assign('q_ng_first', $_SESSION['q_ng'][0]);
	}

	if ($sum>0) 
	{
		$smarty->assign('q_normal_first', 
			$_SESSION['q_array'][$_SESSION['start_num']]);
	}

	if ($rate >= $RANK_S)$smarty->assign('message', $MESSAGE_S);
	elseif ($rate >= $RANK_A)$smarty->assign('message', $MESSAGE_A);
	elseif ($rate >= $RANK_B)$smarty->assign('message', $MESSAGE_B);
	elseif ($rate >= $RANK_C)$smarty->assign('message', $MESSAGE_C);
	elseif ($rate >= $RANK_D)$smarty->assign('message', $MESSAGE_D);
	else $smarty->assign('message', $MESSAGE_E);

	//データベース接続終了
	$pdo = null;

	//結果表示
	$smarty->display('result.html');
?>