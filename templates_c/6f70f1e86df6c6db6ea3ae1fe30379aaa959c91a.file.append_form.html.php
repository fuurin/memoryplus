<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 15:44:20
         compiled from "templates\append_form.html" */ ?>
<?php /*%%SmartyHeaderCode:3062254d01f4babfd55-55931428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f70f1e86df6c6db6ea3ae1fe30379aaa959c91a' => 
    array (
      0 => 'templates\\append_form.html',
      1 => 1424097854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3062254d01f4babfd55-55931428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d01f4bb9a996_81595758',
  'variables' => 
  array (
    'count' => 0,
    'subject' => 0,
    'workbook' => 0,
    'error' => 0,
    'question_error' => 0,
    'question' => 0,
    'answer_error' => 0,
    'answer' => 0,
    'memory_long_error' => 0,
    'MAX_TEXT_NUM' => 0,
    'memory' => 0,
    'subject_error' => 0,
    'subject_long_error' => 0,
    'workbook_error' => 0,
    'workbook_long_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d01f4bb9a996_81595758')) {function content_54d01f4bb9a996_81595758($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>問題追加</h1>

<?php if (isset($_smarty_tpl->tpl_vars['count']->value)) {?><h3>[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]に <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 問目の問題を追加しました。</h3><?php }?>

<?php if ($_smarty_tpl->tpl_vars['subject']->value!=''&&$_smarty_tpl->tpl_vars['workbook']->value!=''&&!isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<a href="select.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
">
		←問題選択に戻る
	</a><br/>
	<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
">
		←←問題集選択に戻る
	</a><br/>
	<a href="menu.php">
		←←←メニューに戻る
	</a><br/>

<?php } elseif ($_smarty_tpl->tpl_vars['subject']->value!=''&&!isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
">
		←問題集選択に戻る
	</a><br/>
	<a href="menu.php">
		←←メニューに戻る
	</a><br/>

<?php } else { ?>
	<a href="menu.php">
		←メニューに戻る
	</a><br/>
	
<?php }?>

<h4>※注：*がついているものは必須項目です。</h4>
<form action="append.php" method="post">
	問題*<?php if (isset($_smarty_tpl->tpl_vars['question_error']->value)) {?><p class="error">　→問題を入力してください。</p><?php } else { ?><br/><?php }?>
	<textarea name="question" cols="60" rows="8" autofocus><?php if (isset($_smarty_tpl->tpl_vars['question']->value)) {
echo $_smarty_tpl->tpl_vars['question']->value;
}?></textarea><br/><br/>

	解答*<?php if (isset($_smarty_tpl->tpl_vars['answer_error']->value)) {?><p class="error">　→解答を入力してください。</p><?php } else { ?><br/><?php }?>
	<textarea name="answer" cols="60" rows="8"><?php if (isset($_smarty_tpl->tpl_vars['answer']->value)) {
echo $_smarty_tpl->tpl_vars['answer']->value;
}?></textarea><br/><br/>

	覚え方<?php if (isset($_smarty_tpl->tpl_vars['memory_long_error']->value)) {?><p class="error">　→覚え方は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
		<?php } else { ?><br/><?php }?>
	<textarea name="memory" cols="35" rows="3"><?php if (isset($_smarty_tpl->tpl_vars['memory']->value)) {
echo $_smarty_tpl->tpl_vars['memory']->value;
}?></textarea><br/><br/>

	教科名*<?php if (isset($_smarty_tpl->tpl_vars['subject_error']->value)) {?><p class="error">　→教科名を入力してください。</p>
		<?php } elseif (isset($_smarty_tpl->tpl_vars['subject_long_error']->value)) {?><p class="error">　→教科名は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
		<?php } else { ?><br/><?php }?>
	<input type="text" name="subject" size="30" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" /><br/><br/>

	問題集名*<?php if (isset($_smarty_tpl->tpl_vars['workbook_error']->value)) {?><p class="error">　→問題集名を入力してください。</p>
		<?php } elseif (isset($_smarty_tpl->tpl_vars['workbook_long_error']->value)) {?><p class="error">　→問題集名は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
		<?php } else { ?><br/><?php }?>	
	<input type="text" name="workbook" size="30" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" /><br/><br/>

	<input type="submit" value="問題追加"　/>
</form><br/>

</body>
</html><?php }} ?>
