<?php
/* Smarty version 3.1.36, created on 2021-01-17 10:35:34
  from '/var/www/html/catalog/view/view/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6003dab61e87f2_17685176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de2fd2528e9ef3a8cc62d5eea1b5418ad61d540d' => 
    array (
      0 => '/var/www/html/catalog/view/view/header.tpl',
      1 => 1610865331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6003dab61e87f2_17685176 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet/less" type="text/css" href="/catalog/view/stylesheet/less/styles.less" />
	<?php echo '<script'; ?>
 src="/catalog/view/stylesheet/javasript/less.min.js" type="text/javascript"><?php echo '</script'; ?>
>
</head>
<header class="header">
	<div class="container">
	<h3 class="title" >хедер пользовательской части</h3>
	</div>
</header><?php }
}
