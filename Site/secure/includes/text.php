<?php
class text
{
    function generateRandomString($length = 50) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function checkalphanumnotnull($str) {
        return preg_match("/^[A-Za-z0-9]+$/", $str);
    }
    function checkemail($str) {
        return filter_var($str, FILTER_VALIDATE_EMAIL);
    }
}
?>