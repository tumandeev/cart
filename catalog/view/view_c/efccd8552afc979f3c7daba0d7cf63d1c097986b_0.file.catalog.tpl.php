<?php
/* Smarty version 3.1.36, created on 2021-01-17 10:26:47
  from '/var/www/html/catalog/view/view/catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6003d8a725cf13_36704409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efccd8552afc979f3c7daba0d7cf63d1c097986b' => 
    array (
      0 => '/var/www/html/catalog/view/view/catalog.tpl',
      1 => 1610862755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6003d8a725cf13_36704409 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<body>
	<div class="container">
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
			<p class="product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
			<a class="link_product" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['href'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['link_product']->value;?>
</p></a>
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
