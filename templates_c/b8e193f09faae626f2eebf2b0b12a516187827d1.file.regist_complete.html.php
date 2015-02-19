<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 15:14:07
         compiled from "templates\regist_complete.html" */ ?>
<?php /*%%SmartyHeaderCode:1019054da08aa73d4a6-56785042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8e193f09faae626f2eebf2b0b12a516187827d1' => 
    array (
      0 => 'templates\\regist_complete.html',
      1 => 1424093110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019054da08aa73d4a6-56785042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54da08aa77bcb8_90689215',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54da08aa77bcb8_90689215')) {function content_54da08aa77bcb8_90689215($_smarty_tpl) {?><!DOCTYPE html>
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
