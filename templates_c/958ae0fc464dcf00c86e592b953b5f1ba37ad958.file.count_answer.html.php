<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-18 00:50:37
         compiled from "templates\count_answer.html" */ ?>
<?php /*%%SmartyHeaderCode:3231054e3d0373b7377-13176918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '958ae0fc464dcf00c86e592b953b5f1ba37ad958' => 
    array (
      0 => 'templates\\count_answer.html',
      1 => 1424217014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3231054e3d0373b7377-13176918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e3d0374a96a2_55020771',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e3d0374a96a2_55020771')) {function content_54e3d0374a96a2_55020771($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<h1>解答終了</h1>
<h2>お疲れ様です！<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
さん！</h2>
<h3>解答履歴を登録中……</h3>
<h3>しばらくお待ちください。</h3>

</body>
</html><?php }} ?>
