<?php
    // fix this please because i suck at mysql stuff - phil
	//header('Location: register.php?err=4');
	//die();
	include "updateinfo.php";
	date_default_timezone_set('Europe/Warsaw');
	$content = $_POST['abouty'];
	/*$content = str_replace("'","&apos;",$content);
	$content = str_replace("\\","&#92;",$content);
	if(!$_SESSION['id'] == '1' || !$_SESSION['id'] == '4' || !$_SESSION['id'] == '2' || !$_SESSION['id'] == '3' || !$_SESSION['id'] == '30'){
	$content = str_replace("<","&lt;",$content);
	$content = str_replace(">","&gt;",$content);
	}*/
	// Check connection
	
	$wog = 0;
	$cog = 0;
	//$martin = mysqli_fetch_row($result);
	
	$in = 0;
	require "connect.php";
	session_start();
	//if(!isset($_SESSION['id'])){ header('Location: login.ashx'); }
	date_default_timezone_set('Europe/Warsaw');
	$conn = new mysqli($host, $db_user, $db_password);
	$conn->select_db($db_name);
	$sql = "SELECT id FROM feed";
	$result = $conn->query($sql);
	$in = $result->num_rows;
	$date = new DateTime("now", new DateTimeZone('Europe/Warsaw') );
	$sql = "SET about='".$content."' FROM users WHERE id='".$_SESSION['id']."';";
	$result = $conn->query($sql);
	$conn->close();
	//header('Location: /settings.aspx');
	echo 'success';
	echo $_SESSION['about'];
	die();
?>