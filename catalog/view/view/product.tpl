	{include file='header.tpl'}
<body>
	
	<div class="container">
		<div class="breadcrubs" >
			{foreach from=$breadcrubs item=breadcrub name=breadcrubs}
				{if $smarty.foreach.breadcrubs.last}
			<li class="breadcrubs_breadcrub" >	<a>{$breadcrub.name}</a></li>
				{else}
			<li class="breadcrubs_breadcrub" >	<a href="{$breadcrub.href}">{$breadcrub.name}</a> 	<span> > 
			</span> </li>
				{/if}
				
			{/foreach}
		</div>
		<a class="link_prev" href="{$prev_link}"><p>{$entry_prev}</p></a>
		<div class="product">
			<div class="image">
				<img src="../image/no_image.png">
			</div>
			<div class="product_item" style="height: 60vh;">
				<h1>{$product.name}</h1>
				<p>{$product.description}</p>
			</div>
		</div>
	</div>


	{include file='footer.tpl'}
</body>
</html>