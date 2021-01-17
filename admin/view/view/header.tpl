<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>

	<link rel="stylesheet/less" type="text/css" href="/admin/view/stylesheet/less/styles.less" />
	<script src="/admin/view/stylesheet/javasript/less.min.js" type="text/javascript"></script>

</head>
<header class="header" >
	<div class="container">
		<div class="content">
			<h3 class="title" >хедер админ части</h3>
			<div class="log_out">
				{if !isset($logout)}
				<a href="/admin/index.php?route=login&logout=logout">выход</a>
				{/if}
				<p></p>
				<a href="/">Перейти в магазин</a>
			</div>
		</div>

	</div>
</header>