<?php 
	$page = (!empty($_GET['link'])) ? $_GET['link'] : "home";
	echo $page;
?>