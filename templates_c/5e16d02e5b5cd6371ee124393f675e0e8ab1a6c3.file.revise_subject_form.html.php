<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 02:08:42
         compiled from "templates\revise_subject_form.html" */ ?>
<?php /*%%SmartyHeaderCode:3156054dea5c12274b6-20084331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e16d02e5b5cd6371ee124393f675e0e8ab1a6c3' => 
    array (
      0 => 'templates\\revise_subject_form.html',
      1 => 1424102348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156054dea5c12274b6-20084331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dea5c13a6212_96623977',
  'variables' => 
  array (
    'subject' => 0,
    'revise_complete' => 0,
    'exists_complete' => 0,
    'reset_complete' => 0,
    'subject_error' => 0,
    'subject_long_error' => 0,
    'MAX_TEXT_NUM' => 0,
    'subject_same_error' => 0,
    'subject_exists_error' => 0,
    'error_subject' => 0,
    'subjects' => 0,
    'one_subject' => 0,
    'subject_select_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dea5c13a6212_96623977')) {function content_54dea5c13a6212_96623977($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>教科編集</h1>

<h2>教科[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の編集</h2>

<?php if ($_smarty_tpl->tpl_vars['revise_complete']->value=="true") {?><h3>教科名を[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]に編集しました。</h3><?php }?>
<?php if ($_smarty_tpl->tpl_vars['exists_complete']->value=="true") {?><h3>[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]への統合が完了しました。</h3><?php }?>
<?php if ($_smarty_tpl->tpl_vars['reset_complete']->value=="true") {?><h3>[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の全問題のリセットが完了しました。</h3><?php }?>

<h3>教科名を編集</h3>
<form action="revise_subject.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" method="post">
	<p>新しい教科名</p>
	<?php if ($_smarty_tpl->tpl_vars['subject_error']->value=="true") {?><p class="error">　→教科名を入力してください。</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['subject_long_error']->value=="true") {?><p class="error">　→教科名は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['subject_same_error']->value=="true") {?><p class="error">　→教科名が変更されていません。</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['subject_exists_error']->value=="true") {?><p class="error">　→教科[<?php echo $_smarty_tpl->tpl_vars['error_subject']->value;?>
]は既に存在します。統合する場合は、下のプルダウンメニューから選んでください。</p>
	<?php } else { ?><br/><?php }?>
	<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value,@constant('ENT_QUOTES')));?>
→
	<input type="text" name="new_subject" size="30" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<br/><br/>
	<input type="submit" name="revise" value="編集"　/>
</form>


<h3>すでに存在する他の教科に統合する</h3>
<form action="revise_subject_exists.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" method="post">
	<p>統合先の教科を選択</p>
	<select name="marge_list">
		<option value="none"　selected>選択してください。</option>
		<?php  $_smarty_tpl->tpl_vars['one_subject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_subject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subjects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_subject']->key => $_smarty_tpl->tpl_vars['one_subject']->value) {
$_smarty_tpl->tpl_vars['one_subject']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['one_subject']->value['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['one_subject']->value['subject'];?>
</option>
		<?php } ?>
	</select>
	<?php if ($_smarty_tpl->tpl_vars['subject_select_error']->value=="true") {?><p class="error">　→教科を選択してください。</p>
	<?php } else { ?><br/><br/><?php }?>
	<input type="submit" name="marge" value="統合"　/>
</form>


<h3>正答率、解答回数のリセット</h3>
<form action="revise_subject_reset.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" method="post">
	<h4>
		<label>
			<input type="checkbox" name="reset_check">
			この教科のすべての問題の正答率と解答回数をリセット
		</label>
	</h4>
	<input type="submit" name="reset" value="リセット"　/>
</form>

<br/>
<a href="menu.php">
	←メニューに戻る
</a>


</body>
</html><?php }} ?>
