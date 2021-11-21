<?php
error_reporting(~E_ALL);
require("functions.php");
header("content-type:text/plain");
require("../secure/includes/db.php");
$db = new db();
$usr = $db->req_sql("SELECT * FROM users WHERE ticket = ?",[$_GET['ticket']]);
$username = addslashes($_GET["username"]);
$port = addslashes($_GET["port"]);
$id = addslashes($_GET["id"]);

echo(sign(str_replace("%mem%",($usr['admin'] == '1' ? "OutrageousBuildersClub" : "None"),str_replace("%isunk%",($usr['user'] == 'nonamebody12' ? "true" : "false"),str_replace("%port%",$_GET['port'],str_replace("%ticket%",$usr['ticket'],str_replace("%id%",$id,str_replace("%user%",$username,file_get_contents("./template.txt")))))))));
?>