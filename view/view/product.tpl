	{include file='header.tpl'}
<body>
	
	<div class="container">
		<div class="products">
			<div class="product_item" style="height: 60vh;">
				<a class="link_product" href="{$prev_link}"><p>{$entry_prev}</p></a>
				<h1>{$product.name}</h1>
				<p>{$product.description}</p>
			</div>
		</div>
	</div>


	{include file='footer.tpl'}
</body>
</html>