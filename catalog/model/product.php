<?php 
class ModelProduct{
	public function getProducts($filter = array()){

		$sql = 'SELECT * FROM product';

		if(isset($filter['start']) && isset($filter['limit'])){
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

	public function getProduct($product_id){
		$sql = 'SELECT * FROM product WHERE product_id = '. $product_id;
	
		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);
		return $result;
	}


}