<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 17:40:17
         compiled from "templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:42005597354e995f1b83f92-53535781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1cd851d66d2a3d71e88c5b279f7de8cbca3a36e' => 
    array (
      0 => 'templates/index.html',
      1 => 1424440996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42005597354e995f1b83f92-53535781',
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
  'unifunc' => 'content_54e995f1bce653_02051536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e995f1bce653_02051536')) {function content_54e995f1bce653_02051536($_smarty_tpl) {?><!DOCTYPE html>
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
