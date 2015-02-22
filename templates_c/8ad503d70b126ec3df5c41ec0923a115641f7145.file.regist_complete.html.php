<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 09:10:36
         compiled from "templates\regist_complete.html" */ ?>
<?php /*%%SmartyHeaderCode:2407754e98efca67937-78853638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad503d70b126ec3df5c41ec0923a115641f7145' => 
    array (
      0 => 'templates\\regist_complete.html',
      1 => 1424093110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2407754e98efca67937-78853638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e98efd6684d2_99448220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e98efd6684d2_99448220')) {function content_54e98efd6684d2_99448220($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>登録完了</h1>
<h2>ようこそ<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さん！</h2>
<h3>登録が完了しました。</h3>

<form action="menu.php">
	<input type="submit" value="Memoryplusを始める"　/>
</form><br/><br/>

</body>
</html><?php }} ?>
