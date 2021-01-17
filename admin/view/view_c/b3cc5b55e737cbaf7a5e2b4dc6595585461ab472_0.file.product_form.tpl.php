<?php
/* Smarty version 3.1.36, created on 2021-01-17 22:33:49
  from '/var/www/html/admin/view/view/product_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6004830d4d54b2_72250009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cc5b55e737cbaf7a5e2b4dc6595585461ab472' => 
    array (
      0 => '/var/www/html/admin/view/view/product_form.tpl',
      1 => 1610908425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6004830d4d54b2_72250009 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
	<div class="container" style="margin: 10px auto">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link_prev']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entry_prev']->value;?>
 </a>
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
			<p class="error" ><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
			<?php }?>
	<form class="form_product" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" enctype="multipart/form-data ">
		<div class="form_block">

		

			<div class="form_control">
				<label for="name-input"><?php echo $_smarty_tpl->tpl_vars['entry_name']->value;?>
</label>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['name']) {?>
				<input type="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" id="name-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_name']->value;?>
" >
				<?php } elseif ($_smarty_tpl->tpl_vars['entry_name_value']->value) {?>
				<input type="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['entry_name_value']->value;?>
" id="name-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_name']->value;?>
" >
				<?php } else { ?>
				<input type="name" name="name" value="" id="name-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_name']->value;?>
" >
				<?php }?>
			</div>


			<div class="form_control">
				<label for="description-input"><?php echo $_smarty_tpl->tpl_vars['entry_description']->value;?>
</label>

				<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
				<textarea name="description" id="description-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_description']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</textarea>
				<?php } elseif ($_smarty_tpl->tpl_vars['entry_description_value']->value) {?>
				<textarea name="description" id="description-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_description']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['entry_description_value']->value;?>
</textarea>
				<?php } else { ?>
				<textarea name="description" id="description-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['entry_description']->value;?>
" ></textarea>
				<?php }?>
			</div>


			<div class="form_control">
				<label for="image-input"><?php echo $_smarty_tpl->tpl_vars['entry_image']->value;?>
</label>
				<input type="file" name="image" id="image-input">

		
			</div>

			<div class="form_control button">
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
			<div class="form_control">
		</div>
	</form>
	</div>
</body>
</html><?php }
}
