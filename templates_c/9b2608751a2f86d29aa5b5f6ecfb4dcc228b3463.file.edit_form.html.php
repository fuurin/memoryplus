<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-09 18:34:16
         compiled from "templates\edit_form.html" */ ?>
<?php /*%%SmartyHeaderCode:815654b01118d1f4b8-50814828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2608751a2f86d29aa5b5f6ecfb4dcc228b3463' => 
    array (
      0 => 'templates\\edit_form.html',
      1 => 1420635982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815654b01118d1f4b8-50814828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b01118e4c188_08552243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b01118e4c188_08552243')) {function content_54b01118e4c188_08552243($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>ニュース編集</h1>
<form action="edit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" />
	タイトル：<br/>
	<input type="text" name="title" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><br/>
	本文：<br/>
	<textarea name="detail" cols="30" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['detail'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><br/>
	パスワード：<br/>
	<input type="password" name="key" size="10" value="" /><br/>
	<br/>
	<input type="submit" value="編集する"　/>
</form>
<ul>
	<li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">記事へ戻る</a></li>
</ul>
</body>
</html><?php }} ?>
