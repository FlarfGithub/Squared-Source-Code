<?php
	//header('Location: register.php?err=4');
	//die();
	include "updateinfo.php";
	date_default_timezone_set('America/Detroit');
	$content = $_POST['txtStatusMessage'];
	$content = str_replace("'","&apos;",$content);
	$content = str_replace("\\","&#92;",$content);
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
	
	$in = 0;
	$conn = new mysqli($host, $db_user, $db_password);
	$conn->select_db($db_name);
	$sql = "SELECT id FROM secretchat2";
	$result = $conn->query($sql);
	$in = $result->num_rows;
	$date = new DateTime("now", new DateTimeZone('America/Detroit') );
	$sql = "INSERT INTO `secretchat2` (`id`, `user`, `content`, `date`, `madeby`) VALUES (".($in+1).", '".$_SESSION['user']."', '".$content."', '". $date->format('Y-m-d H:i:s')."','".$_SESSION['id']."');";
	$result = $conn->query($sql);
	$conn->close();
	header('Location: Default.aspx?feedid=23');
	echo 'success';
	die();
?>