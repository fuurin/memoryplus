<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-12 14:06:39
         compiled from "templates\delete_question_selected_check.html" */ ?>
<?php /*%%SmartyHeaderCode:2755754dc9ee632e8e0-63074856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8013a29686f0d2bfef6c59728f4fc77dfca2945' => 
    array (
      0 => 'templates\\delete_question_selected_check.html',
      1 => 1423746398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2755754dc9ee632e8e0-63074856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dc9ee6374df3_94438757',
  'variables' => 
  array (
    'subject' => 0,
    'workbook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dc9ee6374df3_94438757')) {function content_54dc9ee6374df3_94438757($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>選択された全問題削除確認</h1>
<h4>教科　[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
] の問題集　[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]　の選択された問題を全て削除しますか？</h4>

<form action="delete_question_selected.php" method="post">
	<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
	<input type="submit" value="削除"　/>
</form><br/>

<a href="select.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
">
	←問題選択に戻る
</a>

<br/>
<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
">
	←←問題集選択に戻る
</a>

<br/>
<a href="menu.php">
	←←←メニューに戻る
</a>

</body>
</html><?php }} ?>
