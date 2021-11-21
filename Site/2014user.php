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
                    <?php
            $id=69420;
            $user="";$about="";
            if(!isset($_GET['id'])){
                if(isset($_SESSION['id'])){$id=$_SESSION['id'];}else{
                    header('Location: 404.php');
                }
            }else{$id=$_GET['id'];}

            $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
            if ($polaczenie->connect_errno!=0)
            {
                echo "Error: ".$polaczenie->connect_errno;
            }
            else
            {
                if ($rezultat = @$polaczenie->query(
                sprintf("SELECT * FROM users WHERE id='%s'",
                mysqli_real_escape_string($polaczenie,$id))))
                {
                        
                    $ilu_userow = $rezultat->num_rows;
                    if($ilu_userow>0)
                    {
                        $wiersz = $rezultat->fetch_assoc();
                        
                        //	$_SESSION['zalogowany'] = true;
                        $id2 = $wiersz['id'];
                        $user = $wiersz['user'];
                        $joindate = $wiersz['created_at'];
                        $about = $wiersz['about'];
                        $onn = $wiersz['online'];
                        $adminlevel = $wiersz['admin'];
                        unset($_SESSION['blad']);
                        $rezultat->free_result();
                        
                    } else {
                        
                        
                    }
                    
                }
                
                $polaczenie->close();
            }
        ?>
        <div id="RepositionBody">

<div id="Body" class="" style="width:970px">
<div>
<div style="width:900px;height:30px;clear:both; display:none;">
<span id="ctl00_cphRoblox_rbxHeaderPane_nameRegion" style="font-size:20px; font-weight:bold;"><?php echo $user; ?></span>
</div>
<div style="clear: both; margin: 0; padding: 0;">
</div>
<!--[if IE 6]>
  <table>
    <tr>
      <td width="450px" valign="top">
        <![endif]-->
<div class="divider-right" style="width: 484px; float: left">
<h2 class="title">
<span id="ctl00_cphRoblox_rbxUserPane_lUserRobloxURL"><?php echo $user; ?>'s Profile</span>
</h2>
<div class="divider-bottom" style="position: relative;z-index:3;padding-bottom: 20px">
<div style="width: 100%">
<div>
<div>
<div class="UserPaneContainer">
<div id="ctl00_cphRoblox_rbxUserPane_onlineStatusRow">
<div style="text-align: center;">
<?php
if ($adminlevel == 'yes') {
    echo '<center><span style="color:#e74c3c"> [ Administrator ] </span></center>';
} else {
    echo '<center><span> [ Normal User ] </span></center>';
}
                            ?>
<?php if($onn==1){ echo '<span id="ctl00_cphRoblox_rbxUserPane_lUserOnlineStatus" class="UserOfflineMessage" style="color:#e74c3c">[ Online ]</span>';}else{echo '<span id="ctl00_cphRoblox_rbxUserPane_lUserOnlineStatus" class="UserOfflineMessage"> [ Offline ] </span>';} ?>
<br>
<a href="/user?id=<?php echo $id2; ?>">https://squared.cf/user?id=<?php echo $id2; ?></a>
</div>
</div>
<div>
<div>
<center>
<div style="margin-bottom: 10px;">
</div>
<a id="ctl00_cphRoblox_rbxUserPane_AvatarImage" disabled="disabled" class=" notranslate" title="philosophy" onclick="return false" style="display:inline-block;height:200px;width:200px;">
<?php 
$dfsjghsa = '';
if ($user == 'Squared') {
                                $dfsjghsa = 'https://cdn.upload.systems/uploads/YvgXSiKt.png';
                            } elseif ($user == 'philosophy') {
                                $dfsjghsa = 'https://cdn.upload.systems/uploads/YtitGcTj.png';
                            } else {
                                $dfsjghsa = 'https://cdn.upload.systems/uploads/cvLoLw4Y.png';
                            }
?>
<div class="roblox-avatar-image image-medium" data-user-id="<?php echo $id2; ?>" data-image-size="custom" data-image-size-x="200" data-image-size-y="200" data-no-click="true" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="<?php echo $user; ?>"><div style="position: relative;"><img title="<?php echo $user; ?>" alt="<?php echo $user; ?>" border="0" height="200" width="200" src="<?php echo $dfsjghsa; ?>"></div></div>
</a>
<br>
<div class="UserBlurb" style="margin-top: 10px; overflow-y: auto; max-height: 450px; ">
<?php echo $about; ?></div>
<?php 
$aeae = date("F jS Y", strtotime($joindate));;
                            ?>
