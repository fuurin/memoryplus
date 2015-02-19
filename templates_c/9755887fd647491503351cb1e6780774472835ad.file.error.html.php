<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-09 18:47:42
         compiled from "templates\error.html" */ ?>
<?php /*%%SmartyHeaderCode:2394254b0143e576a32-60327100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9755887fd647491503351cb1e6780774472835ad' => 
    array (
      0 => 'templates\\error.html',
      1 => 1420623828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2394254b0143e576a32-60327100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b0143e5b90c0_31463712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b0143e5b90c0_31463712')) {function content_54b0143e5b90c0_31463712($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>エラー</h1>
<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<ul>
	<li><a href="javascript:history.back();">前のページへ戻る</a></li>
</ul>
</body>
</html><?php }} ?>
