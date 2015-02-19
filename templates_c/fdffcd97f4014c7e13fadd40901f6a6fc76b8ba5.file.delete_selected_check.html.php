<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-16 16:01:46
         compiled from "templates\delete_selected_check.html" */ ?>
<?php /*%%SmartyHeaderCode:2081554df33d6db81b4-48891658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdffcd97f4014c7e13fadd40901f6a6fc76b8ba5' => 
    array (
      0 => 'templates\\delete_selected_check.html',
      1 => 1424063960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081554df33d6db81b4-48891658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54df33d6e40d52_36743360',
  'variables' => 
  array (
    'subject' => 0,
    'workbook' => 0,
    'questions' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df33d6e40d52_36743360')) {function content_54df33d6e40d52_36743360($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>選択問題削除確認</h1>
<h2>教科　[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
] の問題集　[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]　の問題</h2>
<h4>選択された問題を全て削除しますか？</h4>

<form action="delete_selected.php" method="post">
	<input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
	<input type="hidden" name="workbook" value="<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
" />
	<input type="submit" value="削除"　/>
</form>

<br/>
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

<h3>選択された問題</h3>

<table border="2" class="question">
	<tr><th>問題</th><th>解答</th><th>正答率</th><th>解答回数</th><th>覚え方</th></tr>
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

		<td class="rt">
			<?php echo $_smarty_tpl->tpl_vars['question']->value['answer_rate'];?>

		</td>

		<td class="rt">
			<?php echo $_smarty_tpl->tpl_vars['question']->value['answer_num'];?>
回
		</td>

		<td class="lt">
				<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['memory'],@constant('ENT_QUOTES')));
if ($_smarty_tpl->tpl_vars['question']->value['len_m']=="true") {?>・・・<?php }?>
		</td>
	</tr>
	<?php } ?>
</table><br/>

</body>
</html><?php }} ?>
