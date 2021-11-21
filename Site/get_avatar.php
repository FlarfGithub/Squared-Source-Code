<?php
if ($_GET['id'] == '1') {
    $asa = 'https://squared.cf/img/Squared.png';
} elseif ($_GET['id'] == '2') {
    $asa = 'https://squared.cf/img/philosophy.png';
} elseif ($_GET['id'] == '3') {
    $asa = 'https://squared.cf/img/janx.png';
} elseif ($_GET['id'] == '4') {
    //$asa = 'https://i.pinimg.com/originals/85/02/a6/8502a6e4b7f0774c0ee9a17a8920a616.png';
    //$asa = 'https://i.pinimg.com/originals/fd/cd/cc/fdcdcc8096b22360dc75f9338706e64b.png';
    $asa = 'https://squared.cf/img/Katrina.png';                            
} else {
    $asa = 'https://squared.cf/img/Default.png';
}
header('Location: '.$asa);
?>