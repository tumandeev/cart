<?php
/* Smarty version 3.1.36, created on 2021-01-17 21:06:01
  from '/var/www/html/catalog/view/view/catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60046e79508f34_86106402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efccd8552afc979f3c7daba0d7cf63d1c097986b' => 
    array (
      0 => '/var/www/html/catalog/view/view/catalog.tpl',
      1 => 1610902565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60046e79508f34_86106402 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<body>




	<div class="container">
		<div class="products">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

		<div class="product_item" >

			<img class="product_item_image" src="../image/no_image.png" style="width: 150px;height: 150px;">

			<a class="product_name" ><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>

			<p class="product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>

			<a class="link_product" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['href'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['link_product']->value;?>
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
