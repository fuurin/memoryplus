<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 17:48:59
         compiled from "templates/result.html" */ ?>
<?php /*%%SmartyHeaderCode:61507141854e997fb38b850-70592223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af64d91d44fb3fe99bdf414a1a525e917e98c2a' => 
    array (
      0 => 'templates/result.html',
      1 => 1424440996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61507141854e997fb38b850-70592223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'subject' => 0,
    'workbook' => 0,
    'time' => 0,
    'sum' => 0,
    'ok' => 0,
    'message' => 0,
    'q_ng_first' => 0,
    'q_ok_first' => 0,
    'q_normal_first' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e997fb3e42f7_02496238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e997fb3e42f7_02496238')) {function content_54e997fb3e42f7_02496238($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>結果発表</h1>

<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さんの[<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
]の問題集[<?php echo $_smarty_tpl->tpl_vars['workbook']->value;?>
]</h2>

<h3>解答時間：<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</h3>
<h3><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
問中　<?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
問　正解！ <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>

<table>
	<caption>再挑戦</caption>
	<th>
		<td>
			<button onclick = "location.href='question.php?q_no=<?php echo $_smarty_tpl->tpl_vars['q_ng_first']->value;?>
&restart=ng'"
				<?php if (!isset($_smarty_tpl->tpl_vars['q_ng_first']->value)) {?> disabled <?php }?> />
				間違えた問題
			</button>
		</td>

		<td>
			<button onclick = "location.href='question.php?q_no=<?php echo $_smarty_tpl->tpl_vars['q_ok_first']->value;?>
&restart=ok'" 
				<?php if (!isset($_smarty_tpl->tpl_vars['q_ok_first']->value)) {?> disabled <?php }?>/>
				正解した問題
			</button>
		</td>

		<td>
			<button onclick = "location.href='question.php?q_no=<?php echo $_smarty_tpl->tpl_vars['q_normal_first']->value;?>
&restart=normal'" 
				<?php if (!isset($_smarty_tpl->tpl_vars['q_normal_first']->value)) {?> disabled <?php }?>/>
				すべての問題
			</button>
		</td>
	</th>
</table><br/>

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
