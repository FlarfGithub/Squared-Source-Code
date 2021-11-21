<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="https://www.facebook.com/2008/fbml">
   <head>
        <?php include_once "../2014head.php"; ?>
        <?php 
            require_once "../DiscordEmbed.php";
            $discordembed = new DiscordEmbed(); 
            $discordembed->NormalEmbed("Access Forbidden", "https://squared.cf/ErrorPages/403.aspx");
        ?>
        <link rel="stylesheet" href="/CSS/ErrorPage.css">
   </head>
   <body class="" style="">
      <div id="Container">
         <?php include_once "../updateinfo.php"; ?>
         <?php include_once "../2014navbar.php"; ?>
         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
			       <div id="Body" class="" style="width:970px">

<div id="ErrorPage">
<div class="divideTitleAndBackButtons" style="margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;">&nbsp;</div>
<img src="/img/exclamation2.png">
<h1>Access Denied</h1>
<h3>Sorry, you don't have permission to view this page!</h3>
<pre><span id="ctl00_cphRoblox_errorMsgLbl"></span></pre>
<div class="divideTitleAndBackButtons">&nbsp;</div>
<div class="CenterNavigationButtonsForFloat">
<a class="GoToPreviousPageButton" title="Go to Previous Page Button" onclick="history.back();return false;" href="#"></a>
<a class="ReturnHomeButton" title="Return Home" href="/"></a>
<div style="clear:both"></div>
</div>
<div class="divideTitleAndBackButtons" style="margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;">&nbsp;</div>
</div>




</div>
            </div>
         </div>
      </div>
      <div class="forceSpace">&nbsp;&nbsp;</div>
      <div class="forceSpace">&nbsp;&nbsp;</div>
      <div class="forceSpace">&nbsp;&nbsp;</div>
      <?php include "../2014footer.php" ?>
   </body>
</html>