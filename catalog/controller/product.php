<?php
class Product{
	public function index(){
		$product_model = Model::load('product');
		$data['entry_prev'] = 'Назад';
		$data['prev_link'] = '/index.php?route=catalog';

		


		if(isset($_GET['product_id'])){

			$data['breadcrubs'][] = [
				'name' 	=> 'Главная',
				'href' 	=> '/index.php?route=catalog'
			];
			$data['breadcrubs'][] = [
				'name' 	=> 'Категори',
				'href' 	=> '/index.php?route=catalog'
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