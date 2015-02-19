<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 18:21:13
         compiled from "templates\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:2808354bdb077ede8e5-06341155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f98226de6faee27b19ae0c27d89c785694cc465' => 
    array (
      0 => 'templates\\menu.html',
      1 => 1424107272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2808354bdb077ede8e5-06341155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bdb078025082_92104133',
  'variables' => 
  array (
    'user' => 0,
    'subjects' => 0,
    'subject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bdb078025082_92104133')) {function content_54bdb078025082_92104133($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>MEMORY PLUS メニュー</h1>

<h2>ようこそ<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さん！</h2>

<h3>Memoryplusの使い方</h3>
<p>Step1:問題を作る</p>
<p>Step2:問題を解く</p>
<p>Step3:便利機能で繰り返し練習</p>
<p><a href="http://sozai.akuseru-design.com/">sozai.akuseru-design.com</a>←Webページの素材はここから頂きました。</p>

<table>
	<tr>
		<td>
			<form action="logout.php" method="post">
				<input type="submit" value="ログアウト"　/>
			</form>
		</td>

		<td>
			<form action="delete_user_check.php" method="post">
				<input type="submit" value="ユーザ情報全削除"　/>
			</form>
		</td>
	</tr>
</table>
<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの教科</h2>

<input type="button" onclick="location.href='append_form.php'"value="問題を追加">

<input type="button" onclick="location.href='append_csv_form.php'"value="CSVファイルから問題を追加">
<br/><br/>

<table border="2" class="subject">
	<tr><th>教科名</th><th>教科名の編集</th><th>教科の削除</th></tr>
	<?php  $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subjects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->key => $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->_loop = true;
?>
	<tr>
		<td class="lt">
			<a href="workbook.php?subject=<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>

			</a>
		</td>

		<td class="ct">
			<form action="revise_subject_form.php" method="get">
				<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>
" />
				<input type="submit" value="編集"　/>
			</form>
		</td>

		<td class="ct">
			<form action="delete_subject_check.php" method="get">
				<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>
" />
				<input type="submit" value="削除"　/>
			</form>
		</td>
	</tr>
	<?php } ?>
</table>

</body>
</html><?php }} ?>
