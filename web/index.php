<?php

use wa\App;

define('WA_START_TIME', microtime(true));
ini_set('display_errors', 'On');
error_reporting(E_ALL);
date_default_timezone_set('PRC');
const WA_WEB_PATH = __DIR__;
define('WA_ROOT_PATH', dirname(__DIR__));
require WA_ROOT_PATH . '/vendor/autoload.php';
(new App())->start();
