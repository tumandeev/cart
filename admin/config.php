<?php
// admin
define('DIR_CORE', '../core');

define('DB_HOST', 'localhost');
define('DB_NAME', 'mini_store');
define('DB_LOGIN', 'mini_store_login');
define('DB_PASSWORD', 'mini_store_password');
define('DB_CHARSET', 'utf8');

define('VIEW_PATH', '../admin/view');

include(DIR_CORE.'/db.php');
include(DIR_CORE.'/smarty/libs/Smarty.class.php');
include(DIR_CORE.'/render.php');



