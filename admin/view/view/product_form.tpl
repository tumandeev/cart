	{include file='header.tpl'}
<body>
	<div class="container" style="margin: 10px auto">
		<a href="{$link_prev}"> {$entry_prev} </a>
			{if $error}
			<p class="error" >{$error}</p>
			{/if}
	<form class="form_product" action="{$action}" method="post" enctype="multipart/form-data ">
		<div class="form_block">

		

			<div class="form_control">
				<label for="name-input">{$entry_name}</label>
				{if $product.name}
				<input type="name" name="name" value="{$product.name}" id="name-input" placeholder="{$entry_name}" >
				{elseif $entry_name_value}
				<input type="name" name="name" value="{$entry_name_value}" id="name-input" placeholder="{$entry_name}" >
				{else}
				<input type="name" name="name" value="" id="name-input" placeholder="{$entry_name}" >
				{/if}
			</div>


			<div class="form_control">
				<label for="description-input">{$entry_description}</label>

				{if $product.description}
				<textarea name="description" id="description-input" placeholder="{$entry_description}" >{$product.description}</textarea>
				{elseif $entry_description_value}
				<textarea name="description" id="description-input" placeholder="{$entry_description}" >{$entry_description_value}</textarea>
				{else}
				<textarea name="description" id="description-input" placeholder="{$entry_description}" ></textarea>
				{/if}
			</div>


			<div class="form_control">
				<label for="image-input">{$entry_image}</label>
				<input type="file" name="image" id="image-input">

		
			</div>

			<div class="form_control button">
				{if $product.product_id}
				<input type="hidden" name="product_id" value="{$product.product_id}">
				<button type="submit" name="save">{$entry_save}</button>
				<button type="submit" name="delete">{$entry_delete}</button>
				{else}
				<button type="submit" name="save_add">{$entry_add}</button>
				{/if}
			<div class="form_control">
		</div>
	</form>
	</div>
</body>
</html>