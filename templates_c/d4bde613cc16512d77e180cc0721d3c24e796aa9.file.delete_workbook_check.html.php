<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 02:09:56
         compiled from "templates\delete_workbook_check.html" */ ?>
<?php /*%%SmartyHeaderCode:2021454d4d70be371a2-64053464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4bde613cc16512d77e180cc0721d3c24e796aa9' => 
    array (
      0 => 'templates\\delete_workbook_check.html',
      1 => 1424063962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2021454d4d70be371a2-64053464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d4d70ca244c3_03187592',
  'variables' => 
  array (
    'subject' => 0,
    'workbook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4d70ca244c3_03187592')) {function content_54d4d70ca244c3_03187592($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>問題集削除確認</h1>
<h4>教科　[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
] の問題集　[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]　の問題を全て削除しますか？</h4>

<form action="delete_workbook.php" method="post">
	<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
	<input type="submit" value="削除"　/>
</form>

<br/>
<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
">
	←問題集選択に戻る
</a>

<br/>
<a href="menu.php">
	←←メニューに戻る
</a>

</body>
</html><?php }} ?>
