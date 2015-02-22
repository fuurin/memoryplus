<?php
	//マクロ
	$MAX_TEXT_NUM = 50;	//テキストボックスの最大入力文字数
	$MAX_PASS_NUM = 10;	//パスワードの最大入力文字数
	$MIN_PASS_NUM = 3;	//パスワードの最大入力文字数
	$DISP_Q_NUM = 8;	//問題選択画面に表示する問題の文字数
	$BENCHMARK_NUM = 3;	//ソートの評価基準の個数
	$EXP_ROW_NUM = 5;	//入力するCSVファイルに期待する行数

	//問題結果閾値（5段階）
	$RANK_S=100;
	$RANK_A=90;
	$RANK_B=70;
	$RANK_C=60;
	$RANK_D=40;

	//結果メッセージ（5＋1段階）
	$MESSAGE_S="やったね！完璧！";
	$MESSAGE_A="すごい！";
	$MESSAGE_B="大体オッケー！";
	$MESSAGE_C="ギリギリセーフ！";
	$MESSAGE_D="残念！赤点！";
	$MESSAGE_E="本気を出そう！";

	//データベース情報
	$dbname='phpdb';		//DB名	
	$host='php.ci5vjjwa5osw.ap-northeast-1.rds.amazonaws.com';		//DBのIPアドレス
	$hostname='root';		//DBユーザネーム
	$password='E0M6g2b4r';	//DBパスワード
	$port='3306';

	//テーブル情報
	$TABLE_USERS = '15_users';			//ユーザテーブル
	$TABLE_QUESTIONS = '15_questions';	//問題テーブル

	$SMARTY_PATH = 'smarty/Smarty.class.php';	//Smartyの場所
?>
