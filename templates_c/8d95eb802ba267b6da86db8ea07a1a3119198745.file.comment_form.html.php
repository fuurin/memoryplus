<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-10 06:21:39
         compiled from "templates\comment_form.html" */ ?>
<?php /*%%SmartyHeaderCode:2139454b0b6be496a67-68526330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d95eb802ba267b6da86db8ea07a1a3119198745' => 
    array (
      0 => 'templates\\comment_form.html',
      1 => 1420867296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2139454b0b6be496a67-68526330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b0b6be4fc372_75382479',
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b0b6be4fc372_75382479')) {function content_54b0b6be4fc372_75382479($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>コメントする</h1>
<h2>No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['detail'], ENT_QUOTES, 'UTF-8', true));?>
</p>
<p>投稿日時:<?php echo $_smarty_tpl->tpl_vars['article']->value['created'];?>
</p>

<h2>コメントする</h2>
<form action="comment.php" method="post">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" />
	名前：<br/>
	<input type="text" name="name" size="30" value="" /><br/>
	コメント：<br/>
	<textarea name="detail" cols="30" rows="5"></textarea><br/>
	パスワード：<br/>
	<input type="password" name="key" size="10" value="" /><br/>
	<br/>
	<input type="submit" value="コメントする"　/>
</form>

<ul>
	<li><a href="index.php">記事へ戻る</a></li>
</ul>
</body>
</html><?php }} ?>
