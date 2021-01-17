<?php
/* Smarty version 3.1.36, created on 2021-01-17 10:14:53
  from '/var/www/html/admin/view/view/product_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6003d5dd0f6e65_86421513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cc5b55e737cbaf7a5e2b4dc6595585461ab472' => 
    array (
      0 => '/var/www/html/admin/view/view/product_form.tpl',
      1 => 1610862755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6003d5dd0f6e65_86421513 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
	<div class="container" style="margin: 10px auto">
	<form class="form" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" >
		<label for="name-input"><?php echo $_smarty_tpl->tpl_vars['entry_name']->value;?>
</label>
		<?php if ($_smarty_tpl->tpl_vars['product']->value['name']) {?>
		<input type="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" id="name-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_name']->value;?>
" >
		<?php } else { ?>
		<input type="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" id="name-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_name']->value;?>
" >
		<?php }?>
<br />
<br />
		<label for="description-input"><?php echo $_smarty_tpl->tpl_vars['entry_description']->value;?>
</label>

		<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
		<textarea name="description" id="description-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_description']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</textarea>
		<?php } else { ?>
		<textarea name="description" id="description-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_description']->value;?>
" ></textarea>
		<?php }?>
<br />
<br />


		<?php if ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
		<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
">
		<button type="submit" name="save"><?php echo $_smarty_tpl->tpl_vars['entry_save']->value;?>
</button>
		<button type="submit" name="delete"><?php echo $_smarty_tpl->tpl_vars['entry_delete']->value;?>
</button>
		<?php } else { ?>
		<button type="submit" name="save_add"><?php echo $_smarty_tpl->tpl_vars['entry_add']->value;?>
</button>
		<?php }?>
		
	</form>
	</div>
</body>
</html><?php }
}
