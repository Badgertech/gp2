<?php
	$host = "localhost";
	$user = "test";
	$password =  "test";
	$database =  "recipe";

	$dbc = mysqli_connect($host, $user, $password, $database) or die('<h2 class="error">Error: unable to connect: '.myslqi_error().'</h2>');

	
?>