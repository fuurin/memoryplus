<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-09 18:46:48
         compiled from "templates\regist_form.html" */ ?>
<?php /*%%SmartyHeaderCode:281154affb74e546a6-72875339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb999200d09ea8c623ae5f1f8a71577b092f94d' => 
    array (
      0 => 'templates\\regist_form.html',
      1 => 1420825126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281154affb74e546a6-72875339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54affb74ed16c4_37896379',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54affb74ed16c4_37896379')) {function content_54affb74ed16c4_37896379($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<h1>ニュース登録</h1>
	<form action="regist.php" method="post">
		タイトル：<br/>
		<input type="text" name="title" size="30" value="" /><br/>
		本文：<br/>
		<textarea name="detail" cols="30" rows="5"></textarea><br/>
		パスワード:<br/>
		<input type="password" name="key" size="10" value="" /><br/>
		<input type="submit" value="登録する" />
	</form>
	
	<ul>
		<li><a href="index.php">一覧へ戻る</a></li>
	</ul>
</body>
</html><?php }} ?>
