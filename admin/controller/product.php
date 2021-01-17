<?php 
class Product{
	public function index(){
		$product_modul = Model::load('product');
		$data['entry_name'] 		= 'Название товара';
		$data['entry_description'] 	= 'Описание товара';
		$data['entry_image'] 		= 'Изображение товара';
		$data['entry_save'] 		= 'Сохранить изменения';
		$data['entry_prev'] 		= 'Назад';
		$data['entry_add'] 			= 'Создать товар';
		$data['entry_delete'] 		= 'Удалить товар';
		$data['action']				= '/admin/index.php?route=product';
		$data['error'] = [];

		$data['entry_description_value'] 	= '';
		$data['entry_name_value'] 		= '';



		$url = '';



		if(!empty($_GET['page'])){
			$url .= '&page='.$_GET['page'];
		}
		if(!empty($_POST)){
			$post = $_POST;

			if(!empty($post['name'])){
				$data['entry_name_value'] 		= $post['name'];
			}
			if(!empty($post['description'])){
				$data['entry_description_value'] 	= $post['description'];
			}



			if(!empty($_POST['image'])){




				if(!empty($_FILES)){
				}else{
					// $data['error'] = 'Не удалось загрузить изображение, проверте права на запись фалов на вашем сервере.';
					$data['error'] = 'Не удалось загрузить изображение, этот функционал в разработке';
				}
			}


			if(empty($data['error'])){
				if(!$product_modul->validate($post)){
					if(isset($post['save']) && !empty($post['product_id'])){
						$product_modul->editProduct($post);
					}elseif(isset($post['delete']) && !empty($post['product_id'])){
						$status = $product_modul->deleteProduct($post['product_id']);
						if(!$status){
							header('location: /admin/index.php?route=catalog'.$url);
						}

					}elseif(isset($post['save_add']) && empty($post['product_id'])){
						$status_add = $product_modul->addProduct($post);
						if($status_add){
							header('location: /admin/index.php?route=catalog'.$url);
						}
					
					}
				}else{
					$errors = $product_modul->validate($post);
					$data['error'] = array_shift($errors);
				}
			}


		}


		
	





		$data['link_prev'] = '/admin/index.php?route=catalog'.$url;

		if(!empty($_GET['delete_id'])){
			$status = $product_modul->deleteProduct($_GET['delete_id']);
			if(!$status){
				header('location: /admin/index.php?route=catalog'.$url);
			}
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