<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-06 16:47:30
         compiled from "templates\subject.html" */ ?>
<?php /*%%SmartyHeaderCode:1701054d091c74cea22-24174680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '314c22c3dca2c9ac1770279897dfca8f94f020a3' => 
    array (
      0 => 'templates\\subject.html',
      1 => 1423237544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701054d091c74cea22-24174680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d091c7518db7_85596684',
  'variables' => 
  array (
    'user' => 0,
    'subjects' => 0,
    'subject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d091c7518db7_85596684')) {function content_54d091c7518db7_85596684($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>一問一答</h1>

<form action="append_form.php" method="post">
	<input type="submit" value="問題を追加する"　/>
</form>

<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの教科</h2>
<ul>
	<?php  $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subjects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->key => $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->_loop = true;
?>
	<li>
		<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>

		</a>

		<a href="delete_subject_check.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>
">
			削除
		</a>
	</li>
	<?php } ?>
</ul>

<br/>
<a href="menu.php">
	メニューに戻る
</a>

</body>
</html><?php }} ?>
