<?php
	session_start();
	include_once "connect.php";
	if(isset($_SESSION['id'])){
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
		if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
			$login = $_SESSION['user'];
			//if ($_SESSION['user'] == 'CircleLoop') {
			//    header("Location: 403");
			//}
			if ($rezultat = @$polaczenie->query(
			sprintf("SELECT * FROM users WHERE user='%s'",
			mysqli_real_escape_string($polaczenie,$login))))
			{
					
				$ilu_userow = $rezultat->num_rows;
				if($ilu_userow>0)
				{
					$wiersz = $rezultat->fetch_assoc();
					
					//	$_SESSION['zalogowany'] = true;
					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['user'] = $wiersz['user'];
					$_SESSION['qian'] = $wiersz['qian'];
					$_SESSION['about'] = $wiersz['about'];
					$_SESSION['created_at'] = $wiersz['created_at'];
					$_SESSION['email'] = $wiersz['email'];
					$_SESSION['ticket'] = $wiersz['ticket'];
					$_SESSION['banned'] = $wiersz['banned'];
					$_SESSION['darkenabled'] = $wiersz['darkenabled'];
					$_SESSION['lang'] = $wiersz['lang'];
					unset($_SESSION['blad']);
					$rezultat->free_result();
					
				} else {
					
					
				}
				
			}
			
			$polaczenie->close();
		}
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if ($_SESSION['banned'] == 'yes') {
if (strpos($url,'banned') !== false) {
    
} else {
    header('Location: banned');
}
}
		/*if((count($_SESSION['banned'] == 'yes') && ($_SERVER['PHP_SELF'] != "banned.php"))) {
			header('Location: banned.php');
		}
	if ($_SESSION['banned'] == 'yes' && ($_SERVER['PHP_SELF'] != "banned")) {
		    header('Location: banned');
		}*/
	}
?>