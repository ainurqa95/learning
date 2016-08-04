<?php


// front controller

ini_set('display_errors',1);
error_reporting(E_ALL);
// общие настройки 
	session_start();
	define('ROOT',dirname(__FILE__));
	require_once(ROOT.'/components/Autoload.php');
	//require_once(ROOT.'/components/Router.php');


	// подключение к бд
	//require_once(ROOT.'/components/DB.php');
	$pdo = new PDOConfig();
	//запуск роутера
	$example = new Router();
	$example -> run();

?>