
	{include file='header.tpl'}


<body>

	


<div class="container">
	<a class="link_add" href="{$add_link}"><p>{$entry_add}</p></a>



		<div class="products">

		{foreach from=$products item=product name=products}
			{if ($smarty.foreach.products.iteration % 2) == 0}
		<div class="product_item noteven" >
			{else}
		<div class="product_item" >
			{/if}
			<img src="../../image/no_image.png">
			<li class="product_name" >{$product.name}</li>
			<p class="product_description" >{$product.description}</p>
			<a class="link_product edit" href="{$product.href}"><p>{$edit_link}</p></a>
			<a class="link_product delete" href="{$product.delete_link}"> <p>{$entry_delete} </p></a>
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


