<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-23 10:18:02
         compiled from "templates\download_csv_complete.html" */ ?>
<?php /*%%SmartyHeaderCode:2458854ea7368b9e286-81805436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cefd287b5ddcdb866016edfbce8d83153f368815' => 
    array (
      0 => 'templates\\download_csv_complete.html',
      1 => 1424652658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2458854ea7368b9e286-81805436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ea7368be0919_51320304',
  'variables' => 
  array (
    'file_name' => 0,
    'file_path' => 0,
    'subject' => 0,
    'workbook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ea7368be0919_51320304')) {function content_54ea7368be0919_51320304($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>CSVファイルダウンロード準備完了</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
を作成しました。</h2>
<h3>CSVファイルを保存</h3>
<p>以下のリンクの上で右クリックを押して「名前を付けてリンク先を保存」、をクリックすると、ダウンロードが開始されます。</p>
<p><a href=<?php echo $_smarty_tpl->tpl_vars['file_path']->value;?>
>ダウンロード</a></p><br/>

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
