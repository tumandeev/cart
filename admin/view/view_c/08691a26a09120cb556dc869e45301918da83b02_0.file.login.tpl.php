<?php
/* Smarty version 3.1.36, created on 2021-01-17 10:14:37
  from '/var/www/html/admin/view/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6003d5cdc67303_00480109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08691a26a09120cb556dc869e45301918da83b02' => 
    array (
      0 => '/var/www/html/admin/view/view/login.tpl',
      1 => 1610862755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6003d5cdc67303_00480109 (Smarty_Internal_Template $_smarty_tpl) {
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
