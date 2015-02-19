<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 14:39:38
         compiled from "templates\revise_workbook_form.html" */ ?>
<?php /*%%SmartyHeaderCode:302754dec984877e50-19947221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4035f015418b97150abf5a70d1d06d2aecf6259f' => 
    array (
      0 => 'templates\\revise_workbook_form.html',
      1 => 1424063968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302754dec984877e50-19947221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dec98494ad86_35956555',
  'variables' => 
  array (
    'subject' => 0,
    'workbook' => 0,
    'revise_complete' => 0,
    'exists_complete' => 0,
    'reset_complete' => 0,
    'workbook_error' => 0,
    'workbook_long_error' => 0,
    'MAX_TEXT_NUM' => 0,
    'workbook_same_error' => 0,
    'workbook_exists_error' => 0,
    'error_workbook' => 0,
    'workbooks' => 0,
    'one_workbook' => 0,
    'workbook_select_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dec98494ad86_35956555')) {function content_54dec98494ad86_35956555($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>問題集編集</h1>

<h2>教科[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の問題集[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]の編集</h2>

<?php if ($_smarty_tpl->tpl_vars['revise_complete']->value=="true") {?><h3>問題集名を[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]に編集しました。</h3><?php }?>
<?php if ($_smarty_tpl->tpl_vars['exists_complete']->value=="true") {?><h3>[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]への統合が完了しました。</h3><?php }?>
<?php if ($_smarty_tpl->tpl_vars['reset_complete']->value=="true") {?><h3>[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]の全問題のリセットが完了しました。</h3><?php }?>

<h3>問題集名を編集</h3>
<form action="revise_workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" method="post">
	新しい問題集名<br/>
	<?php if ($_smarty_tpl->tpl_vars['workbook_error']->value=="true") {?><p class="error">　→問題集名を入力してください。</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['workbook_long_error']->value=="true") {?><p class="error">　→問題集名は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['workbook_same_error']->value=="true") {?><p class="error">　→問題集名が変更されていません。</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['workbook_exists_error']->value=="true") {?><p class="error">　→問題集[<?php echo $_smarty_tpl->tpl_vars['error_workbook']->value;?>
]は既に存在します。統合する場合は、下のプルダウンメニューから選んでください。</p>
	<?php } else { ?><br/><?php }?>
	<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['workbook']->value,@constant('ENT_QUOTES')));?>
→
	<input type="text" name="new_workbook" size="30" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
	<br/><br/>
	<input type="submit" name="revise" value="編集"　/>
</form>


<h3>すでに存在する他の問題集に統合する</h3>
<form action="revise_workbook_exists.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" method="post">
	<p>統合先の問題集を選択</p>
	<select name="marge_list">
		<option value="none"　selected>選択してください。</option>
		<?php  $_smarty_tpl->tpl_vars['one_workbook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_workbook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['workbooks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_workbook']->key => $_smarty_tpl->tpl_vars['one_workbook']->value) {
$_smarty_tpl->tpl_vars['one_workbook']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['one_workbook']->value['workbook'];?>
"><?php echo $_smarty_tpl->tpl_vars['one_workbook']->value['workbook'];?>
</option>
		<?php } ?>
	</select>
	<?php if ($_smarty_tpl->tpl_vars['workbook_select_error']->value=="true") {?><p class="error">　→問題集を選択してください。</p>
	<?php } else { ?><br/><br/><?php }?>
	<input type="submit" name="marge" value="統合"　/>
</form>


<h3>正答率、解答回数のリセット</h3>
<form action="revise_workbook_reset.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" method="post">
	<h4>
		<label>
			<input type="checkbox" name="reset_check">
			この問題集のすべての問題の正答率と解答回数をリセット
		</label>
	</h4>
	<input type="submit" name="reset" value="リセット"　/>
</form>

<br/>
<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
">
	←問題集選択に戻る
</a>

<br/>
<a href="menu.php">
	←←メニューに戻る
</a>


</body>
</html><?php }} ?>
