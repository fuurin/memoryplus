<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 17:44:50
         compiled from "templates/answer_form.html" */ ?>
<?php /*%%SmartyHeaderCode:29070351954e99702d2b681-02049514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '378f55e31d824ce163b643013ec5aca8178b1cf0' => 
    array (
      0 => 'templates/answer_form.html',
      1 => 1424440996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29070351954e99702d2b681-02049514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'q_count' => 0,
    'q_sum' => 0,
    'user' => 0,
    'question' => 0,
    'str_mached' => 0,
    'str_unmached' => 0,
    'user_answer' => 0,
    'memory_error' => 0,
    'MAX_TEXT_NUM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e99702dbc958_99244298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e99702dbc958_99244298')) {function content_54e99702dbc958_99244298($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>第<?php echo $_smarty_tpl->tpl_vars['q_count']->value;?>
問/全<?php echo $_smarty_tpl->tpl_vars['q_sum']->value;?>
問の解答</h1>
<h2>
	<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの[<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
]の[<?php echo $_smarty_tpl->tpl_vars['question']->value['workbook'];?>
]の問題
</h2>
<p><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</p>

<h3>模範解答</h3>
<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['answer'],@constant('ENT_QUOTES')));?>
</p>

<h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの解答</h3>
<p class="match"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['str_mached']->value,@constant('ENT_QUOTES')));?>
</p>
<p class="unmatch"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['str_unmached']->value,@constant('ENT_QUOTES')));?>
</p>
<br/><br/>

<button onclick = "location.href='answer.php?q_no=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
&judge=true'">
正解
</button>

<button onclick = "location.href='answer.php?q_no=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
&judge=false'">
不正解
</button><br/><br/>

<form action="revise_form.php" method="GET">
	<input type="hidden" name="q_no", value="<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
">
	<input type="hidden" name="answering", value="1">
	<input type="submit" value="修正する"　/>
</form>


<h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの覚え方</h3>
<?php if ($_smarty_tpl->tpl_vars['question']->value['memory']=='') {?>
<p>覚え方が登録されていません。</p>
<?php } else { ?>
<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['memory'],@constant('ENT_QUOTES')));?>
</p>
<?php }?>

↓<br/><br/>

<form action="answer_form.php?q_no=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
" method="post">
	<input type="hidden" name="user_answer", value="<?php echo $_smarty_tpl->tpl_vars['user_answer']->value;?>
">
	<textarea name="user_memory" cols="35" rows="3"><?php echo $_smarty_tpl->tpl_vars['question']->value['memory'];?>
</textarea><br/>
	<?php if (isset($_smarty_tpl->tpl_vars['memory_error']->value)) {?>
	<p class="error">　→覚え方は<?php echo $_smarty_tpl->tpl_vars['MAX_TEXT_NUM']->value;?>
文字以内で入力してください。</p>
	<?php }?>
	<input type="submit" name="memory" 
		<?php if ($_smarty_tpl->tpl_vars['question']->value['memory']=='') {?>value="覚え方を登録する"
		<?php } else { ?>value="覚え方を編集する"　<?php }?>/>
</form>

<br/>
<a href="count_answer.php?subject=<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['question']->value['workbook'];?>
&finish=1">
	解答を中断して結果を見る
</a>

<br/>
<a href="count_answer.php?subject=<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
&workbook=<?php echo $_smarty_tpl->tpl_vars['question']->value['workbook'];?>
">
	←問題選択に戻る
</a>

</body>
</html><?php }} ?>
