<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


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