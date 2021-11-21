<?php
	//header('Location: register.php?err=4');
	//die();
	require "connect.php";
    $conn2 = new mysqli($host, $db_user, $db_password);
	$conn2->select_db($db_name);
	date_default_timezone_set('Europe/Warsaw');
	$username = $_POST['user'];
	$email = htmlspecialchars($_POST['email']);
	$pass = $_POST['pass'];
	$cpass = htmlspecialchars($_POST['cpass']);
	$asda = "SELECT code FROM invites WHERE code='" . $_POST['invite'] . "' AND used='no'";
	$rs_check = $conn2->query($asda); 
					if (!($rs_check->num_rows > 0)) {
                        header('Location: register.aspx?err=6');
		                die();
                    }
    $dsakhj = "DELETE FROM invites WHERE code='" . $_POST['invite']. "'";
	if(strlen($username)<=20){
	if(strlen($username)>=3){
		if($pass == $cpass){
			if(strlen($pass) > 3){
				if(!preg_match('/[^a-zA-Z0-9_]/', $username)){
					// Check connection
					//require "connect.php";
					session_start();
                    $conn = new mysqli($host, $db_user, $db_password);
	                $conn->select_db($db_name);
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}
					$sql = "SELECT id FROM users WHERE user='".$username."'";

					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						header('Location: register.aspx?err=1');
						die();
					}
					$conn->close();
					$in = 0;
					$conn = new mysqli($host, $db_user, $db_password);
					$conn->select_db($db_name);
					// Check connection
					if ($conn2->connect_error) {
					  die("Connection failed: " . $conn2->connect_error);
					}
					$sql = "SELECT id FROM users";

					$result = $conn->query($sql);
					$in = $result->num_rows;
					$conn->close();
					
					$conn = new mysqli($host, $db_user, $db_password);
					$conn->select_db($db_name);
					// Check connection
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn2->connect_error);
					}
					$date = new DateTime("now", new DateTimeZone('Europe/Warsaw') );
					$sql = "INSERT INTO `users` (`id`, `user`, `password`, `email`, `created_at`, `ticket`) VALUES (".($in+1).", '".$username."', '".hash_pbkdf2('sha512',$pass,'poopshit',6969)."', '".$email."', '". $date->format('Y-m-d H:i:s')."','".md5("warm-".($in+1))."');";
					$result = $conn->query($sql);
					$conn2->query($dsakhj);
					$conn->close();
					header('Location: login.aspx?success=1');
					die();
				}else{
					header('Location: register.aspx?err=1');
				}
			}else{
				header('Location: register.aspx?err=2');
			}
		}else{
			header('Location: register.aspx?err=2');
		}
		}else{
			header('Location: register.aspx?err=1');
		}
	}else{
		header('Location: register.aspx?err=1');
	}
?>