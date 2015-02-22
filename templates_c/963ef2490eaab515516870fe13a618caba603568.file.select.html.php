<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 17:43:56
         compiled from "templates/select.html" */ ?>
<?php /*%%SmartyHeaderCode:88190580554e996cca91475-73697163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '963ef2490eaab515516870fe13a618caba603568' => 
    array (
      0 => 'templates/select.html',
      1 => 1424440996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88190580554e996cca91475-73697163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'subject' => 0,
    'workbook' => 0,
    'search' => 0,
    'sort_1' => 0,
    'up_down_1' => 0,
    'sort_2' => 0,
    'up_down_2' => 0,
    'sort_3' => 0,
    'up_down_3' => 0,
    'random' => 0,
    'reverse' => 0,
    'zero_percent' => 0,
    'zero_answer' => 0,
    'select_error' => 0,
    'questions' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e996ccb7c516_62962434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e996ccb7c516_62962434')) {function content_54e996ccb7c516_62962434($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>問題選択</h1>

<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]の問題</h2>

<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
">
	←問題集選択に戻る
</a><br/>

<a href="menu.php">
	←←メニューに戻る
</a><br/>

<h3>検索/並べ替え</h3>
<form action="select.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" method="post">
	<p>文字列<input type="text" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" autofocus>を含む問題</p>

	<table class="sort">
	<tr><th>優先順</th><th>基準</th></tr>
	<tr>
		<td class="ct">1</td>
		<td>
			<select name="sort_1">
			<option value="none">選択してください</option>
			<option value="rate" <?php if ($_smarty_tpl->tpl_vars['sort_1']->value=="rate") {?>selected<?php }?>>正答率</option>
			<option value="num" <?php if ($_smarty_tpl->tpl_vars['sort_1']->value=="num") {?>selected<?php }?>>解答回数</option>
			<option value="append" <?php if ($_smarty_tpl->tpl_vars['sort_1']->value=="append") {?>selected<?php }?>>追加順</option>
			</select>
		</td>
		<td>
			<label>
				<input type="radio" name="up_down_1" value="up"
				<?php if ($_smarty_tpl->tpl_vars['up_down_1']->value=="up") {?>checked<?php }?>>昇順
			</label>
		</td>
		<td>
			<label>
				<input type="radio" name="up_down_1" value="down"  
				<?php if ($_smarty_tpl->tpl_vars['up_down_1']->value=="down") {?>checked<?php }?>>降順
			</label>
		</td>
	</tr>
	
	<tr>
		<td class="ct">2</td>
		<td>
			<select name="sort_2">
			<option value="none">選択してください</option>
			<option value="rate" <?php if ($_smarty_tpl->tpl_vars['sort_2']->value=="rate") {?>selected<?php }?>>正答率</option>
			<option value="num" <?php if ($_smarty_tpl->tpl_vars['sort_2']->value=="num") {?>selected<?php }?>>解答回数</option>
			<option value="append" <?php if ($_smarty_tpl->tpl_vars['sort_2']->value=="append") {?>selected<?php }?>>追加順</option>
			</select>
		</td>
		<td>
			<label>
				<input type="radio" name="up_down_2" value="up"
				<?php if ($_smarty_tpl->tpl_vars['up_down_2']->value=="up") {?>checked<?php }?>>昇順
			</label>
		</td>
		<td>
			<label>
				<input type="radio" name="up_down_2" value="down"  
				<?php if ($_smarty_tpl->tpl_vars['up_down_2']->value=="down") {?>checked<?php }?>>降順
			</label>
		</td>
	</tr>

	<tr>
		<td class="ct">3</td>
		<td>
			<select name="sort_3">
			<option value="none">選択してください</option>
			<option value="rate" <?php if ($_smarty_tpl->tpl_vars['sort_3']->value=="rate") {?>selected<?php }?>>正答率</option>
			<option value="num" <?php if ($_smarty_tpl->tpl_vars['sort_3']->value=="num") {?>selected<?php }?>>解答回数</option>
			<option value="append" <?php if ($_smarty_tpl->tpl_vars['sort_3']->value=="append") {?>selected<?php }?>>追加順</option>
			</select>
		</td>
		<td>
			<label>
				<input type="radio" name="up_down_3" value="up"
				<?php if ($_smarty_tpl->tpl_vars['up_down_3']->value=="up") {?>checked<?php }?>>昇順
			</label>
		</td>
		<td>
			<label>
				<input type="radio" name="up_down_3" value="down"  
				<?php if ($_smarty_tpl->tpl_vars['up_down_3']->value=="down") {?>checked<?php }?>>降順
			</label>
		</td>
	</tr>
	</table>

	<table>
		<tr>
			<td>
				<label>
					<input type="checkbox" name="random"
					<?php if ($_smarty_tpl->tpl_vars['random']->value=="true") {?>checked<?php }?>>ランダム
				</label>
			</td>
			<td>
				<label>
					<input type="checkbox" name="reverse"
					<?php if ($_smarty_tpl->tpl_vars['reverse']->value=="true") {?>checked<?php }?>>問題と解答を逆にする
				</label>
			</td>
		</tr>
		<tr>
			<td>
				<label>
					<input type="checkbox" name="zero_percent"
					<?php if ($_smarty_tpl->tpl_vars['zero_percent']->value=="true") {?>checked<?php }?>>正答率が0％の問題
				</label>
			</td>
			<td>
				<label>
					<input type="checkbox" name="zero_answer"
					<?php if ($_smarty_tpl->tpl_vars['zero_answer']->value=="true") {?>checked<?php }?>>解答回数が0回の問題
				</label>
			</td>
		</tr>
	</table><br/>
	<input type="submit" name="search_sort" value="検索/並べ替え">
</form>





<h3>選択された問題</h3>

<table border="2" class="question">
	<caption>
		<table>
			<tr>
				<td>
					<form action="append_form.php" method="post">
						<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
						<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
						<input type="submit" value="問題を追加"　/>
					</form>
				</td>

				<td>
					<form action="download_csv_form.php" method="get">
						<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
						<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
						<input type="submit" value="CSVファイルダウンロード"　/>
					</form>
				</td>

				<td>
					<form action="reset_answer_selected_check.php" method="get">
						<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
						<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
						<input type="submit" name="reset_selected" value="解答履歴をリセット">
					</form>
				</td>

				<!-- <td>
					<form action="reset_memory_selected_check.php" method="get">
						<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
						<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
						<input type="submit" name="reset_selected" value="覚え方を削除">
					</form>
				</td>
 				-->

				<td>
					<form action="delete_selected_check.php" method="get">
						<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
						<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
						<input type="submit" name="delete_selected" value="すべて削除">
					</form>
				</td>
			</tr>
		</table>
		<?php if ($_smarty_tpl->tpl_vars['select_error']->value=="true") {?><p class="error">→問題が1問も選択されていませんでした。</p>
		<?php } else { ?><br/><?php }?>
	</caption>

	<tr><th>問題</th><th>問題の編集</th><th>問題の削除</th><th>正答率</th><th>解答回数</th></tr>
	<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
	<tr>
		<td class="lt">
			<a href="question.php?q_no=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
">
				<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['question'],@constant('ENT_QUOTES')));
if ($_smarty_tpl->tpl_vars['question']->value['len_q']=="true") {?>・・・<?php }?>
			</a>
		</td>

		<td class="ct">
			<form action="revise_form.php" method="get">
				<input type="hidden" name="q_no" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
" />
				<input type="submit" value="編集"　/>
			</form>
		</td>

		<td class="ct">
			<form action="delete_question.php" method="post">
				<input type="hidden" name="q_no" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
" />
				<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
				<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
				<input type="submit" value="削除"　/>
			</form>
		</td>

		<td class="rt">
			<?php echo $_smarty_tpl->tpl_vars['question']->value['answer_rate'];?>

		</td>

		<td class="rt">
			<?php echo $_smarty_tpl->tpl_vars['question']->value['answer_num'];?>
回
		</td>
	</tr>
	<?php } ?>
</table>


</body>
</html><?php }} ?>
