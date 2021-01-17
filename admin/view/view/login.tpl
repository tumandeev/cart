	{include file='header.tpl'}

<body>
	
<div class="container">
	<div class="form">
		<p class="title_auth" >{$entry_auth}</p>
		{if $entry_error}
			<p class="error" >{$entry_error}</p>
		{/if}

		<form action="{$action}" method="post">
			<div class="input_group">
				<div class="form_control">
					{if $login}
						<input type="login" name="login" placeholder="{$entry_username}" value="{$login}">
					{else}
						<input type="login" name="login" placeholder="{$entry_username}">
					{/if}
				</div>
				<div class="form_control">
					<input type="password" name="password" placeholder="{$entry_password}" >
				</div>
				<div class="form_control ">
					<button class="button" type="submit" >{$entry_button_name}</button>
				</div>
			</div>
		</form>
	</div>
</div>

</body>
</html>
