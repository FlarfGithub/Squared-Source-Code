<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/

//We log to the DataBase
$conn = mysqli_connect("54.38.50.59","www7874_exoro","dYuX9eN7vhG6B4JRAagi","www7874_exoro");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}


//Username of the Administrator
$admin='Squared';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
include('init.php');
?>