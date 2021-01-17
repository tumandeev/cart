	{include file='header.tpl'}
<body>
	<div class="container" style="margin: 10px auto">
	<form class="form" action="{$action}" method="post" >
		<label for="name-input">{$entry_name}</label>
		{if $product.name}
		<input type="name" name="name" value="{$product.name}" id="name-input" placeholder="{$entry_name}" >
		{else}
		<input type="name" name="name" value="{$product.name}" id="name-input" placeholder="{$entry_name}" >
		{/if}
<br />
<br />
		<label for="description-input">{$entry_description}</label>

		{if $product.description}
		<textarea name="description" id="description-input" placeholder="{$entry_description}" >{$product.description}</textarea>
		{else}
		<textarea name="description" id="description-input" placeholder="{$entry_description}" ></textarea>
		{/if}
<br />
<br />


		{if $product.product_id}
		<input type="hidden" name="product_id" value="{$product.product_id}">
		<button type="submit" name="save">{$entry_save}</button>
		<button type="submit" name="delete">{$entry_delete}</button>
		{else}
		<button type="submit" name="save_add">{$entry_add}</button>
		{/if}
		
	</form>
	</div>
</body>
</html>