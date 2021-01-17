<?php 


class DB {

	private $settings = array();
	private static $_instance = null;

	private function __construct() {
	}
	protected function __clone() {
	}

	static public function getInstance() {

		if(is_null(self::$_instance)){
			self::$_instance = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET."", DB_LOGIN, DB_PASSWORD);
		}

		return self::$_instance;
	}


	public function import() {
	}
	public function get() {
	}
}
	
