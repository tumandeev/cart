<?php 
class Catalog{
	public function index(){
		$product_modul = Model::load('product');



		$data['title'] = 'Каталог';
		$data['edit_link'] = 'Редактировать товар';
		$data['entry_add'] = 'Создать товар';
		$data['entry_delete'] = 'Удалить товар';
		
		

		$data['products'] = [];

		$url = '';

//пагинация
		$total_product = $product_modul->getTotalProducts();
		$limit = 10;
		$pagination_link = ceil($total_product / $limit);


		$data['pagination_link'] = [];
		if($pagination_link > 1){
			for ($i=0; $i < $pagination_link; $i++) { 

				$data['pagination_link'][] = [
					'name' => (1 + $i),
					'href' => '/admin/index.php?route=catalog&page='.(1 + $i),
				];
			}
		}

		if(!empty($_GET['page'])){
			$page = $_GET['page'];
			$url .= '&page='.$page;
			if($page != $pagination_link){
				
				$data['pagination_link'][] = [
					'name' => 'Следующая',
					'href' => '/admin/index.php?route=catalog&page='.($page + 1),
				];

				$data['pagination_link'][] = [
					'name' => 'Последняя',
					'href' => '/admin/index.php?route=catalog&page='.$pagination_link,
				];
			}
			if($page > 1){
				$data['pagination_link'][] = array_unshift($data['pagination_link'],[
					'name' => 'Первая',
					'href' => '/admin/index.php?route=catalog&page=1',
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
					'href' => '/admin/index.php?route=catalog&page=2',
				];

				$data['pagination_link'][] = [
						'name' => 'Последняя',
						'href' => '/admin/index.php?route=catalog&page='.$pagination_link,
					];

			}

			$filter_product = [
				'start' => 0,
				'limit' => $limit,
			];
		}
// конец пагинации
		
		

		$data['add_link'] = '/admin/index.php?route=product'.$url;
		$products = $product_modul->getProducts($filter_product);

		foreach ($products as $product) {
			
			$data['products'][] = [
				'product_id' 	=>  $product['product_id'],
				'name' 			=> $product['name'],
				'description' 	=>  mb_strimwidth($product['description'], 0, 60, "..."),
				'href'			=> '/admin/index.php?route=product&product_id=' . $product['product_id'].$url,
				'delete_link'   => '/admin/index.php?route=product&delete_id=' . $product['product_id'].$url,
			];

		}


		// $data['header'] = Controller::load('header');

		Render::view('catalog.tpl', $data);
	}
}