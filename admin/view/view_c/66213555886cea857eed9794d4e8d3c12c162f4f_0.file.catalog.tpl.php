<?php
/* Smarty version 3.1.36, created on 2021-01-14 23:17:02
  from '/var/www/shaporov/data/www/store-shaporov.t-leader.ru/admin/view/view/catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6000a6be7ffb93_84534134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66213555886cea857eed9794d4e8d3c12c162f4f' => 
    array (
      0 => '/var/www/shaporov/data/www/store-shaporov.t-leader.ru/admin/view/view/catalog.tpl',
      1 => 1610655420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6000a6be7ffb93_84534134 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>

	


<div class="container">
	<a class="link_product" href="<?php echo $_smarty_tpl->tpl_vars['add_link']->value;?>
"><p><?php echo $_smarty_tpl->tpl_vars['entry_add']->value;?>
</p></a>
		<ul class="products">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
		<div class="product_item" >
			<li class="product_name" ><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</li>
			<p><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
			<div class="links">
			<a class="link_product" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['href'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['edit_link']->value;?>
</p></a>
			<a class="link_product" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['delete_link'];?>
"> <p><?php echo $_smarty_tpl->tpl_vars['entry_delete']->value;?>
 </p></a>
			</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>

</div>



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>


<?php }
}
