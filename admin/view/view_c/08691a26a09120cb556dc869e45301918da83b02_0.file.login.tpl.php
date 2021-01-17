<?php
/* Smarty version 3.1.36, created on 2021-01-17 15:16:15
  from '/var/www/html/admin/view/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60041c7f151b32_98578602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08691a26a09120cb556dc869e45301918da83b02' => 
    array (
      0 => '/var/www/html/admin/view/view/login.tpl',
      1 => 1610882171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60041c7f151b32_98578602 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
	
<div class="container">
	<div class="form">
		<p class="title_auth" ><?php echo $_smarty_tpl->tpl_vars['entry_auth']->value;?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['entry_error']->value) {?>
			<p class="error" ><?php echo $_smarty_tpl->tpl_vars['entry_error']->value;?>
</p>
		<?php }?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
			<div class="input_group">
				<div class="form_control">
					<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
						<input type="login" name="login" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_username']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
					<?php } else { ?>
						<input type="login" name="login" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_username']->value;?>
">
					<?php }?>
				</div>
				<div class="form_control">
					<input type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_password']->value;?>
" >
				</div>
				<div class="form_control ">
					<button class="button" type="submit" ><?php echo $_smarty_tpl->tpl_vars['entry_button_name']->value;?>
</button>
				</div>
			</div>
		</form>
	</div>
</div>

</body>
</html>
<?php }
}
