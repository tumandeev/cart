<?php 
class ModelProduct{
	public function getProducts(){

		$sql = 'SELECT * FROM product';
	
		$result = DB::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		return $result;

	}

	public function getProduct($product_id){
		$sql = 'SELECT * FROM product WHERE product_id = '. $product_id;
	
		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);
		return $result;
	}


}