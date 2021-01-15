	{include file='header.tpl'}
	<body>
	<div class="container">
		<ul class="products">
		{foreach from=$products item=product}
		<div class="product_item" >
			<li class="product_name" >{$product.name}</li>
			<p class="product_description">{$product.description}</p>
			<a class="link_product" href="{$product.href}"><p>{$link_product}</p></a>
		</div>
		{/foreach}
	</ul>

	</div>



		{include file='footer.tpl'}
	</body>
</html>
