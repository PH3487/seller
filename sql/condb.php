<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	$host = ($_SERVER['HTTP_HOST'] != 'localhost' && $_SERVER['HTTP_HOST'] != '127.0.0.1') ? "online" : "localhost";


	if($host=="localhost" || $host=="127.0.0.1"){
		define("HOST",($host=="localhost") ? "localhost" : "127.0.0.1");
		define('USER', 'root');
		define('PASSWORD', '');
		define('DATABASE', 'hardsign');
		define("DOMAIN", HOST."/hardsign/");
		// if($host=="localhost"){
			// define('HOST', 'localhost');
		// }elseif($host=="127.0.0.1"){
			// define('HOST', '127.0.0.1');
		// }
	}elseif($host=="online"){
		define('HOST', 'localhost');
		define('USER', '');
		define('PASSWORD', '');
		define('DATABASE', 'hardsign');
		// define("DOMAIN", "findthailove.com/");
	}
	define('CHARSET', 'utf8');
	date_default_timezone_set("Asia/Bangkok");
	function DB(){
		static $instance;
		if ($instance === null) {
			$opt = array(
	            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	            PDO::ATTR_EMULATE_PREPARES => FALSE,
	        );
	        $dsn = 'mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=' . CHARSET;
       		$instance = new PDO($dsn, USER, PASSWORD, $opt);
		}
		return $instance;
	}
?>