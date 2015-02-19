<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 06:22:29
         compiled from "templates\workbook.html" */ ?>
<?php /*%%SmartyHeaderCode:3163354d44e48d7ea76-52817261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44e5212ae90d2dffff7742a896b50c68616564f6' => 
    array (
      0 => 'templates\\workbook.html',
      1 => 1424063970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3163354d44e48d7ea76-52817261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d44e48dc8e02_63047718',
  'variables' => 
  array (
    'user' => 0,
    'subject' => 0,
    'workbooks' => 0,
    'workbook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d44e48dc8e02_63047718')) {function content_54d44e48dc8e02_63047718($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>問題集選択</h1>

<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の問題集</h2>

<a href="menu.php">
	←メニューに戻る
</a><br/><br/>

<form action="append_form.php" method="post">
	<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<input type="submit" value="問題を追加"　/>
</form><br/>

<table border="2" class="workbook">
	<tr><th>問題集名</th><th>問題集名の編集</th><th>問題集の削除</th></tr>
	<?php  $_smarty_tpl->tpl_vars['workbook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['workbook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['workbooks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['workbook']->key => $_smarty_tpl->tpl_vars['workbook']->value) {
$_smarty_tpl->tpl_vars['workbook']->_loop = true;
?>
	<tr>
		<td class="tl">
			<a href="select.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['workbook']->value['workbook'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['workbook']->value['workbook'];?>

			</a>
		</td>

		<td class="ct">
			<form action="revise_workbook_form.php" method="get">
				<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
				<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value['workbook'];?>
" />
				<input type="submit" value="編集"　/>
			</form>
		</td>

		<td class="ct">
			<form action="delete_workbook_check.php" method="get">
				<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
				<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value['workbook'];?>
" />
				<input type="submit" value="削除"　/>
			</form>
		</td>
	</tr>
	<?php } ?>
</table>

</body>
</html><?php }} ?>
