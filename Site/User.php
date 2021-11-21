<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
      <?php include_once "updateinfo.php"; ?>
      <?php
            $id=69420;
            $user="";$about="";$aeae="";$onn="";$kkz="";
            if(!isset($_GET['id'])){
                if(isset($_SESSION['id'])){$id=$_SESSION['id'];}else{
                    header('Location: 404');
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
                        $user = $wiersz['user'];
                        $joindate = $wiersz['created_at'];
                            $aeae = date("F jS Y", strtotime($joindate));
                        $about = $wiersz['about'];
                        $onn = $wiersz['online'];
                        $adminlevel = $wiersz['admin'];
                        $kkz = $wiersz['profileviews'];
                        $banreason = $wiersz['banreason'];
                        $bannote = $wiersz['moderatornote'];
                        $banned = $wiersz['banned'];;
                        unset($_SESSION['blad']);
                        $rezultat->free_result();
                        
                    } else {
                        //header('Location: 404');
                        include_once "2014navbar.php";
                        echo '<div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
			       <div id="Body" class="" style="width:970px">

<div id="ErrorPage">
<div class="divideTitleAndBackButtons" style="margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;">&nbsp;</div>
<img src="/img/exclamation2.png">
<h1>Requested page not found</h1>
<h3>You may have clicked an expired link or mistyped the address.</h3>
<pre><span id="ctl00_cphRoblox_errorMsgLbl"></span></pre>
<div class="divideTitleAndBackButtons">&nbsp;</div>
<div class="CenterNavigationButtonsForFloat">
<a onclick="history.back();return false;" href="#">Go to Previous Page</a>
<a href="/">Return Home</a>
<div style="clear:both"></div>
</div>
<div class="divideTitleAndBackButtons" style="margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;">&nbsp;</div>
</div>




</div>
            </div>
         </div>';
         die();
                    }
                    
                }
                
                $polaczenie->close();
            }
	/*if(isset($_SESSION['id']) && !($id == $_SESSION['id'])){
		$conn = new mysqli($host, $db_user, $db_password);
		$conn->select_db($db_name);
		$sql = "UPDATE `users` SET `profileviews` = '".($kkz+1)."' WHERE `users`.`id` = ".$id.";";
		$result = $conn->query($sql);
		$conn->close();
	}*/
	$assy = $about;
	if ($user == 'sudoapt') {
	    $assy = '"We do what we must because we can." the loser, the legend, the lemonade guy.
<br>
i dual boot Windows 10 and Solus. I also enjoy me some good Portal, and am just kinda in the OSC and little more.';
	}
        ?>
        <title><?php echo $user; ?> - Squared</title>
        <meta property="og:site_name" content="Squared">
    <meta property="og:title" content="<?php echo $user; ?> - Squared">
    <meta property="og:type" content="profile">
    <meta property="og:url" content="https://squared.cf/User.aspx?id=<?php echo $_GET['id']; ?>">
    <meta property="og:description" content='<?php echo $assy; ?>'>
    <meta property="og:image" content="https://squared.cf/get_avatar?id=<?php echo $_GET['id']; ?>">
		<style>
		td { padding-bottom:0px !important; } 
		.UserPaneContainer { text-align: center !important; }
		</style>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updatestuff.php"; ?>
         <?php include_once "2014navbar.php"; ?>
         <div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" style="width:970px;">
                    
    <style type="text/css">
        #Body {
            padding: 10px;
        }
    </style>
    <div>
        
<div style="width:900px;height:30px;clear:both; display:none;">
    <span id="ctl00_cphRoblox_rbxHeaderPane_nameRegion" style="font-size:20px; font-weight:bold;">Dert41</span>
</div>




        
        <div style="clear: both; margin: 0; padding: 0;"></div>
        <div class="divider-right" style="width: 484px; float: left">
            

<h2 class="title">
    <span id="ctl00_cphRoblox_rbxUserPane_lUserRobloxURL"><?php echo $user; ?>'s Profile</span></h2>
<div class="divider-bottom" style="position: relative;z-index:3;padding-bottom: 20px">
    <div style="width: 100%">
        <div id="ctl00_cphRoblox_rbxUserPane_onlineStatusRow">
            <div style="text-align: center;">
                
                <span id="ctl00_cphRoblox_rbxUserPane_lUserOnlineStatus" <?php if($onn==1){ echo 'style="color:red !important;"'; } ?> class="UserOfflineMessage"><?php if($onn==1){ echo '[ Online ]';}else{echo '[ Offline ]';} ?></span>
            <?php
            if ($adminlevel == 'yes') {
                $asd = '<span style="color:#e74c3c"> Administrator </span>';
            } elseif ($user == 'Katrina') {
                $asd = '<span style="color:#33cc00"> Well-Known </span>';
            } elseif ($user == 'Cross') {
                $asd = '<span> Idiot </span';
            } else {
                $asd = '<span> None </span';
            }
            ?>
            <br>
            <a>Role: <?php echo $asd; ?></a>
                <a href="https://squared.cf/User.aspx?id=<?php echo $id; ?>"><br>https://squared.cf/User.aspx?id=<?php echo $id; ?></a>
            </div>
            <?php 
            if ($banned == 'yes') {
                echo '<br>
                <center><span style="color:#ff2d00"> User Is Banned </span></center>
                <center><span style="color:#ff2d00"> Ban Reason: "' .  $banreason . '" </span></center>
                <center><span style="color:#ff2d00"> Moderator Note: "' .  $bannote . '" </span></center>';
            }
            ?>
        </div>
        <div>
            <div>
                <div class="UserPaneContainer">
                    <div style="margin-bottom: 10px;">
                        
                    </div>
                        

