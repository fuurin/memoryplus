<?php
	require_once "header.php";

	if (isset($_POST['subject'])) 
	{
		$smarty->assign('subject',$_POST['subject']);
	}
	else
	{
		$smarty->assign('subject',"");	
	}
	
	if (isset($_POST['workbook'])) 
	{
		$smarty->assign('workbook',$_POST['workbook']);
	}
	else
	{
		$smarty->assign('workbook',"");	
	}

	$smarty->assign('question', "");
	$smarty->assign('answer', "");
	$smarty->assign('memory', "");

	$smarty->display('append_form.html')

?>