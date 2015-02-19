<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-09 18:55:02
         compiled from "templates\delete_form.html" */ ?>
<?php /*%%SmartyHeaderCode:370054b015f62ac678-81427562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f91ff1d52a5c645c9e4c38fa780df795b589e99' => 
    array (
      0 => 'templates\\delete_form.html',
      1 => 1420636600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370054b015f62ac678-81427562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b015f63507a9_65218509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b015f63507a9_65218509')) {function content_54b015f63507a9_65218509($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>ニュース削除</h1>
<form action="delete.php" method="post">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" />
	パスワード：<br/>
	<input type="password" name="key" size="10" value="" /><br/>
	<br/>
	<input type="submit" value="削除する"　/>
</form>
<ul>
	<li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">記事へ戻る</a></li>
</ul>
</body>
</html><?php }} ?>
