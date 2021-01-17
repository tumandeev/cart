<?php
/* Smarty version 3.1.36, created on 2021-01-17 10:29:17
  from '/var/www/html/catalog/view/view/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6003d93de00180_01112153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b034afca854f3e9430988b55ef2e36856f03e6' => 
    array (
      0 => '/var/www/html/catalog/view/view/product.tpl',
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
function content_6003d93de00180_01112153 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
	
	<div class="container">
		<div class="products">
			<div class="product_item" style="height: 60vh;">
				<a class="link_product" href="<?php echo $_smarty_tpl->tpl_vars['prev_link']->value;?>
"><p><?php echo $_smarty_tpl->tpl_vars['entry_prev']->value;?>
</p></a>
				<h1><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h1>
				<p><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
			</div>
		</div>
	</div>


	<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
