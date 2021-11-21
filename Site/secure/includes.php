<?php
session_start();
error_reporting(~E_NOTICE && ~E_WARNING);
require("includes/html.php");
require("includes/info.php");
require("includes/db.php");
require("includes/user.php");
require("includes/text.php");
$html = new HTML();
require("includes/mail.php");
$db = new db();
$info = new info();
$user = new user();
$text = new text();
$mail = new mail();
if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}
if ($user->loggedin() && !$user->verified() && !str_contains($_SERVER['REQUEST_URI'], "email") && !str_contains($_SERVER['REQUEST_URI'], "sendkey") && !str_contains($_SERVER['REQUEST_URI'], "verifykey")) {
    Header("Location: /home/security/email.php");
    die();
}
if ($user->loggedin() && $user->verified() && !$user->checkguild() && !str_contains($_SERVER['REQUEST_URI'], "discord")) {
    //Header("Location: /home/security/discord.php");
    //die();
}

class security
{
    function sign($script)
    {
        error_reporting(E_ALL);
        $signature = "";
        $key = file_get_contents("C:\\xampp\\htdocs\\secure\\roblox.pem");
        openssl_sign($script, $signature, $key, OPENSSL_ALGO_SHA1);
        return "--rbxsig" . sprintf("%%%s%%%s", base64_encode($signature), $script);
    }
}

$security = new security();
if ($user->getlastreceive() < time() - 86400) {
    $db->req_sql("UPDATE users SET lastreceive = ? WHERE id = ?", [time(), $user->userid()]);
    $db->req_sql("UPDATE users SET namebux = ? WHERE id = ?", [$user->namebux() + 50, $user->userid()]);
}

$db->req_sql("UPDATE users SET lastonline = ? WHERE id = ?", [time(), $user->userid()]);

?>
