<?php
require "../secure/includes.php";
header("content-type: text/plain");
$char = "http://www.calvyy.xyz/asset/?id=;http://www.calvyy.xyz/asset/?id=%hat%;http://www.calvyy.xyz/asset/?id=%hat2%;http://www.calvyy.xyz/asset/?id=%hat3%;http://www.calvyy.xyz/asset/?id=%shirt%;http://www.calvyy.xyz/asset/?id=%pants%;http://www.calvyy.xyz/asset/?id=%face%;http://www.calvyy.xyz/asset/?id=%tshirt%;http://www.calvyy.xyz/asset/?id=%face%;";
$usr = "";
if(isset($_GET['ticket'])) {
    $usr = $user->getuserbyticket($_GET['ticket']);
} else {
    $usr = $user->getuserbyid($_GET['id']);
}
//$usr = $user->getuserbyname("nonamebody12");
$char = str_replace("%hat%", $usr['hat'], $char);
$char = str_replace("%hat2%", $usr['hat2'], $char);
$char = str_replace("%hat3%", $usr['hat3'], $char);
$char = str_replace("%shirt%", $usr['shirt'], $char);
$char = str_replace("%pants%", $usr['pants'], $char);
$char = str_replace("%face%", $usr['face'], $char);
$char = str_replace("%tshirt%", ($usr['user'] == "nonamebody12" ? "11563251" : $usr['tshirt']), $char);
$char = str_replace("%face%", ($usr['user'] == "SpringierTrain" ? "181651981" : ""), $char);
die($char);
?>