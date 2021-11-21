<?php
header('Content-Type:text/plain; charset=UTF-8');

$host = "localhost";
$dbname = "main_rev";
$dbuser = "root";
$dbpass = "tHBRTrdjivbgd+=-";

try {
    $db = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $dbuser, $dbpass, array(
    PDO::ATTR_PERSISTENT => true
));
// set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Internal Error: " . $e->getMessage();
    }
    
    if(empty($_POST['auth']) || empty($_POST['hwid'])){
    exit("Error 1");
    }else{
    $plrq = $db->prepare("SELECT * FROM users WHERE jkey = :ticket AND HWID = :hw");
    $plrq->execute([':ticket' => $_POST['auth'], ':hw' => $_POST['hwid']]);
    $plr = $plrq->fetch();

    if(!$plr){
    exit("Error 2");
    }else{
    exit("200");
    }
    }
?>