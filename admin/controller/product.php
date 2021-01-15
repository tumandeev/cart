<?php 
class Product{
	public function index(){
		$product_modul = Model::load('product');
		$data['entry_name'] 		= 'Название товара';
		$data['entry_description'] 	= 'Описание товара';
		$data['entry_save'] 		= 'Сохранить изменения';
		$data['entry_add'] 			= 'Создать товар';
		$data['entry_delete'] 		= 'Удалить товар';
		$data['action']				= '/admin/index.php?route=product';



		if(!empty($_POST)){
			if(isset($_POST['save']) && !empty($_POST['product_id'])){
				$product_modul->editProduct($_POST);
			}elseif(isset($_POST['delete']) && !empty($_POST['product_id'])){
				$product_modul->deleteProduct($_POST['product_id']);
			}elseif(isset($_POST['save_add']) && empty($_POST['product_id'])){
				$product_modul->addProduct($_POST);
			}
		}







		if(!empty($_GET['delete_id'])){
			$product_modul->deleteProduct($_GET['delete_id']);
		}




		if(!empty($_GET['product_id'])){
		 $product =	$product_modul->getProduct($_GET['product_id']);
		 $data['product'] = $product;
	
		 $data['title'] = $product['name'];
		 Render::view('product_form.tpl', $data);
		}else{
			$data['product'] = [
				'product_id' => '',
				'name' => '',
				'description' => '',
			];
			$data['title'] = 'Создание товара';
			Render::view('product_form.tpl', $data);
		}




		
	}
}