<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include ('./config.php');
// admin
include (DIR_CORE.'/route.php');
include (DIR_CORE.'/model.php');
include (DIR_CORE.'/controller.php');



	if(!empty($_COOKIE['token'])){
		$user_token = $_COOKIE['token'];
		$check_token = Model::load('checktoken');
		if(!$check_token->checkToken($user_token)  && $_GET['route'] != 'login'){
			header('location: /admin/index.php?route=login');
		}
	}else{
		if(isset($_GET['route']) && $_GET['route'] != 'login'){
			header('location: /admin/index.php?route=login');
		}
	}




	if(isset($_GET['route'])){
		$class = $_GET['route'];
		$controller = new $class;
		if(!method_exists($class, 'index')){
			exit('not found method');
		}else{
			$controller->index();
		}
	}else{
		header('location: /admin/index.php?route=catalog');
	}
