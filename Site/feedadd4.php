<?php
	//header('Location: register.php?err=4');
	//die();
	function generateRandomString($length = 30) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
	include "updateinfo.php";
	if ($_SESSION['id'] == '1' || $_SESSION['user'] == 'philosophy' || $_SESSION['user'] == 'sudoapt') {
	date_default_timezone_set('America/Chicago');
	// Check connection
	require "connect.php";
	session_start();
	if(!isset($_SESSION['user'])){ header('Location: login'); }
	
	date_default_timezone_set('America/Chicago');
	
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
	$sql = "SELECT id FROM invites";
	$result = $conn->query($sql);
	$in = $result->num_rows;
	$date = new DateTime("now", new DateTimeZone('America/Chicago') );
	$content = 'no';
	$code = generateRandomString();
	$sql = "INSERT INTO `invites` (`id`, `code`, `used`, `inviter`, `creationdate`) VALUES (".($in+1).", '".$code."', '".$content."', '".$_SESSION['id']."','". $date->format('Y-m-d H:i:s')."');";
	$result = $conn->query($sql);
	$conn->close();
	header('Location: Default.aspx?feedid=128');
	echo 'success';
	die();
	} else {
	    header('Location: 403');
	}
?>