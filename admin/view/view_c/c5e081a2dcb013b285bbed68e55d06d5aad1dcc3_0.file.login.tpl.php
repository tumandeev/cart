<?php
/* Smarty version 3.1.36, created on 2021-01-14 13:32:58
  from '/var/www/shaporov/data/www/store-shaporov.t-leader.ru/admin/view/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60001dda538323_47944865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e081a2dcb013b285bbed68e55d06d5aad1dcc3' => 
    array (
      0 => '/var/www/shaporov/data/www/store-shaporov.t-leader.ru/admin/view/view/login.tpl',
      1 => 1610620375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60001dda538323_47944865 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		 <?php if ($_smarty_tpl->tpl_vars['entry_error']->value) {?>
		<p style="color:red;" ><?php echo $_smarty_tpl->tpl_vars['entry_error']->value;?>
</p>
		<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
			<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
				<input type="login" name="login" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_username']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
			<?php } else { ?>
				<input type="login" name="login" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_username']->value;?>
">
			<?php }?>
			<input type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_password']->value;?>
" >
			<button type="submit" ><?php echo $_smarty_tpl->tpl_vars['entry_button_name']->value;?>
</button>
			
		</form>
	</body>
</html>
<?php }
}
