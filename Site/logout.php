<?php

	session_start();
	require_once "connect.php";
	session_unset();
	
	header('Location: /login');

?>