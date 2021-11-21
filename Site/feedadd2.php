<?php
	//header('Location: register.php?err=4');
	//die();
	include "updateinfo.php";
	date_default_timezone_set('Europe/Warsaw');
	$content = $_POST['txtStatusMessage'];
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
	if(($cog-strtotime($wog)) < 60){
	    if (!($_SESSION['user'] == 'Squared')) {
		    header('Location: feedlist');
		    die();
}
	}
	
	if(strlen($content)>250){header('Location: feedlist');		die();}
	
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
	header('Location: feedlist.aspx');
	echo 'success';
	die();
?>