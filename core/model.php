<?php

class Model {
	public static function load($model){

		if (is_file('./model/'.$model.'.php')) {
			$class = 'model'.$model;
			include('./model/'.$model.'.php');
			if(!class_exists($class, false)){
				exit('class model '.$model.' not found');
			}else{
				
				$model_class = new $class;
				return $model_class;
			}
			

		}else{
			exit('is not model class '.$model);
		}
	

	}

}
