<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php if(!isset($_SESSION['id'])){ header('Location: login'); die(); } ?>
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
                    <?php
            $id=$_SESSION['id'];
            $user="";$about="";
        ?>
         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
			   <div id="HomeContainer" class="home-container">
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
<a href="/editfriends" class="btn-small btn-neutral">Edit</a>
</div>
<div class="clear"></div>
</div>
<div id="bestFriendsContainer" class="best-friends-container"><div class="best-friends">
</div></div>
<div style="clear:both;"></div>
</div>
</div>
<div style="margin-left: 10px;float: left;width: 600px;" class="divider-right">
<div id="statusUpdateBox" class="middle-column-box" style="background-color: rgb(230, 230, 230);padding: 3px;">
<div>
    <form action="feedadd.php" method="post" id="addfeedtofeedyea">
<input name="txtStatusMessage" type="text" id="txtStatusMessage" maxlength="254" class="translate text-box text-box-large" style="width: 370px; float: left;" placeholder="What are you up to?" value="">
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
    $resultsperpage = 4;

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
<span style="display: block; padding-top: 5px; color: #AAA; font-size: 11px;">' . date('F jS Y', strtotime($row['date'])) . ' at ' . date('g:i A', strtotime($row['date'])) . '</span>
</div>
</div>
<div class="clear"></div>
</div>';
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
               </div>
            </div>
         </div>
      </div>
   </body>
</html>