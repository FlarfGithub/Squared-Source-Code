<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
		<style>
		td { padding-bottom:0px !important; } 
		.UserPaneContainer { text-align: center !important; }
		</style>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
        <?php
            $id=69420;
            $user="";$about="";$aeae="";$onn="";
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
                        $user = $wiersz['user'];
                        $joindate = $wiersz['created_at'];
                            $aeae = date("jS F Y", strtotime($joindate));
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
                
                <span id="ctl00_cphRoblox_rbxUserPane_lUserOnlineStatus" class="UserOfflineMessage"><?php if($onn==1){ echo '[ Online ]';}else{echo '[ Offline ]';} ?></span>
                
            </div>
        </div>
        <div>
            <div>
                <div class="UserPaneContainer">
                    <div style="margin-bottom: 10px;">
                        
                    </div>
                        

<div id="UserAvatar" class="thumbnail-holder" data-3d-thumbs-enabled="" data-url="/web/20141009134408oe_/http://www.roblox.com/thumbnail/user-avatar?userId=68647&amp;thumbnailFormatId=124&amp;width=352&amp;height=352">
    <span class="thumbnail-span" data-3d-url="/avatar-thumbnail-3d/json?userId=68647" data-js-files="http://js.rbxcdn.com/2cdabe2b5b7eb87399a8e9f18dd7ea05.js"><img alt="Dert41" class="" src="/get_avatar.php?id=<?php echo $id; ?>"></span>
</div>


                    <br>
                    

<div class="UserBlurb" style="margin-top: 10px; overflow-y: auto; max-height: 450px; ">
    Join Date: <?php echo $aeae; ?>
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
            
            



            
        </div>
        <br clear="all">
    </div>
    

                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
      </div>
   </body>
</html>