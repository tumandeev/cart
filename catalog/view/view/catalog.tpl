	{include file='header.tpl'}
	<body>




	<div class="container">
		<div class="products">

		{foreach from=$products item=product}

		<div class="product_item" >

			<img class="product_item_image" src="../image/no_image.png" style="width: 150px;height: 150px;">

			<a class="product_name" >{$product.name}</a>

			<p class="product_description">{$product.description}</p>

			<a class="link_product" href="{$product.href}"><p>{$link_product}</p></a>

		</div>

		{/foreach}

	</div>


	<div class="pagination">
		{foreach from=$pagination_link item=pagination_item}
			<a href="{$pagination_item.href}"><li class="pagination_item" >{$pagination_item.name}</li></a>
		{/foreach}
	</div>


	</div>



		{include file='footer.tpl'}
	</body>
</html>
