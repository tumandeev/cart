<?php
/* Smarty version 3.1.36, created on 2021-01-17 12:43:16
  from '/var/www/html/catalog/view/view/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6003f8a4c25a18_48760926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b034afca854f3e9430988b55ef2e36856f03e6' => 
    array (
      0 => '/var/www/html/catalog/view/view/product.tpl',
      1 => 1610872991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6003f8a4c25a18_48760926 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
	
	<div class="container">
		<div class="breadcrubs" >
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrubs']->value, 'breadcrub', false, NULL, 'breadcrubs', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['breadcrub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['breadcrub']->value) {
$_smarty_tpl->tpl_vars['breadcrub']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrubs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrubs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrubs']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrubs']->value['total'];
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrubs']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrubs']->value['last'] : null)) {?>
			<li class="breadcrubs_breadcrub" >	<a><?php echo $_smarty_tpl->tpl_vars['breadcrub']->value['name'];?>
</a></li>
				<?php } else { ?>
			<li class="breadcrubs_breadcrub" >	<a href="<?php echo $_smarty_tpl->tpl_vars['breadcrub']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['breadcrub']->value['name'];?>
</a> 	<span> > 
			</span> </li>
				<?php }?>
				
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<a class="link_prev" href="<?php echo $_smarty_tpl->tpl_vars['prev_link']->value;?>
"><p><?php echo $_smarty_tpl->tpl_vars['entry_prev']->value;?>
</p></a>
		<div class="product">
			<div class="image">
				<img src="../image/no_image.png">
			</div>
			<div class="product_item" style="height: 60vh;">
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
