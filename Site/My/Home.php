<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <link rel="icon" type="image/png" href="/img/logo.svg">
    

<link rel="stylesheet" href="/MainCSS2.css">
<link rel="stylesheet" href="/LoginCSS.css">
<link rel="stylesheet" href="/CatalogCSS.css">
<link rel="stylesheet" href="/2014ItemCSS.css">
<?php
    function randnumber($v1, $v2) {
        return mt_rand($v1, $v2);
    }
?>
      <script src="../sdf.js" type="text/javascript"></script>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "../updateinfo.php"; ?>
         <?php if(!isset($_SESSION['id'])){ header('Location: /login.aspx'); die(); } ?>
         <?php include_once "../2014navbar.php"; ?>
         <?php include_once "../updatestuff.php"; ?>

         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
			   <div id="HomeContainer" class="home-container">
                    <?php
            $id=$_SESSION['id'];
            $user="";$about="";
            $new = $_GET['feedid'];
            if($new == '34') { ?>
            <link rel="stylesheet" href="/Feed.css" />
            <meta name="theme-color" content="#FFFF00">
        <meta property="og:title" content="Squared Feed ID 34">
        <meta property="og:url" content="https://www.squared.cf">
        <meta property="og:description" content="Welcome to the secret Squared feed section, no character limit, no message cooldown, no filter, go crazy.">
        <meta property="og:type" content="Website">
        <meta property="og:image" content="https://squared.cf/img/logo.svg">
                <div style="margin-left: 10px;width: 1020px;" class="divider">
<div id="statusUpdateBox" class="middle-column-box" style="background-color: rgb(230, 230, 230);padding: 3px;">
<div>
    <form action="messagesecretchat.php" method="post" id="addfeedtofeedyea">
<input name="txtStatusMessage" type="text" id="txtStatusMessage" maxlength="3243141" class="translate text-box text-box-large" style="width: 920px; float: left;" placeholder="What are you up to?" value="">
<span class="btn-control btn-control-large" style="padding: 0 20px !important; float: right;" id="shareButton" href="javascript:{}" onclick="document.getElementById('addfeedtofeedyea').submit();">Share</span>
</form>
<img id="loadingImage" class="status-update-image" style="display: none" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif">
<div class="clear"></div>
</div>
</div>
 <div id="FeedificationsContainer" class></div>
<div id="FeedContainer" class="middle-column-box feed-container">
<h2>Secret Chat</h2>
<div id="FeedPanel">
<div id="AjaxFeed" class="text">
    <?php
    $resultsperpage = 100;

            $sql = "SELECT count(*) FROM `secretchat`";
            $result = $db->prepare($sql);
            $result->execute();
            $usercount = $result->fetchColumn();

            $numberofpages = ceil($usercount/$resultsperpage);

            if($page < 1) $page = 1;
            $thispagefirstresult = ($page-1)*$resultsperpage;

        $lol = $db->prepare("SELECT * FROM secretchat ORDER BY date DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
        $lol->execute();
        while ($row = $lol->fetch())
        {
            echo '
            <div class="divider-top feed-container">
<div class="feed-image-container notranslate">
<a href="/user?id=' . $row['madeby'] . '" class="feed-asset">
<img class="feed-asset-image" title="' . $row['user'] . '" alt="' . $row['user'] . '" border="0" height="48" width="48" src="/get_avatar.php?id='.$row['madeby'].'">
</a>
</div>
<div class="feed-text-container text">
<span class="notranslate">
<a href="/user?id=' . $row['madeby'] . '">' . $row['user'] . '</a><br>
<div class="Feedtext">"' . $row['content'] . '"</div>
</span>
<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">' . date('F jS Y', strtotime($row['date'])) . ' at ' . date('g:i A', strtotime($row['date'])) . ' | Feed Message ID ' . $row['id'] . '</span>
</div>';
        }
    ?>
</div>
</div>
<div style="clear:both"></div>
</div>
            <?php } elseif($new == '23') { ?>
            <link rel="stylesheet" href="/Feed.css">
<meta name="theme-color" content="#FFFF00">
        <meta property="og:title" content="Squared Feed ID 34">
        <meta property="og:url" content="https://www.squared.cf">
        <meta property="og:description" content="Welcome to the secret Squared feed section, no character limit, no message cooldown, no filter, go crazy.">
        <meta property="og:type" content="Website">
        <meta property="og:image" content="https://squared.cf/img/logo.svg">
                <div style="margin-left: 10px;width: 1020px;" class="divider">
<div id="statusUpdateBox" class="middle-column-box" style="background-color: rgb(230, 230, 230);padding: 3px;">
<div>
    <form action="feedadd3.php" method="post" id="addfeedtofeedyea">
<input name="txtStatusMessage" type="text" id="txtStatusMessage" maxlength="3243141" class="translate text-box text-box-large" style="width: 920px; float: left;" placeholder="What are you up to?" value="">
<span class="btn-control btn-control-large" style="padding: 0 20px !important; float: right;" id="shareButton" href="javascript:{}" onclick="document.getElementById('addfeedtofeedyea').submit();">Share</span>
</form>
<img id="loadingImage" class="status-update-image" style="display: none" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif">
<div class="clear"></div>
</div>
</div>
 <div id="FeedificationsContainer" class></div>
<div id="FeedContainer" class="middle-column-box feed-container">
<h2>devvy chat</h2>
<div id="FeedPanel">
<div id="AjaxFeed" class="text">
    <?php
    $resultsperpage = 50;

            $sql = "SELECT count(*) FROM `secretchat2`";
            $result = $db->prepare($sql);
            $result->execute();
            $usercount = $result->fetchColumn();

            $numberofpages = ceil($usercount/$resultsperpage);

            if($page < 1) $page = 1;
            $thispagefirstresult = ($page-1)*$resultsperpage;

        $lol = $db->prepare("SELECT * FROM secretchat2 ORDER BY date DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
        $lol->execute();
        while ($row = $lol->fetch())
        {
            echo '
            <div class="divider-top feed-container">
<div class="feed-image-container notranslate">
<a href="/user?id=' . $row['madeby'] . '" class="feed-asset">
<img class="feed-asset-image" title="' . $row['user'] . '" alt="' . $row['user'] . '" border="0" height="48" width="48" src="/get_avatar.php?id='.$row['madeby'].'">
</a>
</div>
<div class="feed-text-container text">
<span class="notranslate">
<a href="/user?id=' . $row['madeby'] . '">' . $row['user'] . '</a><br>
<div class="Feedtext">"' . $row['content'] . '"</div>
</span>
<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">' . date('F jS Y', strtotime($row['date'])) . ' at ' . date('g:i A', strtotime($row['date'])) . ' | Feed Message ID ' . $row['id'] . '</span>
</div>';
        }
    ?>
</div>
</div>
<div style="clear:both"></div>
</div>
            <?php } elseif($new == '128') { ?>
<div id="ctl00_cphRoblox_ContainerPanel">
<div id="BrowseContainer" style="text-align: center">
<div style="width: 970px; height: 28px; margin-bottom: 10px; clear: both;">
<form action="feedadd4.php" method="post" id="addfeedtofeedyea">
<span class="btn-control btn-control-large" style="padding: 0 20px !important; float: center;" id="shareButton" href="javascript:{}" onclick="document.getElementById('addfeedtofeedyea').submit();">Generate Invite Key</span>
</form>
<br>
<div style="float:center;min-height:600px">
<table class="table" cellspacing="0" cellpadding="0" border="0" id="_ctl0_cphRoblox_gvPlacesBrowsed">
<tbody>
<tr class="table-header">
<th class="Avatar">Inviter Avatar</th>
<th class="Member" style="width:126px;">Inviter Name</th>
<th class="Description" style="width:435px;">Code</th>
<th class="Date" style="width:85px;">Invite Creation Date</th>
<th class="" style="width:255px;border-right: 1px solid #cccccc">Used</th>
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

            $resultsperpage = 20;

            $sql = "SELECT count(*) FROM `invites` WHERE code LIKE '%$search%'";
            $result = $db->prepare($sql);
            $result->execute();
            $usercount = $result->fetchColumn();

            $numberofpages = ceil($usercount/$resultsperpage);

            if($page < 1) $page = 1;
            $thispagefirstresult = ($page-1)*$resultsperpage;

        $lol = $db->prepare("SELECT * FROM invites WHERE code LIKE '%$search%' ORDER BY creationdate DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
        $lol->execute();
        if($usercount < 1) {
            echo '
    <div class="alert alert-danger" role="alert">
    Nothing found.
    </div>';
        }
        while ($row = $lol->fetch())
        {
            $online = "offline";
            $online2 = "/img/Offline.png";
            if($row['online'] == 1) {
                $online = "online";
                $online2 = "/img/Online.png";
            } else { 
                $online = "offline";
                $online2 = "/img/Offline.png";
            }
            $username = $db->query("SELECT * FROM users WHERE id = '".$ep->number($row['inviter'])."'")->fetch()['user'];
            $asd = '<span> None </span';
            $asa = '';
            if ($row['admin'] == 'yes') {
                $asd = '<span style="color:#e74c3c"> Administrator </span>';
            } else {
                $asd = '<span> None </span';
            }
                            
                            if ($username == 'Squared') {
                                $asa = 'https://cdn.upload.systems/uploads/YvgXSiKt.png';
                            } elseif ($username == 'philosophy') {
                                $asa = 'https://cdn.upload.systems/uploads/YtitGcTj.png';
                            } else {
                                $asa = 'https://cdn.upload.systems/uploads/cvLoLw4Y.png';
                            }
                            $aeae = date("F jS Y", strtotime($row['creationdate']));
                            $jksdaf = $aeae;
            $blurb = $row['code'];
echo '
<tr class="table-item">
<td style="border-left: 1px solid #cccccc"><a class="roblox-avatar-image" data-user-id="' . $row['inviter'] . '" data-image-size="custom" data-image-size-x="64" data-image-size-y="64" href="/user?id=' . $row['inviter'] . '"><div style="position: relative;"><a href="/user?id=' . $row['inviter'] . '"><img title="' . $username . '" alt="' . $username . '" border="0" height="64" width="64" src="https://squared.cf/get_avatar?id=' . $row['inviter'] . '"></a></td>
<td><img src="' . $online2 . '" alt="' . $username . ' is ' . $online . '" style="border-width:0px;"> <a href="/user?id=' . $row['inviter'] . '">' . $username . '</a></td>
<td>' . $blurb . '</td>
<td>' . $jksdaf . '</td>
<td style="border-right: 1px solid #cccccc">' . $row['used'] . '</td>
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

        if($page > 7 || $page == 7) echo"<td><b><a href='/?feedid=128&page=1&search=" . $search . "'>... </a></b></td>";

        if($page == 1 OR $page == 2 OR $page == 3 OR $page == 4 OR $page == 5) {
        }else{
            echo"<td>
                            <b><a href='/?feedid=128&page=".$page6."&search=" . $search . "'>".$page6." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$page5."&search=" . $search . "'>".$page5." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$page4."&search=" . $search . "'>".$page4." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$page3."&search=" . $search . "'>".$page3." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$page2."&search=" . $search . "'>".$page2." </a></b>
                        </td>
                    ";
        }

        $pager = $page - 1;
        $pager1 = $page - 2;
        $pager2 = $page - 3;
        $pager3 = $page - 4;
        if($page == 5) {
            echo"<td>
                            <b><a href='/?feedid=128&page=".$pager3."&search=" . $search . "'>".$pager3." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$pager2."&search=" . $search . "'>".$pager2." </a></b>
                        </td>
                    <td>
                          <b><a href='/?feedid=128&page=".$pager1."&search=" . $search . "'>".$pager1." </a></b>
                        </td>
                    <td>
                           <b> <a href='/?feedid=128&page=".$pager."&search=" . $search . "'>".$pager." </a></b>
                        </td>
                    ";
        }else{
        }

        $pagej = $page - 1;
        $pagej1 = $page - 2;
        $pagej2 = $page - 3;
        if($page == 4) {
            echo"<td>
                            <b><a href='/?feedid=128&page=".$pagej2."&search=" . $search . "'>".$pagej2." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$pagej1."&search=" . $search . "'>".$pagej1." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$pagej."&search=" . $search . "'>".$pagej." </a></b>
                        </td>
                    ";
        }else{
        }

        $pagey = $page - 1;
        $pagey1 = $page - 2;
        if($page == 3) {
            echo"<td>
                            <b><a href='/?feedid=128&page=".$pagey1."&search=" . $search . "'>".$pagey1." </a></b>
                        </td>
                    <td>
                            <b><a href='/?feedid=128&page=".$pagey."&search=" . $search . "'>".$pagey." </a></b>
                        </td>
                    ";
        }else{
        }

        $paget = $page - 1;
        if($page == 2) {
            echo"<td>
                            <b><a href='/?feedid=128&page=".$paget."&search=" . $search . "'>".$paget." </a></b>
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
                            <b><a href='/?feedid=128&page=".$page."&search=" . $search . "'>".$page." </a></b>
                        </td>
                        ";
            }
        }
echo "
<td><b><a href='/?feedid=128&page=$numberofpages&search=" . $search . "'>...</a></td></b>
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
<?php } elseif($new == '68' && !($_SESSION['id'] == 3)) { ?>
            <link rel="stylesheet" href="/Feed.css">
<meta name="theme-color" content="#FFFF00">
        <meta property="og:title" content="Squared Feed ID 34">
        <meta property="og:url" content="https://www.squared.cf">
        <meta property="og:description" content="Welcome to the secret Squared feed section, no character limit, no message cooldown, no filter, go crazy.">
        <meta property="og:type" content="Website">
        <meta property="og:image" content="https://squared.cf/img/logo.svg">
                <div style="margin-left: 10px;width: 1020px;" class="divider">
<div id="statusUpdateBox" class="middle-column-box" style="background-color: rgb(230, 230, 230);padding: 3px;">
<div>
    <form action="feedadd5.php" method="post" id="addfeedtofeedyea">
<input name="txtStatusMessage" type="text" id="txtStatusMessage" maxlength="3243141" class="translate text-box text-box-large" style="width: 920px; float: left;" placeholder="What are you up to?" value="">
<span class="btn-control btn-control-large" style="padding: 0 20px !important; float: right;" id="shareButton" href="javascript:{}" onclick="document.getElementById('addfeedtofeedyea').submit();">Share</span>
</form>
<img id="loadingImage" class="status-update-image" style="display: none" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif">
<div class="clear"></div>
</div>
</div>
 <div id="FeedificationsContainer" class></div>
<div id="FeedContainer" class="middle-column-box feed-container">
<h2>Katrina X Philosophy</h2>
<div id="FeedPanel">
<div id="AjaxFeed" class="text">
    <?php
    $resultsperpage = 50;

            $sql = "SELECT count(*) FROM `KxP`";
            $result = $db->prepare($sql);
            $result->execute();
            $usercount = $result->fetchColumn();

            $numberofpages = ceil($usercount/$resultsperpage);

            if($page < 1) $page = 1;
            $thispagefirstresult = ($page-1)*$resultsperpage;

        $lol = $db->prepare("SELECT * FROM KxP ORDER BY date DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
        $lol->execute();
        while ($row = $lol->fetch())
        {
            echo '
            <div class="divider-top feed-container">
<div class="feed-image-container notranslate">
<a href="/user?id=' . $row['madeby'] . '" class="feed-asset">
<img class="feed-asset-image" title="' . $row['user'] . '" alt="' . $row['user'] . '" border="0" height="48" width="48" src="/get_avatar.php?id='.$row['madeby'].'">
</a>
</div>
<div class="feed-text-container text">
<span class="notranslate">
<a href="/user?id=' . $row['madeby'] . '">' . $row['user'] . '</a><br>
<div class="Feedtext">"' . $row['content'] . '"</div>
</span>
<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">' . date('F jS Y', strtotime($row['date'])) . ' at ' . date('g:i A', strtotime($row['date'])) . ' | Feed Message ID ' . $row['id'] . '</span>
</div>';
        }
    ?>
</div>
</div>
<div style="clear:both"></div>
</div>

            <?php } else { ?>
            <link rel="stylesheet" href="/Feed.css">
            <div>
<h1>Hello, <?php echo $_SESSION['user']; ?>!</h1>
</div>
<div style="width: 230px;float: left;">
<div class="left-column-boxes user-avatar-container divider-right divider-bottom">
<div id="UserAvatar" class="thumbnail-holder" style="width:210px; height:210px;">
<div class="roblox-avatar-image image-medium"><div style="position: relative;"><img border="0" height="210" width="210" src="/get_avatar.php?id=<?php echo $_SESSION['id']; ?>"></div></div>
</div>
<div id="UserInfo" class="text">

<br clear="all">
<br class="rbx2hide">
<div>
</div>
</div> </div>

<div class="left-column-boxes divider-right">
<div>
<h3 class="best-friends-title">My Best Friends</h3>
<div style="float: right; margin-right: 4px;">
<a href="#" class="btn-small btn-neutral">Edit</a>
</div>
<div class="clear"></div>
</div>
<div id="bestFriendsContainer" class="best-friends-container"><div class="best-friends">
<div class="user">
<div class="roblox-avatar-image" data-user-id="1" data-image-size="tiny"><div style="position: relative;"><a href="https://squared.cf/user?id=1"><img title="Squared" alt="Squared" border="0" height="48" width="48" src="https://squared.cf/get_avatar?id=1"></a></div></div>
<div class="info">
<img src="/img/Online.png" title="Online">
<a class="name" href="https://squared.cf/user?id=1">Squared</a>
<div class="status">"Hello! This is the official Squared account."</div>
</div>
<div class="clear"></div>
</div>
</div></div>
<div style="clear:both;"></div>
</div>
</div>
<div style="margin-left: 10px;float: left;width: 600px;" class="divider-right">
<div id="statusUpdateBox" class="middle-column-box" style="background-color: rgb(230, 230, 230);padding: 3px;">
<div>
    <form action="feedadd.php" method="post" id="addfeedtofeedyea">
<input name="txtStatusMessage" type="text" id="txtStatusMessage" maxlength="254" class="translate text-box text-box-large" style="width: 500px; float: left;" placeholder="What are you up to?" value="">
<span class="btn-control btn-control-large" style="padding: 0 20px !important; float: right;" id="shareButton" href="javascript:{}" onclick="document.getElementById('addfeedtofeedyea').submit();">Share</span>
</form>
<img id="loadingImage" class="status-update-image" style="display: none" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif">
<div class="clear"></div>
</div>
</div>
 <div id="FeedificationsContainer" class></div>
<div id="FeedContainer" class="middle-column-box feed-container">
<h2>My Feed</h2>
<div id="FeedPanel">
<div id="AjaxFeed" class="text">
    <?php
    $resultsperpage = 8;

            $sql = "SELECT count(*) FROM `feed`";
            $result = $db->prepare($sql);
            $result->execute();
            $usercount = $result->fetchColumn();

            $numberofpages = ceil($usercount/$resultsperpage);

            if($page < 1) $page = 1;
            $thispagefirstresult = ($page-1)*$resultsperpage;

        $lol = $db->prepare("SELECT * FROM feed ORDER BY date DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
        $lol->execute();
        while ($row = $lol->fetch())
        {
            echo '
            <div class="divider-top feed-container">
<div class="feed-image-container notranslate">
<a href="/user?id=' . $row['madeby'] . '" class="feed-asset">
<img class="feed-asset-image" title="' . $row['user'] . '" alt="' . $row['user'] . '" border="0" height="48" width="48" src="/get_avatar.php?id='.$row['madeby'].'">
</a>
</div>
<div class="feed-text-container text">
<span class="notranslate">
<a href="/user?id=' . $row['madeby'] . '">' . $row['user'] . '</a><br>
<div class="Feedtext">"' . $row['content'] . '"</div>
</span>
<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">' . date('F jS Y', strtotime($row['date'])) . ' at ' . date('g:i A', strtotime($row['date'])) . ' | Feed Message ID ' . $row['id'] . '</span>
</div>
</div>
';
        }
    ?>
</div>
<div id="AjaxFeedError" style="display: none" class="error-message">An error occurred while fetching your feed.</div>
</div>
</div>
</div>
<div class="clear"></div>
<div id="UserScreenContainer">
</div>
</div>
<div style="clear:both"></div>
</div>
            <?php } ?>
            </div>
            </div>
         </div>
         
         <?php
            require "../connect.php";
            $amountofusers = 0;
            $onlinepeople = 0;
			$conn2 = new mysqli($host, $db_user, $db_password);
			$conn2->select_db($db_name);
		    // Check connection
			if ($conn2->connect_error) {
			    die("Connection failed: " . $conn2->connect_error);
			}
			$sql = "SELECT id FROM users";

			$result = $conn2->query($sql);
		    $amountofusers = $result->num_rows;
			$conn2->close();
			
			$conn2 = new mysqli($host, $db_user, $db_password);
			$conn2->select_db($db_name);
		    // Check connection
			if ($conn2->connect_error) {
			    die("Connection failed: " . $conn2->connect_error);
			}
			$sql = "SELECT * FROM users WHERE online=1";

			$result = $conn2->query($sql);
		    $onlinepeople = $result->num_rows;
			$conn2->close();
			$assa = randnumber(1, $amountofusers)
            ?>
         <div id="Footer" class="footer-container">
    <div class="FooterNav">
    <a>Squared 2021</a>
        &nbsp;|&nbsp; 
        <a>Lucky Number: <?php echo $assa; ?>/<?php echo $amountofusers; ?></a>
        &nbsp;|&nbsp; 
        <a>Online Users: <?php echo $onlinepeople; ?> out of <?php echo $amountofusers; ?> users</a>
        &nbsp;|&nbsp; 
        <a href="https://discord.gg/FRAsjbymhT">Discord</a></div>
    <div class="FooterNav">
        <div id="SEOGenreLinks" class="SEOGenreLinks">
                  <a></a> 
        </div>
    </div>
</div>
         
         
      </div>
   </body>
</html>