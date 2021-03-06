<?php 
class ModelProduct{
	public function getProduct($product_id){
		$sql = 'SELECT * FROM product WHERE product_id = '. $product_id;
	
		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getProducts($filter = array()){

		$sql = 'SELECT * FROM product';

		if(isset($filter['start']) && isset($filter['limit'])){
			if($filter['start'] <= 0){
				$filter['start'] = 0;
			}

			$sql .= ' LIMIT '.$filter['start'];
			$sql .= ', '.$filter['limit'];

		}
		$result = DB::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getTotalProducts(){
		$sql = 'SELECT count(*) as total FROM product';

		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);
		return $result['total'];

	}

	public function editProduct($product = array()){
		if(isset($product)){

			$product_id  = $product['product_id'];
			$name		 = $product['name'];
			$description = $product['description'];

			$this->deleteProduct($product_id, false);
			
			DB::getInstance()
			->prepare("INSERT INTO product (product_id, name, description) VALUES (:product_id, :name, :description)")
			->execute(['product_id' => $product_id, 'name' => $name, 'description' => $description]);


			header('location: /admin/index.php?route=catalog');
		}
	}

	public function deleteProduct($product_id, $redirect = true){

		DB::getInstance()
			->prepare("DELETE FROM product WHERE product_id = :product_id")
			->execute(['product_id' => $product_id]);

			if($redirect){
				return false;
			}else{
				return true;
			}
	}

	public function addProduct($product = array()){
		if(isset($product)){

			$name		 = $product['name'];
			$description =  nl2br($product['description']);

			DB::getInstance()
			->prepare("INSERT INTO product (name, description) VALUES (:name, :description)")
			->execute(['name' => $name, 'description' => $description]);

			return true;
		}
	}

	public function validate($product_post = array()){
		$error = [];
		if(!empty($product_post['name'])){
			if(iconv_strlen($product_post['name']) <= 2){
				$error[] = 'Длинна названия должна быть не менее 3х символов';
			}
		}else{
			$error[] = 'Укажите название товара';
		}


		if(!empty($product_post['description'])){
			if(iconv_strlen($product_post['description']) <= 2){
				$error[] = 'Длинна описания должна быть не менее 3х символов';
			}
		}else{
			$error[] = 'Укажите описание товара';
		}

		if(!empty($error)){
			return $error;
		}else{
			return false;
		}

	}
}