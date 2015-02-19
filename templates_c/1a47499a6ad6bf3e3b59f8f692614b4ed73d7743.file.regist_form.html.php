<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 15:03:03
         compiled from "templates\regist_form.html" */ ?>
<?php /*%%SmartyHeaderCode:3158554d9f6a7356459-94425662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a47499a6ad6bf3e3b59f8f692614b4ed73d7743' => 
    array (
      0 => 'templates\\regist_form.html',
      1 => 1424095382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3158554d9f6a7356459-94425662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d9f6a73ac360_37613223',
  'variables' => 
  array (
    'MAX_TEXT_NUM' => 0,
    'name' => 0,
    'identifical' => 0,
    'name_range' => 0,
    'MIN_PASS_NUM' => 0,
    'MAX_PASS_NUM' => 0,
    'pass_range' => 0,
    'match' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d9f6a73ac360_37613223')) {function content_54d9f6a73ac360_37613223($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>新規登録</h1>

<a href="index.php">
	←ログイン画面に戻る
</a><br/><br/>

<form action="regist.php" method="POST">
	ユーザ名 (1文字以上<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内)<br/>
	<input type="text" name="name" 
		<?php if (isset($_smarty_tpl->tpl_vars['name']->value)&&!$_smarty_tpl->tpl_vars['identifical']->value) {?>
			value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
		<?php }?> autofocus />
	<?php if ($_smarty_tpl->tpl_vars['name_range']->value) {?><p class="error">　→ユーザ名は1文字以上<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['identifical']->value) {?><p class="error">　→そのユーザ名は既に利用されています。別のユーザ名を入力してください。</p>
	<?php } else { ?><br/><br/>
	<?php }?>

	パスワード (<?php echo $_smarty_tpl->tpl_vars['MIN_PASS_NUM']->value;?>
文字以上<?php echo $_smarty_tpl->tpl_vars['MAX_PASS_NUM']->value;?>
文字以内)<br/>
	<input type="password" name="pass" />
	<?php if ($_smarty_tpl->tpl_vars['pass_range']->value) {?><p class="error">　→パスワードは<?php echo $_smarty_tpl->tpl_vars['MIN_PASS_NUM']->value;?>
文字以上<?php echo $_smarty_tpl->tpl_vars['MAX_PASS_NUM']->value;?>
文字以内で入力してください。</p>
	<?php } else { ?><br/><br/><?php }?>

	パスワード確認<br/>
	<input type="password" name="conf" />
	<?php if ($_smarty_tpl->tpl_vars['match']->value) {?><p class="error">　→確認パスワードと一致しません。もう一度入力してください。</p>
	<?php } else { ?><br/><br/><?php }?>

	<input type="submit" value="新規登録"　/>
</form><br/><br/>

</body>
</html><?php }} ?>
