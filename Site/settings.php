<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
      <script src="/sdf.js" type="text/javascript"></script>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php if(!isset($_SESSION['id'])){ header('Location: login'); die(); } ?>
         <?php include_once "2014navbar.php"; ?>
         <?php include_once "updatestuff.php"; ?>

         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
			   <div id="HomeContainer" class="home-container">
                    <?php
            $id=$_SESSION['id'];
            $user="";$about="";
            $new = $_GET['feedid'];
            ?>
            <link rel="stylesheet" href="Feed.css" />
            <meta name="theme-color" content="#FFFF00">
        <meta property="og:title" content="Squared Feed ID 34">
        <meta property="og:url" content="https://www.squared.cf">
        <meta property="og:description" content="Welcome to the secret Squared feed section, no character limit, no message cooldown, no filter, go crazy.">
        <meta property="og:type" content="Website">
        <meta property="og:image" content="https://squared.cf/img/logo.svg">
                <div style="margin-left: 10px;width: 1020px;" class="divider">
<div id="statusUpdateBox" class="middle-column-box" style="background-color: rgb(230, 230, 230);padding: 3px;">
<div>
    <form action="updatestatus.php" method="post" id="addfeedtofeedyea">
<input name="abouty" type="text" id="txtStatusMessage" maxlength="3243141" class="translate text-box text-box-large" style="width: 920px; float: left;" placeholder="Personal Blurb" value="">
<span class="btn-control btn-control-large" style="padding: 0 20px !important; float: right;" id="shareButton" href="javascript:{}" onclick="document.getElementById('addfeedtofeedyea').submit();">Update</span>
</form>
<img id="loadingImage" class="status-update-image" style="display: none" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif">
<div class="clear"></div>
</div>
</div>
 <div id="FeedificationsContainer" class></div>
<div id="FeedContainer" class="middle-column-box feed-container">
<h2>Settings</h2>
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
            echo '';
        }
    ?>
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