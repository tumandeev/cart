<?php
class ModelCheckToken{

	public function checkToken($token){

		$sql = 'SELECT * FROM session ORDER BY id DESC';
		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);
		if($result['token'] == $token){
			return true;
		}else{
			return false;
		}
	}

}