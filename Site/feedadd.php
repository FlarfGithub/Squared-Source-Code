<?php
	//header('Location: register.php?err=4');
	//die();
	include "updateinfo.php";
	date_default_timezone_set('Europe/Warsaw');
	$content = $_POST['txtStatusMessage'];
	$content = str_replace("'","&apos;",$content);
	$content = str_replace("\\","&#92;",$content);
	if(!$_SESSION['id'] == '1' || !$_SESSION['id'] == '4' || !$_SESSION['id'] == '2' || !$_SESSION['id'] == '3' || !$_SESSION['id'] == '30'){
	$content = str_replace("<","&lt;",$content);
	$content = str_replace(">","&gt;",$content);
	}
	// Check connection
	require "connect.php";
	session_start();
	if(!isset($_SESSION['user'])){ header('Location: login'); }
	
	date_default_timezone_set('Europe/Warsaw');
	
	$wog = 0;
	$cog = 0;
	$conn = new mysqli($host, $db_user, $db_password);
	$conn->select_db($db_name);
	$sql = "SELECT * FROM feed WHERE madeby='".$_SESSION['id']."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$wog=$row['date'];
		}
	}
	//$martin = mysqli_fetch_row($result);
	$cog = strtotime(date("Y-m-d H:i:s"));
	if(($cog-strtotime($wog)) < 60 && !($_SESSION['id'] == 1 || $_SESSION['id'] == 2 || $_SESSION['id'] == 3 || $_SESSION['id'] == 30 || $_SESSION['id'] == 6 || $_SESSION['id'] == 4)){
		header('Location: index');
		die();
	}
	
	if(strlen($content)>204 && $_SESSION['id'] != 3){header('Location: index');		die();}
	
	$conn->close();
	
	$in = 0;
	$conn = new mysqli($host, $db_user, $db_password);
	$conn->select_db($db_name);
	$sql = "SELECT id FROM feed";
	$result = $conn->query($sql);
	$in = $result->num_rows;
	$date = new DateTime("now", new DateTimeZone('Europe/Warsaw') );
	$sql = "INSERT INTO `feed` (`id`, `user`, `content`, `date`, `madeby`) VALUES (".($in+1).", '".$_SESSION['user']."', '".$content."', '". $date->format('Y-m-d H:i:s')."','".$_SESSION['id']."');";
	$result = $conn->query($sql);
	$conn->close();
	header('Location: Default.aspx');
	echo 'success';
	die();
?>