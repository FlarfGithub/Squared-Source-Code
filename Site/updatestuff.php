<?php
    require_once "dbonly.php";
    require_once "patch.php";
    $ep = new exploitPatch();
    session_start();
    $db2 = $db;
    if (isset($_SESSION['id'])) {
        $logged = true;
    
        $lid = $_SESSION['id'];
        $usrquery = $db2->query("SELECT * FROM users WHERE id = '$lid'");
        $usr = $usrquery->fetch();

        if (!$usr) {
            echo "An unexpected error occured.";
        }

        $uID = $usr['id'];

        $now = time();
        $gettc = $usr['gettc'];
        $Bucks = $usr['qian'];
        if ($now > $gettc) {
            $newgettc = $now + 86400;

            if ($usr['HasMembership'] == "yes") {
                $AddBits = 50;
            } else {
                $AddBits = 25;
            }

            $db2->query("UPDATE users SET qian = $Bucks + $AddBits WHERE id = $uID");
            $db2->query("UPDATE users SET gettc = $newgettc WHERE id = $uID");
        }

        // Online system here
        $_SESSION['time'] = time();
        $time = time();
        $query = $db2->query("UPDATE `users` SET `onlinetime` = '$time' WHERE `id`='$uID'");
        $query2 = $db2->query("UPDATE `users` SET `online` = '1' WHERE `id`='$uID'");

        if (time() - $_SESSION['time'] >= 60)
            $query = $db2->query("UPDATE `users` SET `onlinetime` = '$time' WHERE `id`='$uID'");
            $query2 = $db2->query("UPDATE `users` SET `online` = '1' WHERE `id`='$uID'");

            $t = time();

            $db2->query("UPDATE `users` SET `online` = '0' WHERE '$t'-onlinetime >60");
        }
        ?>