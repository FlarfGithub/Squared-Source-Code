<?php
$userid = addslashes($_GET["userId"]);
$mode = addslashes($_GET["mode"]);

$getguesthatid = rand(1, 3);
if($getguesthatid == "1"){
    $gethatid = "417457461";
}
if($getguesthatid == "2"){
    $gethatid = "451221329";
}
if($getguesthatid == "3"){
    $gethatid = "451220849";
}

if($mode == "guest"){
    echo"http://www.exoro.ml/Asset/?id=9043093;http://www.exoro.ml/Asset/?id=26;http://www.exoro.ml/Asset/BodyColors.ashx?userId=0;http://www.exoro.ml/Asset/?id=27;http://www.exoro.ml/Asset/?id=6;http://www.exoro.ml/Asset/?id=7;http://www.exoro.ml/Asset/?id=8;http://www.exoro.ml/Asset/?id=9;http://www.exoro.ml/Asset/?id=10;http://www.exoro.ml/Asset/?id=$gethatid;";
}else{
    if($userid != ""){
//echo"http://www.exoro.ml/Asset/?id=48474313;http://www.exoro.ml/Asset/?id=10907551;http://www.exoro.ml/Asset/?id=5207484643;http://www.exoro.ml/Asset/?id=6168685211;http://www.exoro.ml/Asset/BodyColors.ashx?userId=0;";
        //echo"http://www.exoro.ml/Asset/?id=9043093;http://www.exoro.ml/Asset/?id=164207580;http://www.exoro.ml/Asset/BodyColors.ashx?userId=0;http://www.exoro.ml/Asset/?id=1028715;http://www.exoro.ml/Asset/?id=2219393;http://www.exoro.ml/Asset/?id=2219142;";
        echo"http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/BodyColors.ashx?userId=0;http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/?id=0;";
    }else if($userid == "1"){
    echo"http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/BodyColors.ashx?userId=0;http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/?id=0;http://www.exoro.ml/Asset/?id=0;";
    }else{
        echo'<pre style="word-wrap: break-word; white-space: pre-wrap;">{"message":"OK"}</pre>';
    }}?>