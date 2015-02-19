<?php
	require_once "header.php";

	//データ受け取り
	$subject = $_GET['subject']; 
	$new_subject = $_POST['new_subject'];

	//入力内容チェック
	$error_get = "";
	if ( $new_subject=="" )$error_get .= "&subject_error=1";
	if ( $new_subject===$subject )$error_get .= "&subject_same_error=1";
	if ( mb_strlen($new_subject)>$MAX_TEXT_NUM )$error_get .= "&subject_long_error=1";
	if($error_get!="")
	{
		header("location: revise_subject_form.php?subject=" . $subject . $error_get);
		exit();
	}

	try
	{
		//教科を検索する処理
		$stmt = $pdo->prepare(" SELECT subject FROM ${TABLE_QUESTIONS} 
								where id = :id and subject = :subject
								group by subject");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':subject', $new_subject);
		$stmt->execute();

		//同じ教科の存在を確認したらエラー
		if($data = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$error_get .= ("&subject_exists_error=" . $new_subject);
			header("location: revise_subject_form.php?subject=" . $subject . $error_get);
			exit();
		}
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}



	try
	{
		//問題を更新する処理
		$stmt = $pdo->prepare(" UPDATE ${TABLE_QUESTIONS} SET subject=:new_subject
								WHERE id = :id and subject = :subject");
		$stmt->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
		$stmt->bindValue(':new_subject', $new_subject);
		$stmt->bindValue(':subject', $subject);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		exit($e->getMessage());
	}

	//データベース接続終了
	$pdo = null;

	//編集ページに戻る
	header("location: revise_subject_form.php?subject=" . $new_subject . "&revise_complete=1");	
	exit();
?>