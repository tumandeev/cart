<?php 
class Catalog{
	public function index(){
		$product_modul = Model::load('product');



		$data['title'] = 'Каталог';
		$data['edit_link'] = 'Редактировать товар';
		$data['entry_add'] = 'Создать товар';
		$data['entry_delete'] = 'Удалить товар';
		$data['add_link'] = '/admin/index.php?route=product';
		

		$data['products'] = [];
		$products = $product_modul->getProducts();
		foreach ($products as $product) {
			
			$data['products'][] = [
				'product_id' 	=>  $product['product_id'],
				'name' 			=> $product['name'],
				'description' 	=>  mb_strimwidth($product['description'], 0, 60, "..."),
				'href'			=> '/admin/index.php?route=product&product_id=' . $product['product_id'],
				'delete_link'   => '/admin/index.php?route=product&delete_id=' . $product['product_id'],
			];

		}


		// $data['header'] = Controller::load('header');

		Render::view('catalog.tpl', $data);
	}
}