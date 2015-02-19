<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 14:22:01
         compiled from "templates\append_csv_form.html" */ ?>
<?php /*%%SmartyHeaderCode:2218554db3b39dea9f4-40951397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed6b7c292e211a2c37045ecbb2259267d20095d6' => 
    array (
      0 => 'templates\\append_csv_form.html',
      1 => 1424092920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2218554db3b39dea9f4-40951397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54db3b39e34d82_45368686',
  'variables' => 
  array (
    'complete_message' => 0,
    'skip' => 0,
    'num' => 0,
    'EXP_ROW_NUM' => 0,
    'MAX_TEXT_NUM' => 0,
    'error' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db3b39e34d82_45368686')) {function content_54db3b39e34d82_45368686($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>CSVファイルから問題を追加</h1>

<?php if (isset($_smarty_tpl->tpl_vars['complete_message']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['complete_message']->value;?>
</h3><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['skip']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['num']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['num']->key => $_smarty_tpl->tpl_vars['num']->value) {
$_smarty_tpl->tpl_vars['num']->_loop = true;
?>
		<p class="error"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
行目のデータは存在したので追加されませんでした。</p>
<?php } ?>
<?php }?>

<a href="menu.php">
	←メニューに戻る
</a><br/>

<h3>※CSVファイルに関する注意</h3>
<p>・最初の行に<?php echo $_smarty_tpl->tpl_vars['EXP_ROW_NUM']->value;?>
列の値を入力して、<?php echo $_smarty_tpl->tpl_vars['EXP_ROW_NUM']->value;?>
列のCSVファイルを作成してください。</p>
<p>・最初の行は追加されません。見出しに使ってください。</p>
<p>・｜教科名｜問題集名｜問題｜解答｜覚え方｜の順で入力してください。</p>
<p>・｜教科名｜問題集名｜問題｜解答｜の列は、入力必須項目です。</p>
<p>・｜教科名｜問題集名｜問題｜解答｜が全て同じ問題がすでに存在する場合は、その問題は追加されません。</p>
<p>・｜教科名｜問題集名｜覚え方｜はそれぞれ<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
<p>・エラーメッセージは、エラーがあった最初の行に対してのみ表示されます。</p>

<h3>CSVファイルから問題を追加</h3>
<p>CSVファイルを選択</p>
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<p class="error">　→<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php } ?>
<?php }?>
<form action="append_csv.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="q_csv" size="30"><br/><br/>
	<input type="submit" value="問題追加">
</form><br/>

</body>
</html><?php }} ?>
