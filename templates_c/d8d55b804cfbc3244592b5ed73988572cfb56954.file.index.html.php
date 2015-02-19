<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-10 06:20:20
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1828754affb610daa90-98057015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d55b804cfbc3244592b5ed73988572cfb56954' => 
    array (
      0 => 'templates\\index.html',
      1 => 1420867220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828754affb610daa90-98057015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54affb61d94a98_57920968',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54affb61d94a98_57920968')) {function content_54affb61d94a98_57920968($_smarty_tpl) {?><!DOCTYPE html>
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
		[No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
]<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
(<?php echo $_smarty_tpl->tpl_vars['article']->value['created'];?>
)
		</a>
	</li>
	<?php } ?>
</ul>
<br/>
<ul>
	<li><a href="regist_form.php">新規登録</a></li>
</ul>

</body>
</html><?php }} ?>
