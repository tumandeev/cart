
	{include file='header.tpl'}


<body>

	


<div class="container">
	<a class="link_product" href="{$add_link}"><p>{$entry_add}</p></a>
		<ul class="products">
		{foreach from=$products item=product}
		<div class="product_item" >
			<li class="product_name" >{$product.name}</li>
			<p>{$product.description}</p>
			<div class="links">
			<a class="link_product" href="{$product.href}"><p>{$edit_link}</p></a>
			<a class="link_product" href="{$product.delete_link}"> <p>{$entry_delete} </p></a>
			</div>
			</div>
		{/foreach}
	</ul>

</div>



{include file='footer.tpl'}
</body>
</html>


