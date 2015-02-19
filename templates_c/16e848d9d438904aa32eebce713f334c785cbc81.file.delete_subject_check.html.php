<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 16:56:49
         compiled from "templates\delete_subject_check.html" */ ?>
<?php /*%%SmartyHeaderCode:3234554d4c842a12895-63754126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e848d9d438904aa32eebce713f334c785cbc81' => 
    array (
      0 => 'templates\\delete_subject_check.html',
      1 => 1424063962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3234554d4c842a12895-63754126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d4c842a54f20_02706765',
  'variables' => 
  array (
    'subject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4c842a54f20_02706765')) {function content_54d4c842a54f20_02706765($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>教科削除確認</h1>
<h4>教科　[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]　の問題を全て削除しますか？</h4>

<form action="delete_subject.php" method="post">
	<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<input type="submit" value="削除"　/>
</form>

<br/>
<a href="menu.php">
	←メニューに戻る
</a>

</body>
</html><?php }} ?>
