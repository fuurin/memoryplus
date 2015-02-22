<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 17:44:10
         compiled from "templates/question.html" */ ?>
<?php /*%%SmartyHeaderCode:103599578554e996da616726-47229591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaaad988306daab2e9d9d8b4a8c972a002e6671b' => 
    array (
      0 => 'templates/question.html',
      1 => 1424440996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103599578554e996da616726-47229591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'q_count' => 0,
    'q_sum' => 0,
    'user' => 0,
    'question' => 0,
    'answer_rate' => 0,
    'answer_num' => 0,
    'memory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e996da680174_24674419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e996da680174_24674419')) {function content_54e996da680174_24674419($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>第<?php echo $_smarty_tpl->tpl_vars['q_count']->value;?>
問/全<?php echo $_smarty_tpl->tpl_vars['q_sum']->value;?>
問</h1>
<h2>
	<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの[<?php echo $_smarty_tpl->tpl_vars['question']->value['subject'];?>
]の[<?php echo $_smarty_tpl->tpl_vars['question']->value['workbook'];?>
]の問題
</h2>

<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['question'],@constant('ENT_QUOTES')));?>
</p>

<h3>正答率：<?php echo $_smarty_tpl->tpl_vars['answer_rate']->value;?>
/解答回数：<?php echo $_smarty_tpl->tpl_vars['answer_num']->value;?>
回</h3>
<br/>


<form action="answer_form.php?q_no=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
" method="POST">
	解答 <br/>
	<textarea name="user_answer" cols="60" rows="8" autofocus></textarea><br/>
	<br/>
	<input type="submit" name="answer" value="答えを見る"　/>
</form><br/>

<form action="question.php?q_no=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_no'];?>
" method="POST">
	<input type="submit" <?php if (isset($_smarty_tpl->tpl_vars['memory']->value)) {?>name="memory_close" value="覚え方を閉じる"
	　<?php } else { ?>name="memory" value="覚え方を見る" <?php }?>/>
</form>

<?php if (isset($_smarty_tpl->tpl_vars['memory']->value)) {?>
	<h3>覚え方</h3>
	<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['question']->value['memory'],@constant('ENT_QUOTES')));?>
</p>
<?php } else { ?>
	<br/>
<?php }?>

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