<div id="UserAvatar" class="thumbnail-holder" data-3d-thumbs-enabled="" data-url="/web/20141009134408oe_/http://www.roblox.com/thumbnail/user-avatar?userId=68647&amp;thumbnailFormatId=124&amp;width=352&amp;height=352">
    <span class="thumbnail-span" data-3d-url="/avatar-thumbnail-3d/json?userId=68647" data-js-files="http://js.rbxcdn.com/2cdabe2b5b7eb87399a8e9f18dd7ea05.js"><img alt="Dert41" height="250px" width="250px" class="" src="/get_avatar.php?id=<?php echo $id; ?>"></span>
</div>


                    <br>
                    

<div class="UserBlurb" style="margin-top: 10px; overflow-y: auto; max-height: 450px; ">
    Join Date: <?php 
    if ($user == 'acroarson') {
        echo '240000000 BC';
    } else {
        echo $aeae;
    } ?>
<br>
<br><?php echo $about; ?>
</div>
<div id="ProfileButtons" style="margin: 10px auto; width: 239px;">
    
            <a id="FriendButton" class="btn-control btn-control-large disabled">Send Friend Request</a>
    
    <div class="clear"></div>
</div>

                    <div class="ProfileAlertPanel" style="display: none; margin: 15px auto 0px auto; width: 205px;">
                        
                        <br>
                    </div>
                    <div style="margin-right: 20px">
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="title">
<span>SQUARED Badges</span>
</h2>
<div class="divider-bottom" style="padding-bottom: 20px">
    <div style="display: inline-block">
	    <table id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges" cellspacing="0" align="Left" border="0" style="border-collapse:collapse;">
	<tbody><tr>
	<?php if($adminlevel == "yes"){
		echo'<td>
			    <div class="Badge">
				    <div class="BadgeImage"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl00_hlHeader" href="Badges.aspx#Badge3"><img id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl00_iBadge" src="/img/logo.svg" alt="" style="height:75px;width:75px;border-width:0px;"></a></div>
				    <div class="BadgeLabel"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl00_HyperLink1">Administrator</a></div>
			    </div>
	</td>'; } ?>
	</tr>
</tbody></table>
	    
    </div>
</div>
            

<style>
.statsLabel { font-weight:bold; width:200px; text-align:right; padding-right:10px;}
.statsValue { font-weight:normal; width:200px; text-align:left;}
.statsTable { width:100%; }
</style>
<h2 class="title"><span>Statistics</span></h2>

<div class="divider-bottom" style="padding-bottom: 20px">
<table class="statsTable">
    <tbody><tr>
        <td class="statsLabel">
        <acronym title="The number of this user's friends.">Friends</acronym>:
        </td>
        <td class="statsValue">
        <span id="ctl00_cphRoblox_rbxUserStatisticsPane_lFriendsStatistics">0</span>
        </td>
    </tr><tr>
        <td class="statsLabel">
        <acronym title="The number of all the user's places visits combined.">Place Visits</acronym>:
        </td>
        <td class="statsValue">
        <span id="ctl00_cphRoblox_rbxUserStatisticsPane_lFriendsStatistics">0</span>
        </td>
    </tr><tr>
        <td class="statsLabel">
        <acronym title="The number of how many times this profile was shown.">Profile Views</acronym>:
        </td>
        <td class="statsValue">
        <span id="ctl00_cphRoblox_rbxUserStatisticsPane_lFriendsStatistics"><?php echo $kkz; ?></span>
        </td>
    </tr>
     
</tbody></table>    
</div>
   

            
        </div>
		<div class="divider-left" style="width: 484px; float: left; position: relative; left: -1px">
            <div class="divider-bottom" style="padding-bottom: 20px; padding-left: 20px">
                <h2 class="title" style="float: left">
                    <span>Active Places</span>
                </h2>
                
                <div id="UserPlacesPane" style="clear:both;">
                    <div id="ctl00_cphRoblox_rbxUserPlacesPane_pnlUserPlaces">
	
<div id="UserPlaces" style="overflow: hidden">
<div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcaseFooter" class="PanelFooter" style="margin-top:5px;margin-left:20px;padding:3px;">
		
	    
	    
	This user doesn't have any active places.
	
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
    
	<div id="ctl00_cphRoblox_rbxUserPlacesPane_pnlUserPlaces">
	
<div id="UserPlaces" style="overflow: hidden">
<div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcaseFooter" class="PanelFooter" style="margin-top:5px;margin-left:20px;padding:3px;margin-bottom:18px;">
		
	    
	    
	This user has no friends.
	
	</div>
 </div>
 
</div>
	
</div>

            </div>
            



            
        </div>
        <br clear="all">
    </div>
    

                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        <?php include "2014footer.php" ?>
      </div>
   </body>
</html>