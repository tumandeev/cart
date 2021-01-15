<?php
class Catalog{
	public function index(){
		$product_model = Model::load('product');

		$data['link_product'] = 'Подробнее';
		$data['title'] = 'Каталог';



		$products = $product_model->getProducts();
		$data['products'] = [];
		foreach ($products as $product) {
			$data['products'][] = [
				'name' => $product['name'],
				'description' => mb_strimwidth($product['description'], 0, 60, "..."),
				'href' => '/index.php?route=product&product_id='.$product['product_id'],
			];
		}
		

		
		Render::view('catalog.tpl',$data);
	}
}