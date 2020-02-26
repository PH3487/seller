<?php
	include 'sql/condb.php';
	include 'sql/lib/pushUrls.php';
	$page = (!empty($_GET['link'])) ? $_GET['link'] : "home";
	$path = "page/";
	
	// if (!isset($_SESSION['user'])) {
	// 	if ($page !== "login" || $page !== "register") {
	// 		$inc = "login";
	// 	}else{
	// 		$inc = $page;
	// 	}
	// }else{
	// 	if($page == "login" || $page == "register"){
	// 		$inc = "home";
	// 	}else{
	// 		$inc = "page";
	// 	}
	// }
	$page .= '.php';
	if (!file_exists($path.$page)) {
		$last = $path."home";
	}else{
		$last = $path.$page;
	}

	$pushUrls = new pushUrls;
	// $pushUrls->pushGet("id","1");
	// $pushUrls->pushGet("user","1");
	// $pushUrls->pushGet("pass","1");

	$fullUrl = "$last".$pushUrls->lastUrls();
	include $last;
?>