<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-23 02:17:59
         compiled from "templates\download_csv_form.html" */ ?>
<?php /*%%SmartyHeaderCode:3260654ea6facb264e9-84763721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56edc332f87e8db00a7084bdd88a98e36f321a29' => 
    array (
      0 => 'templates\\download_csv_form.html',
      1 => 1424654214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3260654ea6facb264e9-84763721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ea6fad775291_55863947',
  'variables' => 
  array (
    'user' => 0,
    'subject' => 0,
    'workbook' => 0,
    'questions' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ea6fad775291_55863947')) {function content_54ea6fad775291_55863947($_smarty_tpl) {?>	<!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>CSVファイルをダウンロード</h1>

<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]の問題</h2>

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

<h3>※CSVファイルに関する注意</h3>

<p>・｜教科名｜問題集名｜問題｜解答｜覚え方｜をダウンロードします。</p>
<p>・1行目には見出しが入力されます。</p>
<p>・以下の「ダウンロード」ボタンを押すと、新しいファイルが生成され、ダウンロードの準備ができます。</p>
<p>・1つのユーザは、サーバに1つのファイルしか保存できないようにしています。</p>
<p>・「ダウンロード」ボタンを押すと、あなたが今まで作成したファイルが削除されます。</p>

<br/>
<form action="download_csv.php" method="post">
	<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
	<input type="submit" name="download" value="ダウンロード">
</form>
<br/>

<h3>選択された問題</h3>

<table border="2" class="question">
	<tr><th>問題</th><th>解答</th><th>覚え方</th></tr>
	<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
	<tr>
		<td class="lt">
				<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['question'],@constant('ENT_QUOTES')));
if ($_smarty_tpl->tpl_vars['question']->value['len_q']=="true") {?>・・・<?php }?>
		</td>

		<td class="lt">
				<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['answer'],@constant('ENT_QUOTES')));
if ($_smarty_tpl->tpl_vars['question']->value['len_a']=="true") {?>・・・<?php }?>
		</td>

		<td class="lt">
				<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['memory'],@constant('ENT_QUOTES')));
if ($_smarty_tpl->tpl_vars['question']->value['len_m']=="true") {?>・・・<?php }?>
		</td>
	</tr>
	<?php } ?>
</table><br/>

</body><?php }} ?>
