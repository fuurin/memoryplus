<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-08 04:31:16
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1781754adfa04c71897-26025862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '564d172d6ee7a823a4c3b8cf9f382a8cb7c7567f' => 
    array (
      0 => 'templates\\index.html',
      1 => 1420687872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781754adfa04c71897-26025862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54adfa04ccb637_36027531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54adfa04ccb637_36027531')) {function content_54adfa04ccb637_36027531($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>ニュース一覧</h1>
<ul>
	<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
	<li>
		<a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
		No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];
echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

		</a>
	</li>
	<?php } ?>
</ul>

<ul>
	<li><a href="regist_form.php">登録</a></li>
</ul>

</body>
</html><?php }} ?>
