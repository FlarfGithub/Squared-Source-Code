<?php
if(!empty($_GET['id']))
{
    $id = $_GET['id'];

    if (file_exists("assets/" . $id)) {
        $file = "http://www.exoro.ml/asset/assets/" . $id;

        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"". basename($id) ."\"");

        readfile($file);
        exit();
    } else {
        header('Location: https://assetdelivery.roblox.com/v1/asset/?id=' . $id);
        exit;
    }
}