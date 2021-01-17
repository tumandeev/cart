<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		 {if $entry_error}
		<p style="color:red;" >{$entry_error}</p>
		{/if}
		<form action="{$action}" method="post">
			{if $login}
				<input type="login" name="login" placeholder="{$entry_username}" value="{$login}">
			{else}
				<input type="login" name="login" placeholder="{$entry_username}">
			{/if}
			<input type="password" name="password" placeholder="{$entry_password}" >
			<button type="submit" >{$entry_button_name}</button>
			
		</form>
	</body>
</html>
