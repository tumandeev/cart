<?php
class Catalog{
	public function index(){
		$product_modul = Model::load('product');

		$data['link_product'] = 'Подробнее';
		$data['title'] = 'Каталог';




//пагинация
		$total_product = $product_modul->getTotalProducts();
		$limit = 10;
		$pagination_link = ceil($total_product / $limit);


		$data['pagination_link'] = [];
		if($pagination_link > 1){
			for ($i=0; $i < $pagination_link; $i++) { 

				$data['pagination_link'][] = [
					'name' => (1 + $i),
					'href' => '/index.php?route=catalog&page='.(1 + $i),
				];
			}
		}

		if(!empty($_GET['page'])){
			$page = $_GET['page'];

			if($page != $pagination_link){
				
				$data['pagination_link'][] = [
					'name' => 'Следующая',
					'href' => '/index.php?route=catalog&page='.($page + 1),
				];

				$data['pagination_link'][] = [
					'name' => 'Последняя',
					'href' => '/index.php?route=catalog&page='.$pagination_link,
				];
			}
			if($page > 1){
				$data['pagination_link'][] = array_unshift($data['pagination_link'],[
					'name' => 'Первая',
					'href' => '/index.php?route=catalog&page=1',
				]);
			}

			
			$filter_product = [
				'start' => ($page - 1) * $limit,
				'limit' => $limit,
			];

		}else{
			if($pagination_link > 1){
				$data['pagination_link'][] = [
					'name' => 'Следующая',
					'href' => '/index.php?route=catalog&page=2',
				];

				$data['pagination_link'][] = [
						'name' => 'Последняя',
						'href' => '/index.php?route=catalog&page='.$pagination_link,
					];

			}
			$filter_product = [
				'start' => 0,
				'limit' => $limit,
			];
		}
// конец пагинации


		$products = $product_modul->getProducts($filter_product);
		$data['products'] = [];
		foreach ($products as $product) {
			$data['products'][] = [
				'name' => mb_strimwidth($product['name'], 0, 40, "..."),
				'description' => mb_strimwidth($product['description'], 0, 60, "..."),
				'href' => '/index.php?route=product&product_id='.$product['product_id'],
			];
		}
		

		
		Render::view('catalog.tpl',$data);
	}
}