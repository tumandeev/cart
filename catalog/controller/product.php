<?php
class Product{
	public function index(){
		$product_model = Model::load('product');

		$url = '';


		if(isset($_GET['page'])){
			$url .= '&page='.$_GET['page'];
		}

		if(isset($_GET['product_id'])){

			$data['breadcrubs'][] = [
				'name' 	=> 'Главная',
				'href' 	=> '/'
			];
			$data['breadcrubs'][] = [
				'name' 	=> 'Категория',
				'href' 	=> '/index.php?route=catalog'.$url
			];
			$data['breadcrubs'][] = [
				'name' 	=> 'Товар',
				'href' 	=> '/index.php?route=product'
			];


			$data['product'] = $product_model->getProduct($_GET['product_id']);
			$data['title'] = $data['product']['name'];




			Render::view('product.tpl', $data);
		}else{
			header('location: /index.php?route=catalog');
		}

	}
}