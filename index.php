<?php
include ('./config.php');

include (DIR_CORE.'/route.php');
include (DIR_CORE.'/model.php');




if(isset($_GET['route'])){
	$class = $_GET['route'];
	$controller = new $class;
	if(!method_exists($class, 'index')){
		exit('not found method');
	}else{
		$controller->index();
	}
}else{
	header('location: /index.php?route=catalog');
}