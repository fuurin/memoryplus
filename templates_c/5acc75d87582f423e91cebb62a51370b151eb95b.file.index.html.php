<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-19 18:08:54
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:734654e618a62664e3-64133129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acc75d87582f423e91cebb62a51370b151eb95b' => 
    array (
      0 => 'templates\\index.html',
      1 => 1424093084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '734654e618a62664e3-64133129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e618a6ea7343_13532406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e618a6ea7343_13532406')) {function content_54e618a6ea7343_13532406($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>MEMORY PLUS</h1>
<h2>
	ログイン
</h2>

<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }?>

<form action="login.php" method="POST">
	ユーザ名：
	<input type="text" name="name" 
		<?php if (isset($_smarty_tpl->tpl_vars['user']->value['name'])) {?>
			value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
"
		<?php }?>
		autofocus
	/>
	<br/><br/>

	パスワード：
	<input type="password" name="pass" 
			<?php if (isset($_smarty_tpl->tpl_vars['user']->value['pass'])) {?>
				value="<?php echo $_smarty_tpl->tpl_vars['user']->value['pass'];?>
"
			<?php }?>
	/>
	<br/><br/>

	<input type="submit" value="ログイン"　/>
</form>
<br/>

<form action="regist_form.php" method="post">
	<input type="submit" value="新規登録"　/>
</form>

</body>
</html><?php }} ?>
