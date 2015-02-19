<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 01:28:03
         compiled from "templates\revise_form.html" */ ?>
<?php /*%%SmartyHeaderCode:2860454d4adbe304c32-09883572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8556b3f1046c556f3eff3ae91fc612303604988' => 
    array (
      0 => 'templates\\revise_form.html',
      1 => 1424132880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2860454d4adbe304c32-09883572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d4adbe3bc5e7_52497192',
  'variables' => 
  array (
    'answering' => 0,
    'q_no' => 0,
    'question' => 0,
    'message' => 0,
    'question_error' => 0,
    'answer_error' => 0,
    'memory_long_error' => 0,
    'MAX_TEXT_NUM' => 0,
    'subject_error' => 0,
    'subject_long_error' => 0,
    'workbook_error' => 0,
    'workbook_long_error' => 0,
    'reset' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4adbe3bc5e7_52497192')) {function content_54d4adbe3bc5e7_52497192($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>問題編集</h1>

<?php if ($_smarty_tpl->tpl_vars['answering']->value==1) {?>
<a href="question.php?q_no=<?php echo $_smarty_tpl->tpl_vars['q_no']->value;?>
">
	←問題解答に戻る
</a><br/>

<a href="count_answer.php?subject=<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['question']->value['workbook'];?>
">
	←←問題選択に戻る
</a><br/>

<?php } else { ?>
<a href="select.php?subject=<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['question']->value['workbook'];?>
">
	←問題選択に戻る
</a><br/>

<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
">
	←←問題集選択に戻る
</a><br/>

<a href="menu.php">
	←←←メニューに戻る
</a><br/>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>

<h4>※注:*がついているものは必須項目です。</h4>

<form action="revise.php?q_no=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
&answering=<?php echo $_smarty_tpl->tpl_vars['answering']->value;?>
" method="post">
	問題*<?php if ($_smarty_tpl->tpl_vars['question_error']->value=="true") {?><p class="error">　→問題を入力してください。</p><?php } else { ?><br/><?php }?>
	<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['question'],@constant('ENT_QUOTES')));?>
<br/>↓<br/>
	<textarea name="question" cols="60" rows="8" autofocus><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</textarea><br/><br/>

	解答*<?php if ($_smarty_tpl->tpl_vars['answer_error']->value=="true") {?><p class="error">　→解答を入力してください。</p><?php } else { ?><br/><?php }?>
	<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['answer'],@constant('ENT_QUOTES')));?>
<br/>↓<br/>
	<textarea name="answer" cols="60" rows="8"><?php echo $_smarty_tpl->tpl_vars['question']->value['answer'];?>
</textarea><br/><br/>

	覚え方<?php if ($_smarty_tpl->tpl_vars['memory_long_error']->value=="true") {?><p class="error"> →覚え方は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
		<?php } else { ?><br/><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['question']->value['memory']=='') {?>
		登録されていません。
		<?php } else { ?>
		<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['memory'],@constant('ENT_QUOTES')));?>

		<?php }?><br/>↓<br/>
	<textarea name="memory" cols="35" rows="3"><?php echo $_smarty_tpl->tpl_vars['question']->value['memory'];?>
</textarea><br/><br/>

	教科名*<?php if ($_smarty_tpl->tpl_vars['subject_error']->value=="true") {?><p class="error">　→教科名を入力してください。</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['subject_long_error']->value=="true") {?><p class="error">　→教科は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
以内で入力してください。</p>
		<?php } else { ?><br/><?php }?>
	<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['subject'],@constant('ENT_QUOTES')));?>
→
	<input type="text" name="subject" size="30" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
" /><br/><br/>
	
	問題集名*<?php if ($_smarty_tpl->tpl_vars['workbook_error']->value=="true") {?><p class="error">　→問題集名を入力してください。</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['workbook_long_error']->value=="true") {?><p class="error">　→問題集名は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
以内で入力してください。</p>
		<?php } else { ?><br/><?php }?>
	<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['workbook'],@constant('ENT_QUOTES')));?>
→
	<input type="text" name="workbook" size="30" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['workbook'];?>
" /><br/>

	<h4>
		<label>
			<input type="checkbox" name="reset" <?php if ($_smarty_tpl->tpl_vars['reset']->value==1) {?>checked<?php }?>>
			この問題の正答率と解答回数をリセット
		</label>
	</h4>

	<input type="submit" <?php if ($_smarty_tpl->tpl_vars['answering']->value==1) {?>value="修正"<?php } else { ?>value="編集"<?php }?>　/>
</form>

</body>
</html><?php }} ?>
