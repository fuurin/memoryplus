<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-10 06:20:59
         compiled from "templates\view.html" */ ?>
<?php /*%%SmartyHeaderCode:3269854b0129c16fb05-01414836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4beadf93362a6184de9594de097ea49e196c68' => 
    array (
      0 => 'templates\\view.html',
      1 => 1420866840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3269854b0129c16fb05-01414836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b0129c1d5419_84380144',
  'variables' => 
  array (
    'article' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b0129c1d5419_84380144')) {function content_54b0129c1d5419_84380144($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>ニュース詳細</h1>
<h2>No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['detail'], ENT_QUOTES, 'UTF-8', true));?>
</p>
<p>投稿日時:<?php echo $_smarty_tpl->tpl_vars['article']->value['created'];?>
</p>
<ul>
	<li><a href="edit_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">編集</a></li>
	<li><a href="delete_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">削除</a></li>
</ul>

<h2>この記事へのコメント</h2>
	<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
		<h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
(<?php echo $_smarty_tpl->tpl_vars['comment']->value['created'];?>
)</h3>
		<?php echo $_smarty_tpl->tpl_vars['comment']->value['detail'];?>

	<?php } ?>
<br/>

<ul>
	<li><a href="comment_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">コメントする</a></li>
	<li><a href="index.php">一覧へ戻る</a></li>
</ul>
</body>
</html><?php }} ?>
