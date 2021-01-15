<?php

class Controller {
	public static function load($controller){

		if (is_file('./controller/'.$controller.'.php')) {
			// $class = 'model'.$controller;
			include('./controller/'.$controller.'.php');
			if(!class_exists($controller, false)){
				exit('class controller '.$controller.' not found');
			}else{
				if(!method_exists($controller, 'index')){
					exit('not found method');
				}else{
					$controller_class = new $controller;
					return $controller_class->index();
				}
				// $controller_class = new $class;
				// return $controller_class;
			}
			

		}else{
			exit('is not model class '.$controller);
		}
	

	}

}
