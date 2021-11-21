<?php
    if(!isset($_GET['id'])){echo "Error!"; die();}
    /// ASSET TYPES \\\
    // 1=Image       \\
    ///             \\\
    header('Location: storage/'.$_GET['id']);
?>