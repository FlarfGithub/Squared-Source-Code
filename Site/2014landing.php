<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php if(!isset($_SESSION['id'])){ header('Location: index.php'); } ?>
         <?php include_once "2014navbar.php"; ?>
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
<div class="roblox-avatar-image image-medium"><div style="position: relative;"><img border="0" height="210" width="210" src="https://cdn.upload.systems/uploads/cvLoLw4Y.png"></div></div>
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
<div style="margin-left: 10px;float: left;width: 470px;" class="divider-right">
<div id="statusUpdateBox" class="middle-column-box" style="background-color: rgb(230, 230, 230);padding: 5px;">
<div>
<input name="txtStatusMessage" type="text" id="txtStatusMessage" maxlength="254" class="translate text-box text-box-large" style="width: 370px; float: left;" placeholder="What are you up to?" value="">
<span class="btn-control btn-control-large" style="padding: 0 20px !important; float: right;" id="shareButton">Share</span>
<img id="loadingImage" class="status-update-image" style="display: none" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif">
<div class="clear"></div>
</div>
</div>
 <div id="FeedificationsContainer" class=""></div>
<div id="FeedContainer" class="middle-column-box feed-container">
<h2>My Feed</h2>
<div id="FeedPanel">
<div id="AjaxFeed" class="text"><div class="divider-top feed-container">No news about your friends... want to know what your friends are up to? <a href="/users">make some friends now.</a></div></div>
<div id="AjaxFeedError" style="display: none" class="error-message">An error occurred while fetching your feed.</div>
</div>
</div>
</div>
<div style="margin-left: 10px;float: left;width: 230px;">
<div id="RecentlyVisitedPlacesContainer" class="right-column-box">
<h3 style="padding-bottom: 6px;">Recently Played Games</h3>
<div id="RecentlyVisitedPlaces">
<div id="RecentlyVisitedPlaceTemplate" class="recent-place-container">
<div class="recent-place-thumb"></div>
 <div class="recent-place-Info">
<div class="recent-place-name"></div>
<div class="recent-place-players-online text"></div>
</div>
</div>
<div id="SeeMore" style="display: none;">
<a href="/game" class="text-link">See More <img alt="See more! " src="https://images.rbxcdn.com/efe86a4cae90d4c37a5d73480dea4cb1.png" class="see-more-img"></a>
</div>
<div id="PlayGames" style="">
You haven't played any games recently.
<a href="/games" class="text-link">Play Now <img alt="See more! " src="https://images.rbxcdn.com/efe86a4cae90d4c37a5d73480dea4cb1.png" class="see-more-img"></a>
</div>
</div>
<div id="Skyscraper-Ad" class="right-column-box">
<div style="width: 160px">
</div> </div>
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