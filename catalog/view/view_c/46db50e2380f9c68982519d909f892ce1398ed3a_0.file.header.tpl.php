<?php
/* Smarty version 3.1.36, created on 2021-01-17 10:14:05
  from '/var/www/html/view/view/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6003d5ad131963_12059809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46db50e2380f9c68982519d909f892ce1398ed3a' => 
    array (
      0 => '/var/www/html/view/view/header.tpl',
      1 => 1610862755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6003d5ad131963_12059809 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet/less" type="text/css" href="/view/stylesheet/less/styles.less" />
	<?php echo '<script'; ?>
 src="/view/stylesheet/javasript/less.min.js" type="text/javascript"><?php echo '</script'; ?>
>
</head>
<header class="header">
	<div class="container">
	<h3 class="title" >хедер пользовательской части</h3>
	</div>
</header><?php }
}
