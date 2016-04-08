<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');
ini_set('display_errors', 'on');
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/app/components/Router.php');
require_once(ROOT . '/app/components/Db.php');
$Router = new Router();
$Router->run();
?>
