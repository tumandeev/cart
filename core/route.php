<?php
spl_autoload_register(function($class){
	if (is_file(DIR_MVC.'/controller/'.$class.'.php')) {
		include(DIR_MVC.'/controller/'.$class.'.php');
		if(!class_exists($class, false)){
			exit('class '.$class.' not found');
		}
	}else{
		exit('is not class '.$class);
	}
});
