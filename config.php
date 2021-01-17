<?php
// catalog
define('DIR_CORE', './core');

define('DB_HOST', 'localhost');
define('DB_NAME', 'mini_store');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '123123');
define('DB_CHARSET', 'utf8');

define('VIEW_PATH', './catalog/view');
define('DIR_MVC', './catalog');

include(DIR_CORE.'/db.php');
include(DIR_CORE.'/smarty/libs/Smarty.class.php');
include(DIR_CORE.'/render.php');

