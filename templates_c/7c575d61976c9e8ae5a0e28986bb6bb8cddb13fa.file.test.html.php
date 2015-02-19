<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-06 02:16:52
         compiled from "templates\test.html" */ ?>
<?php /*%%SmartyHeaderCode:1112454ab2e1db04002-49684951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c575d61976c9e8ae5a0e28986bb6bb8cddb13fa' => 
    array (
      0 => 'templates\\test.html',
      1 => 1420506960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1112454ab2e1db04002-49684951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ab2e1dbbad11_50026128',
  'variables' => 
  array (
    'test1' => 0,
    'test2' => 0,
    'test3' => 0,
    'fruits' => 0,
    'sample' => 0,
    'fruit' => 0,
    'test' => 0,
    'default' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ab2e1dbbad11_50026128')) {function content_54ab2e1dbbad11_50026128($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<ul>
	文字列割り当て
	<li><?php echo $_smarty_tpl->tpl_vars['test1']->value;?>
</li>
	<li><?php echo $_smarty_tpl->tpl_vars['test2']->value;?>
</li>
	<li><?php echo $_smarty_tpl->tpl_vars['test3']->value;?>
</li>
</ul>

<ul>
	配列
	<li><?php echo $_smarty_tpl->tpl_vars['fruits']->value[0];?>
</li>
	<li><?php echo $_smarty_tpl->tpl_vars['fruits']->value[1];?>
</li>
	<li><?php echo $_smarty_tpl->tpl_vars['fruits']->value[2];?>
</li>
</ul>

条件分岐
<?php if ($_smarty_tpl->tpl_vars['sample']->value==10) {?><p>変数Ｓａｍｐｌｅの値は10です。</p>
<?php } elseif ($_smarty_tpl->tpl_vars['sample']->value>5) {?><p>変数Ｓａｍｐｌｅの値は5より大きいです。</p>
<?php } else { ?><p>変数Ｓａｍｐｌｅの内容は５以下です。</p>
<?php }?>

<ul>
	繰り返し
	<?php  $_smarty_tpl->tpl_vars['fruit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fruit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fruits']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fruit']->key => $_smarty_tpl->tpl_vars['fruit']->value) {
$_smarty_tpl->tpl_vars['fruit']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['fruit']->value;?>
</li>
	<?php } ?>
</ul>

修飾子
<p><?php echo $_smarty_tpl->tpl_vars['test']->value;?>
</p>
改行を反映
<p><?php echo nl2br($_smarty_tpl->tpl_vars['test']->value);?>
</p>
HTMLを無効に＆改行を反映
<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['test']->value, ENT_QUOTES, 'UTF-8', true));?>
</p>
値が入力されていないときはdefaultの値を表示
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['default']->value)===null||$tmp==='' ? '値はありません' : $tmp);?>
</p>

ヘッダファイルの読み込みも可能。
全HTMLファイルでヘッダを統一したい時などに便利。

</body>
</html><?php }} ?>