<br>
<center><span>Join Date: <?php echo $aeae; ?></span></center>
<div id="ProfileButtons" style="margin: 10px auto; width: 256px;">
<a id="FriendButton" class="btn-control btn-control-medium disabled">Send Friend Request</a>
<div class="clear"></div>
</div>
<div class="ProfileAlertPanel" style="display: none; margin: 15px auto 0px auto; width: 205px;">
<br>
</div>
<div style="margin-right: 20px">
</div>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<h2 class="title">
<span>Squared Badges</span>
</h2>
<?php 
if ($adminlevel == 'yes') {
    echo '<div class="divider-bottom" style="padding-bottom: 20px">
<div style="display: inline-block">
<table id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges" cellspacing="0" align="Left" border="0" style="border-collapse:collapse;">
<div class="Badge">
<div class="BadgeImage"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl04_hlHeader" href="#"><img id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl04_iBadge" src="/img/logo.svg" alt="" style="height:75px;width:75px;border-width:0px;"></a></div>
<span id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl04_HyperLink1" href="#">Administrator</span>
<tbody>
</tbody>
</div>
</div>
</div>
</div>
</div>
<table id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges" cellspacing="0" align="Left" border="0" style="border-collapse:collapse;">
</table>
</div>
</div>';
} else {
    
}
?>
<div id="BadgesDisplayPane" class="divider-bottom" style="clear: both; padding-bottom: 20px">
<h2 class="title"><span>Player Badges</span></h2>
<div class="" style="">
<div id="ctl00_cphRoblox_rbxBadgesDisplay_BadgesUpdatePanel" class="BadgesUpdatePanel">
<div class="BadgesLoading_Container"></div>
<div class="BadgesListView_Container">
<div class="NoResults">soon</div>
</div>
<div class="BadgesPager_Container" style="clear:both;text-align:center;bottom: 5px;left: 75px;">
</div>
</div>
<div style="clear:both;"></div>
</div>
<script type="text/javascript">
              $('#' + 'ctl00_cphRoblox_rbxBadgesDisplay_BadgesUpdatePanel').bind('click', function (e) {
                  var target = $(e.target);
                  if (target.parentsUntil('.BadgesUpdatePanel', '.BadgesPager_Container').length > 0 && target[0].tagName == 'A') {
                      //put up loading sign
                      $('.BadgesListView_Container').html("");
              
                      window.setTimeout(function () {
                          if ($('.BadgesListView_Container').html() == "") {
                              $('.BadgesLoading_Container').html('<div style="text-align: center;margin-top: 25px;"><img src="/images/ProgressIndicator4.gif" alt="Loading..." /></div>');
                          }
                      }, 1000);
                  }
              });
            </script>
</div>
<style>
            .statsLabel { font-weight:bold; width:200px; text-align:right; padding-right:10px;}
            .statsValue { font-weight:normal; width:200px; text-align:left;}
            .statsTable { width:400px; }
          </style>
<h2 class="title"><span>Statistics</span></h2>
<div class="divider-bottom" style="padding-bottom: 20px">
<center>soon</center><table class="statsTable">
    
</table>
</div>
<div class="divider-bottom" style="padding-bottom: 20px">
<div>
<h2 class="title" style="display:block;float: left;">
<span class="notranslate"><?php echo $user; ?>'s</span> Sets
</h2>

<div class="clear"></div>
</div>
<div id="OwnedSetsContainerDiv" style="padding-bottom:0;">
<div id="SetsItemContainer" style="margin-bottom: 30px; margin-left: 15px"></div>
<div style="clear:both;"></div>
<div class="SetsPager_Container" style="position: relative">
<div id="SetsPagerContainer"></div>
</div>
</div>
<div id="SubscribedSetsContainerDiv" style="display:none; padding-top: 50px; padding-bottom: 0px">
<div id="SubscribedSetsItemContainer" style="margin-bottom: 30px; margin-left: 15px"></div>
<div style="clear:both;"></div>
<div class="SetsPager_Container" style="position: relative">
<div id="SubscribedSetsPagerContainer"></div>
</div>
</div>
<div id="SetsPaneItemTemplate" style="display:none;">
<div class="AssetThumbnail">
<img class="$ImageAssetID">
</div>
<div class="AssetDetails">
<div class="AssetName notranslate">
</div>
<div class="AssetCreator">
<span class="Label">Creator:&nbsp;</span>
<span class="Detail">
<a href="#" class="notranslate">$CreatorName</a>
</span>
</div>
</div>
</div>
</div>
<div id="UserGroupsPane" style="clear: both;">
<h2 class="title">
<span>Groups</span>
</h2>
<div style="clear:both; padding-bottom: 20px; padding-left: 30px">
<div id="ctl00_cphRoblox_rbxUserGroupsPane_ctl00">

