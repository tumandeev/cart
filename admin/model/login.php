<?php 
class ModelLogin{
	public function checkUser($user = array()){

		$error = [];
		$sql = 'SELECT * FROM users WHERE ';
		$sql .= 'login="'.$user['login'].'"';
		$result = DB::getInstance()->query($sql)->fetch(PDO::FETCH_ASSOC);




		if(!empty($result) && !empty($user['password'])  && !empty($result['password'])){
			if($user['password'] == $result['password'] ){
				$this->addSession($result);
			}else{
				$error = 'Логин или пароль не верный';
			}
		}else{
			$error = 'Логин или пароль не верный';
			
		}

		if(!empty($error)){
			return $error;
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


			header('location: /admin/index.php?route=catalog');
		}
	}


}