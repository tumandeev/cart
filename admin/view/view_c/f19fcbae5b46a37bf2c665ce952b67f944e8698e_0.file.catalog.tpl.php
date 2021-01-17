<?php
/* Smarty version 3.1.36, created on 2021-01-17 22:56:03
  from '/var/www/html/admin/view/view/catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600488437c35b8_90958838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f19fcbae5b46a37bf2c665ce952b67f944e8698e' => 
    array (
      0 => '/var/www/html/admin/view/view/catalog.tpl',
      1 => 1610909760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_600488437c35b8_90958838 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>

	


<div class="container">
	<a class="link_add" href="<?php echo $_smarty_tpl->tpl_vars['add_link']->value;?>
"><p><?php echo $_smarty_tpl->tpl_vars['entry_add']->value;?>
</p></a>



		<div class="products">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
			<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%2) == 0) {?>
		<div class="product_item noteven" >
			<?php } else { ?>
		<div class="product_item" >
			<?php }?>
			<img src="../../image/no_image.png">
			<li class="product_name" ><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</li>
			<p class="product_description" ><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
			<a class="link_product edit" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['href'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['edit_link']->value;?>
</p></a>
			<a class="link_product delete" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['delete_link'];?>
"> <p><?php echo $_smarty_tpl->tpl_vars['entry_delete']->value;?>
 </p></a>
		</div>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


	</div>

	<div class="pagination">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination_link']->value, 'pagination_item');
$_smarty_tpl->tpl_vars['pagination_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pagination_item']->value) {
$_smarty_tpl->tpl_vars['pagination_item']->do_else = false;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['pagination_item']->value['href'];?>
"><li class="pagination_item" ><?php echo $_smarty_tpl->tpl_vars['pagination_item']->value['name'];?>
</li></a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>

</div>



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>


<?php }
}
