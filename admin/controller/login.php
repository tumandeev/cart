<?php
class Login{
	public function index(){
		$login_model = Model::load('login');
		


		$data['entry_username'] = 'Логин';
		$data['entry_password'] = 'Пароль';
		$data['entry_button_name'] = 'Войти';
		$data['title'] = 'Авторизация';
		$data['entry_auth'] = ' Введите логин и пароль';

		$data['entry_error'] = [];
		$data['logout'] = true;
		$data['action'] = '/admin/index.php?route=login';
		$data['login'] = '';


		if(!empty($_GET['logout'])){
			setcookie('token', '', -1);	
		}elseif(!empty($_COOKIE['token'])){
			if($login_model->checkToken($_COOKIE['token'])){
				header('location: /admin/index.php?route=catalog');
			}
		}

		


		if(!empty($_POST)){
			$user = [];

			if(!empty($_POST['login'])){
				$user['login'] = $_POST['login'];
				$data['login'] = $user['login'];
			}else{
				$user['error'] = 'Укажите логин';
			}

			if(!empty($_POST['password'])){
				$user['password'] = md5($_POST['password']);
			}else{
				$user['error'] = 'Укажите пароль';
			}

			

			if(empty($user['error'])){
				$status = $login_model->checkUser($user);
				
				$data['entry_error'] = $status;
				if(!$status){
					$data['entry_error'] = 'Логин или пароль не верный';
				}else{
					header('location: /admin/index.php?route=catalog');
				}
			
			}else{
				$data['entry_error'] = $user['error'];
			}

		}


		Render::view('login.tpl',$data);
		

	}
}