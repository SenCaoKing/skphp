<?php
/* Smarty version 3.1.30, created on 2018-07-12 16:26:46
  from "E:\WWW\mytest\github\skphp.\app\smarty\templates\index\render2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b47814600bb79_42700756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2266661de38adbb9be471f0c8f8c65a14943ea7d' => 
    array (
      0 => 'E:\\WWW\\mytest\\github\\skphp.\\app\\smarty\\templates\\index\\render2.html',
      1 => 1531412800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b47814600bb79_42700756 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Smarty</title>
</head>
<body>
    <p>第一个Smarty页面</p>
    <p>用户名：<?php ob_start();
echo $_smarty_tpl->tpl_vars['username']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</p>
</body>
</html><?php }
}
