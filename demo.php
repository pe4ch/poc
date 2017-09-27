<?php
	$url = '';
	$url = $_GET['url'];
	$cookie = $_GET['cookie']
	header('Set-Cookie :'.$cookie);
	header('Location :'.$url);
?>