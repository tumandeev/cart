<?php
/* Smarty version 3.1.36, created on 2021-01-17 22:53:32
  from '/var/www/html/admin/view/view/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600487acc26cb6_88450889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f4d7796df34554894722d7c10eda635a4d2bee' => 
    array (
      0 => '/var/www/html/admin/view/view/header.tpl',
      1 => 1610909609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600487acc26cb6_88450889 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

	<link rel="stylesheet/less" type="text/css" href="/admin/view/stylesheet/less/styles.less" />
	<?php echo '<script'; ?>
 src="/admin/view/stylesheet/javasript/less.min.js" type="text/javascript"><?php echo '</script'; ?>
>

</head>
<header class="header" >
	<div class="container">
		<div class="content">
			<h3 class="title" >хедер админ части</h3>
			<div class="log_out">
				<?php if (!(isset($_smarty_tpl->tpl_vars['logout']->value))) {?>
				<a href="/admin/index.php?route=login&logout=logout">выход</a>
				<?php }?>
				<p></p>
				<a href="/">Перейти в магазин</a>
			</div>
		</div>

	</div>
</header><?php }
}
