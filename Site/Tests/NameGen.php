<?php 
    function randystring($lengthy = 10) {
        return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($lengthy/strlen($x)) )),1,$lengthy);
    }
    $assy = randystring(10);
    ?>
<br>
<br>
<center><h2><?php echo $assy ?></h2></center>