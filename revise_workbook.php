<?php
	require_once "header.php";

	//データ受け取り
	$subject = $_GET['subject']; 
	$workbook = $_GET['workbook'];
	$new_workbook = $_POST['new_workbook'];

	//入力内容チェック
	$error_get = "";
	if ( $new_workbook=="" )$error_get .= "&workbook_error=1";
	if ( $new_workbook===$workbook )$error_get .= "&workbook_same_error=1";
	if ( mb_strlen($new_workbook)>$MAX_TEXT_NUM )$error_get .= "&workbook_long_error=1";
	if($error_get!="")
	{
		header("location: revise_workbook_form.php?subject=" . $subject . "&workbook=" . $workbook . $error_get);
		exit();
	}

	try
	{
		//問題集を検索する処理
		$stmt = $pdo->prepare(" SELECT workbook FROM ${TABLE_QUESTIONS}  
								where id = :id and subject = :subject
								and workbook = :workbook group by workbook");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $new_workbook);
		$stmt->execute();

		//同じ問題集の存在を確認したらエラー
		if($data = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$error_get .= ("&workbook_exists_error=" . $new_workbook);
			header("location: revise_workbook_form.php?subject=" .$subject. "&workbook=" . $workbook . $error_get);
			exit();
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}



	try
	{
		//問題集を更新する処理
		$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET workbook=:new_workbook
								WHERE id = :id and subject = :subject 
								and workbook = :workbook ");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':new_workbook', $new_workbook);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':workbook', $workbook);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//編集ページに戻る
	header("location: revise_workbook_form.php?subject=" . $subject . "&workbook=" . $new_workbook . "&revise_complete=1");	
	exit();
?>