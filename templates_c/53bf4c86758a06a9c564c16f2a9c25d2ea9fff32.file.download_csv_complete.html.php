<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 01:02:31
         compiled from "templates\download_csv_complete.html" */ ?>
<?php /*%%SmartyHeaderCode:2990254dc159845f7a1-45672476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53bf4c86758a06a9c564c16f2a9c25d2ea9fff32' => 
    array (
      0 => 'templates\\download_csv_complete.html',
      1 => 1424063964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2990254dc159845f7a1-45672476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dc159849dfb2_66268275',
  'variables' => 
  array (
    'file_name' => 0,
    'path' => 0,
    'subject' => 0,
    'workbook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dc159849dfb2_66268275')) {function content_54dc159849dfb2_66268275($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>CSVファイルダウンロード完了</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
をダウンロードしました。</h2>
<h3>フォルダを開く</h3>
<p>以下のURLを検索フォームに張り付けて移動すると、ダウンロードしたフォルダのページに移ります。</p>
<p><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</p><br/>

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
