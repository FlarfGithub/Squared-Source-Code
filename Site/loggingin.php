<?php
	
	session_start();
	
	if ((!isset($_POST['login'])))
	{
	    header('Location: login.aspx?err=4');
		exit();
	}
	if ((!isset($_POST['pass'])))
	{
		header('Location: login.aspx?err=5');
		exit();
	}

	require_once "connect.php";
	if(preg_match('/[^a-zA-Z0-9_]/', $_POST['login'])){$_SESSION['error'] = 'stupid';header('Location: login.aspx');die();}
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		header('Location: login.aspx?err=6');
		exit();
	}
	else
	{
		echo "cokku";
		$login = $_POST['login'];
		$haslo = hash_pbkdf2('sha512',$_POST['pass'],'poopshit',6969);
		echo "<br/>".$haslo."<br/>";
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM users WHERE user='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			echo "kokokku";
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				echo $haslo . "<br/>";
				echo $wiersz['password'] . "<br/>";
				
				if ($haslo == $wiersz['password'])
				{
					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['user'] = $wiersz['user'];
					$_SESSION['email'] = $wiersz['email'];
					$_SESSION['gametoken'] = $wiersz['gametoken'];
					unset($_SESSION['error']);
					$rezultat->free_result();
					header('Location: login.aspx');
					die();
				}else{
					header('Location: login.aspx?err=2');
					die();
				}
				
			} else {
				
				header('Location: login.aspx?err=3');
				die();
			}
			
		}
		
		$polaczenie->close();
	}
	//if(isset($_POST['custId'])){header('Location: '.$_POST['custId']); exit();}
	//$_SESSION['error']='how';
	//header('Location: index.php');
	
?>