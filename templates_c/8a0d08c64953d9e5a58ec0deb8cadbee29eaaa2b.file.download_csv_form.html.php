<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 17:49:37
         compiled from "templates/download_csv_form.html" */ ?>
<?php /*%%SmartyHeaderCode:119993078054e99821c8f770-04428297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a0d08c64953d9e5a58ec0deb8cadbee29eaaa2b' => 
    array (
      0 => 'templates/download_csv_form.html',
      1 => 1424440996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119993078054e99821c8f770-04428297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'subject' => 0,
    'workbook' => 0,
    'path' => 0,
    'questions' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e99821d093b0_77402039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e99821d093b0_77402039')) {function content_54e99821d093b0_77402039($_smarty_tpl) {?>	<!DOCTYPE html>
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
<p>・存在するフォルダのパスを入力してからダウンロードしてください。</p>
<p>・1行目には見出しが入力されます。</p>

<br/>
<form action="download_csv.php" method="post">
	<p>↓ダウンロードするフォルダの絶対パス</p>
	<input type="text" name="path" <?php if (isset($_smarty_tpl->tpl_vars['path']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
"<?php }?>>
	<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
	<input type="submit" name="download" value="ダウンロード">
</form>
<?php if (isset($_smarty_tpl->tpl_vars['path']->value)) {?><p class="error">　→存在するフォルダを入力してください。</p>
<?php } else { ?>
<br/>
<?php }?>

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
