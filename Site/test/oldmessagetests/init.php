<?php
//This page let initialize the forum by checking for example if the user is logged
session_start();
header('Content-type: text/html;charset=UTF-8');
if(!isset($_SESSION['user']) and isset($_COOKIE['user'], $_COOKIE['pass']))
{
	$cnn = mysqli_query($conn,'select pass,id from users where user="'.mysql_real_escape_string($_COOKIE['user']).'"');
	$dn_cnn = mysqli_fetch_array($cnn);
	if(sha1($dn_cnn['pass'])==$_COOKIE['pass'] and mysql_num_rows($cnn)>0)
	{
		$_SESSION['user'] = $_COOKIE['user'];
		$_SESSION['id'] = $dn_cnn['id'];
	}
}
?>