<?php 
class ModelLogin{
	public function checkUser($user = array()){

		$error = [];
		$sql = 'SELECT * FROM users WHERE ';
		$sql .= 'login="'.$user['login'].'"';
		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);




		if(!empty($result) && !empty($user['password'])  && !empty($result['password'])){
			if($user['password'] == $result['password'] ){
			 	$status = $this->addSession($result);
			}else{
				$status = false;
			}
		}else{
			$status = false;
			
		}

		if(!empty($status)){
			return $status;
		}

		
	}

	public function checkToken($token){

		$sql = 'SELECT * FROM session ORDER BY id DESC';
		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);
		if($result['token'] == $token){
			return true;
		}else{
			return false;
		}
	}




	public function addSession($user){
		if(isset($user)){
			$token = md5(uniqid());
			$user_id = $user['user_id'];
			
			setcookie("token", $token, time()+3600);  
			setcookie("user_id", $user_id, time()+3600);



			DB::getInstance()
			->prepare("INSERT INTO session (user_id, token) VALUES (:user_id, :token)")
			->execute(['user_id' => $user_id, 'token' => $token]);

			return true;
			// header('location: /admin/index.php?route=catalog');
		}
	}


}