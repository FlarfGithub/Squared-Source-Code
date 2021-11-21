<?php
    require_once "../Translations/Russian.php";
    $russian = new Russian();
    $testy = $russian->translate('Heller');
?>
<center><?php echo $testy ?></center>