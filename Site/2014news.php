<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php include_once "2014navbar.php"; ?>
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

         <div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" class="" style="width:1020px">
<div id="ctl00_cphRoblox_ContainerPanel">
<div id="BrowseContainer" style="text-align: center">
<div style="width: 876px; height: 28px; margin-bottom: 10px; clear: both;">
<form method="post">
<div style="width: 876px; height: 28px; margin-bottom: 10px; clear: both;">
<span class="form-label" style="margin-right: 30px;">Search: </span>
<span>
<span class="SearchBox">
<input name="ctl00$cphRoblox$SearchTextBox" type="text" maxlength="100" id="ctl00_cphRoblox_SearchTextBox" style="width: 400px;"></span>
<span class="SearchButton">
<input type="submit" name="ctl00$cphRoblox$SearchButton" value="Search Users" id="ctl00_cphRoblox_SearchButton" class="translate"></span>
<input type="text" style="visibility: hidden; width:1px; position: absolute;">
</span>
</div>
</form>

<div style="float:center;min-height:600px">
<table class="table" cellspacing="0" cellpadding="0" border="0" id="_ctl0_cphRoblox_gvPlacesBrowsed">
<tbody>
<tr class="table-header">
<th class="Avatar">Poster Avatar</th>
<th class="Member" style="/*width:126px;*/">Posted By</th>
<th class="Description" style="width:435px;">Post Name</th>
<th class="Date" style="width:340px;border-right: 1px solid #cccccc">Post Description</th>
</tr>
<?php
                    if(!isset($_GET['page'])) {
                        $page = 1;
                    }else{
                        $page = $_GET['page'];
                    }

                    if(!isset($_GET['page'])) {
                        $pageor = 1;
                    }else{
                        $pageor = $_GET['page'];
                    }

                    if(!isset($_GET['search'])) {
                        $search = "";
                    }else{
                        $search = $_GET['search'];
                    }

            $resultsperpage = 15;

            $sql = "SELECT count(*) FROM `news` WHERE name LIKE '%$search%'";
            $result = $db->prepare($sql);
            $result->execute();
            $usercount = $result->fetchColumn();

            $numberofpages = ceil($usercount/$resultsperpage);

            if($page < 1) $page = 1;
            $thispagefirstresult = ($page-1)*$resultsperpage;

        $lol = $db->prepare("SELECT * FROM news WHERE name LIKE '%$search%' ORDER BY id DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
        $lol->execute();
        if($usercount < 1) {
            echo '
    <div class="alert alert-danger" role="alert">
    Nothing found.
    </div>';
        }
        while ($row = $lol->fetch())
        {
                            
        $username = $row['poster'];
                            if ($row['poster'] == 'Squared') {
                                $asa = 'https://cdn.upload.systems/uploads/YvgXSiKt.png';
                            } elseif ($row['poster'] == 'philosophy') {
                                $asa = 'https://cdn.upload.systems/uploads/YtitGcTj.png';
                            } else {
                                $asa = 'https://cdn.upload.systems/uploads/cvLoLw4Y.png';
                            }
echo '
<tr class="table-item">
<td style="border-left: 1px solid #cccccc"><a class="roblox-avatar-image" data-user-id="' . $row['madeby'] . '" data-image-size="custom" data-image-size-x="64" data-image-size-y="64" href="/user?id=' . $row['madeby'] . '"><div style="position: relative;"><a href="/user?id=' . $row['madeby'] . '"><img title="' . $username . '" alt="' . $username . '" border="0" height="64" width="64" src="' . $asa . '"></a></td>
<td><a href="/user?id=' . $row['madeby'] . '">' . $username . '</a></td>
<td><a href="/vnews?id='. $row['id'] . '">' . $row['name'] . '</a></td>
<td style="border-right: 1px solid #cccccc">' . $row['content'] . '</td>
</tr>';
}
echo '<div style="border-bottom: 1px solid #cccccc"></div>';
echo'<tr class="GridPager">
            <td colspan="4"><table border="0">
                    <tbody><tr>
                        ';
        if($page <= $page) {
            $pagefix = $page + 9;
        }
        if($pagefix > $numberofpages) {
            $pagefix = $numberofpages;
        }
        $page2 = $page - 1;
        $page3 = $page - 2;
        $page4 = $page - 3;
        $page5 = $page - 4;
        $page6 = $page - 5;
        // For ... thing
        //if($page == 7) { $pagetest3 = $page - 6; }
        //if($page == 8) { $pagetest3 = $page - 7; }
        //if($page == 9) { $pagetest3 = $page - 8; }
        //if($page == 10) { $pagetest3 = $page - 9; }
        //if($page == 11 || $page > 11) { $pagetest3 = $page - 10; }

        if($page > 7 || $page == 7) echo"<td><b><a href='/news?page=1&search=" . $search . "'>... </a></b></td>";

        if($page == 1 OR $page == 2 OR $page == 3 OR $page == 4 OR $page == 5) {
        }else{
            echo"<td>
                            <b><a href='/news?page=".$page6."&search=" . $search . "'>".$page6." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$page5."&search=" . $search . "'>".$page5." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$page4."&search=" . $search . "'>".$page4." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$page3."&search=" . $search . "'>".$page3." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$page2."&search=" . $search . "'>".$page2." </a></b>
                        </td>
                    ";
        }

        $pager = $page - 1;
        $pager1 = $page - 2;
        $pager2 = $page - 3;
        $pager3 = $page - 4;
        if($page == 5) {
            echo"<td>
                            <b><a href='/news?page=".$pager3."&search=" . $search . "'>".$pager3." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$pager2."&search=" . $search . "'>".$pager2." </a></b>
                        </td>
                    <td>
                          <b><a href='/news?page=".$pager1."&search=" . $search . "'>".$pager1." </a></b>
                        </td>
                    <td>
                           <b> <a href='/news?page=".$pager."&search=" . $search . "'>".$pager." </a></b>
                        </td>
                    ";
        }else{
        }

        $pagej = $page - 1;
        $pagej1 = $page - 2;
        $pagej2 = $page - 3;
        if($page == 4) {
            echo"<td>
                            <b><a href='/news?page=".$pagej2."&search=" . $search . "'>".$pagej2." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$pagej1."&search=" . $search . "'>".$pagej1." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$pagej."&search=" . $search . "'>".$pagej." </a></b>
                        </td>
                    ";
        }else{
        }

        $pagey = $page - 1;
        $pagey1 = $page - 2;
        if($page == 3) {
            echo"<td>
                            <b><a href='/news?page=".$pagey1."&search=" . $search . "'>".$pagey1." </a></b>
                        </td>
                    <td>
                            <b><a href='/news?page=".$pagey."&search=" . $search . "'>".$pagey." </a></b>
                        </td>
                    ";
        }else{
        }

        $paget = $page - 1;
        if($page == 2) {
            echo"<td>
                            <b><a href='/news?page=".$paget."&search=" . $search . "'>".$paget." </a></b>
                        </td>
                    ";
        }else{
        }


        for ($page<=$pagefix;$page<=$pagefix;$page++) {
            if($pageor == $page){
                echo"<td><b><span>$page</span></b></td>";
            }else{
                echo "
                        <td>
                            <b><a href='/news?page=".$page."&search=" . $search . "'>".$page." </a></b>
                        </td>
                        ";
            }
        }
echo "
<td><b><a href='/news?page=$numberofpages&search=" . $search . "'>...</a></td></b>
                                    </tr>
                    </tbody></table></td>
        </tr>

        </tbody></table>";
        ?>
</div>
<div style="float:right;width:160px;">
</div>
<br style="clear:both">
</div>
</div>
<script type="text/javascript">
  $(function () {
  	$("#ctl00_cphRoblox_SearchTextBox").focus();
     });
</script>
<div style="clear:both"></div>
</div>
            </div>
         </div>
      </div>
   </body>
</html>