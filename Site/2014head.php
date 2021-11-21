<link rel="icon" type="image/png" href="https://cdn.upload.systems/uploads/pDPrTMVK.png">
    
<?php 
require_once "updateinfo.php";
if ($_SESSION['darkenabled'] == 'yes') {
 echo '<link rel="stylesheet" href="/MainCSS2.css">';
} else {
    echo '<link rel="stylesheet" href="/MainCSS.css">';
}?>

<link rel="stylesheet" href="/LoginCSS.css">
<link rel="stylesheet" href="/CatalogCSS.css">
<link rel="stylesheet" href="/2014ItemCSS.css">
<?php
    function randnumber($v1, $v2) {
        return mt_rand($v1, $v2);
    }
    
?>