<div id="ctl00_cphRoblox_rbxUserGroupsPane_pNoResults">
<p class="NoResults"><span id="ctl00_cphRoblox_rbxUserGroupsPane_lNoResults">soon :troll:</span></p>
</div>
</div>
</div>
</div>
</div>
<!--[if IE 6]>
      </td>
      <td width="450px" valign="top">
        <![endif]-->
<div class="divider-left" style="width: 484px; float: left; position: relative; left: -1px">
<div class="divider-bottom" style="padding-bottom: 20px; padding-left: 20px">
<h2 class="title" style="float: left"></h2>
<div id="UserPlacesPane">
<div id="ctl00_cphRoblox_rbxUserPlacesPane_pnlUserPlaces"><div id="UserPlaces" style="overflow: hidden">
<div id="accordion" class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
</div>
<div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcaseFooter" class="PanelFooter" style="margin-top:5px;margin-left:20px;padding:3px;display:none;">
 <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePager_PanelPages" style="text-align:center;">
<a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePager_LinkButtonFirst" class="pager previous disabled"></a>
<span class="PageNumbers" style="vertical-align: top; display: inline-block; padding: 5px; padding-top: 6px">Page 1 of 2</span>
<a id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcasePager_LinkButtonNext" class="pager next" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserPlacesPane$ShowcasePager$LinkButtonNext&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"></a>
</div>
</div>
</div>
</div>
<div class="ItemPurchaseAjaxContainer">
<div id="ItemPurchaseAjaxData" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-balance-tickets="0" data-user-bc="0" data-continueshopping-url="" data-imageurl="" data-alerturl="https://images.rbxcdn.com/cbb24e0c0f1fb97381a065bd1e056fcb.png" data-builderscluburl="https://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png"></div>
<div id="ProcessingView" style="display:none">
<div class="ProcessingModalBody">
<p style="margin:0px"><img src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Processing..."></p>
<p style="margin:7px 0px">Processing Transaction</p>
</div>
</div>
</div>
</div>
</div>
<div style="padding-left: 20px" class="divider-bottom">
<div style="margin: 12px 0 20px; overflow:visible">
<h2 style="float: left"><?php echo $user; ?>'s Friends</h2>

</div>
<div style="padding-top: 50px">
<div id="ctl00_cphRoblox_rbxFriendsPane_pNoResults">
<p><span id="ctl00_cphRoblox_rbxFriendsPane_lNoResults">SOON</span></p>
</div>
</div>
</div>
<div class="divider-bottom" style="padding-left: 20px; padding-bottom: 20px">
<div id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesPane">
<div style="overflow: auto">
<h2 class="title" style="float: left">Favorites</h2>
<div class="PanelFooter" style="float: right;">
Category:&nbsp;
<select name="ctl00$cphRoblox$rbxFavoritesPane$AssetCategoryDropDownList" onchange="javascript:setTimeout('__doPostBack(\'ctl00$cphRoblox$rbxFavoritesPane$AssetCategoryDropDownList\',\'\')', 0)" id="ctl00_cphRoblox_rbxFavoritesPane_AssetCategoryDropDownList">
<option value="17">Heads</option>
<option value="18">Faces</option>
<option value="19">Gears</option>
<option value="8">Hats</option>
<option value="2">T-Shirts</option>
<option value="11">Shirts</option>
<option value="12">Pants</option>
<option value="13">Decals</option>
<option value="10">Models</option>
<option selected="selected" value="9">Places</option>
</select>
</div>
</div>
<div>
<div id="FavoritesContent">
<div id="ctl00_cphRoblox_rbxFavoritesPane_NoResultsPanel" class="NoResults">
<span id="ctl00_cphRoblox_rbxFavoritesPane_NoResultsLabel" class="NoResults">not yet</span>
</div>
</div>
</div>
</div>
</div>

</div>
<!--[if IE 6]>
      </td>
    </tr>
  </table>
  <![endif]-->
<br clear="all">
</div>
<div id="UserContainer">
<div id="UserAssetsPane" style="border-top: 1px solid #ccc;">
<div id="ctl00_cphRoblox_rbxUserAssetsPane_upUserAssetsPane">
<h2 class="title" display="block" style="width:970px">
<span>
Inventory
</span>
</h2>

</div>
</div>
</div>
</div>
</div>
        
            </div>
         </div>
      </div>
   </body>
</html>