<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 15:20:50
         compiled from "templates\delete_user_check.html" */ ?>
<?php /*%%SmartyHeaderCode:2940254da0d0ddb2a20-54943207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa75e3468cb1efa44c6f3ad10e46d3752081035' => 
    array (
      0 => 'templates\\delete_user_check.html',
      1 => 1424063962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2940254da0d0ddb2a20-54943207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54da0d0f53ee55_72760646',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54da0d0f53ee55_72760646')) {function content_54da0d0f53ee55_72760646($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>ユーザ情報全削除確認</h1>
<h4><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんのユーザ情報と問題を全て削除しますか？</h4>

<form action="delete_user.php" method="post">
	<input type="submit" value="削除"　/>
</form>

<br/>
<a href="menu.php">
	←メニューに戻る
</a>

</body>
</html><?php }} ?>
