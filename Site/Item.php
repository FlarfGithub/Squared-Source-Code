<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="https://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
      <?php
include_once "connect.php";
			$aid = null;
			if (!isset($_GET['id'])){
				header('Location: 404');
			}else{
				$aid = $_GET['id'];
			}
			$conn = new mysqli($host, $db_user, $db_password);
			$conn->select_db($db_name);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT * FROM assets WHERE id='".$aid."'";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
					$kaka = $row['itemname'];
					$womo = $row['sales'];
					$madeby = $row['ownerid'];
					$desc=$row['desc'];
					$ghhh=$row['madeat'];
					$thgt =$row['thumbnail'];
					break;
			  }
			} else {
			    header('Location: 404');
				die();
			}
			$conn->close();
			function updated($time) {
    $diff = time() - strtotime($time);
    $sec = $diff;
    $min = round($diff / 60 );
    $hrs = round($diff / 3600);
    $days = round($diff / 86400 );
    $weeks = round($diff / 604800);
    $mnths = round($diff / 2600640 );
    $yrs = round($diff / 31207680 );
    if ($sec <= 60) {
        echo "$sec seconds ago";
    } elseif ($min <= 60) {
        if($min==1) {
            echo "1 minute ago";
        }
        else {
            echo "$min minutes ago";
        }
    } elseif ($hrs <= 24) {
        if($hrs == 1) {
            echo "1 hour ago";
        }
        else {
            echo "$hrs hours ago";
        }
    } elseif ($days <= 7) {
        if($days == 1) {
            echo "Yesterday";
        }
        else {
            echo "$days days ago";
        }
    } elseif ($weeks <= 4.3) {
        if($weeks == 1) {
            echo "1 week ago";
        }
        else {
            echo "$weeks weeks ago";
        }
    } elseif ($mnths <= 12) {
        if($mnths == 1) {
            echo "1 month ago";
        }
        else {
            echo "$mnths months ago";
        }
    } else {
        if($yrs == 1) {
            echo "1 year ago";
        }
        else {
            echo "$yrs years ago";
        }
    }
}
?>
    <title><?php echo $kaka; ?> - Squared</title>
    <meta property="og:site_name" content="Squared">
    <meta property="og:title" content="<?php echo $kaka; ?> - Squared">
    <meta property="og:type" content="profile">
    <meta property="og:url" content="https://squared.cf/Item.aspx?id=<?php echo $_GET['id']; ?>">
    <meta property="og:description" content="<?php echo $desc; ?>">
    <meta property="og:image" content="<?php echo $thgt; ?>">
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php include_once "updatestuff.php"; ?>
         <?php include_once "2014navbar.php"; ?>
         <div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" style="width:970px;">
                    
    <div id="ItemContainer" class="text">
        <div>
            <div id="ctl00_cphRoblox_GearDropDown" class="SetList ItemOptions invisible" data-isdropdownhidden="True" data-isitemlimited="False" data-isitemresellable="False">
                <a href="#" class="btn-dropdown">
                    <img src="https://web.archive.org/web/20140707202504im_/https://images.rbxcdn.com/ea51d75440715fc531fc3ad281c722f3.png">
                </a>
                <div class="clear"></div>
                <div class="SetListDropDown">
                    <div class="SetListDropDownList invisible">
                        <div class="menu invisible">
                            
                            <div id="ctl00_cphRoblox_ItemOwnershipPanel">
	
                                <a id="ctl00_cphRoblox_btnDelete" class="invisible" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$btnDelete&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Delete from My Stuff</a>
                            
</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="notranslate" data-se="item-name">
                <?php echo $kaka; ?>
            </h1>
            <h3>
                SQUARED Item
                
            </h3>
        </div>
        <div id="Item">
            <div id="Details">
                
                        <div id="assetContainer">
                            <div id="Thumbnail">
                                <a id="ctl00_cphRoblox_AssetThumbnailImage" disabled="disabled" class="AssetThumbnailImage" title="Portable Beach" onclick="return false" style="display:inline-block;height:320px;width:320px;"><img src="<?php echo $thgt; ?>" height="320" width="320" border="0" onerror="return Roblox.Controls.Image.OnError(this)" class="AssetThumbnailImage"></a>
                                
                                
                                
								
								
                            </div>
                        </div>
                    
                <div id="Summary">
                    <div class="SummaryDetails">
                        <div id="Creator" class="Creator">
                            <div class="Avatar">
                                
                                <a id="ctl00_cphRoblox_AvatarImage" class=" notranslate" title="ROBLOX" href="/User.aspx?id=<?php echo $madeby; ?>" style="display:inline-block;height:70px;width:70px;cursor:pointer;"><img src="/get_avatar.php?id=<?php echo $madeby; ?>" height="70" width="70" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="ROBLOX" class=" notranslate"></a>
                            </div>
                        </div>
                        <div class="item-detail">
                            <span class="stat-label notranslate">Creator:</span>
                            <a id="ctl00_cphRoblox_CreatorHyperLink" class="stat notranslate" href="/User.aspx?id=<?php echo $madeby; ?>"><?php echo file_get_contents("https://squared.cf/gufID.php?id=".$madeby); ?></a>
                            
                            <div>
                                <span class="stat-label">Created:</span>
                                <span class="stat">
                                    <?php updated($ghhh); ?>
                                </span>
                            </div>
                                
                                 
                        </div>
                        <div id="ctl00_cphRoblox_DescriptionPanel" class="DescriptionPanel notranslate">
                            <pre class="Description body text"><?php echo $desc; ?></pre>
                        
</div>
                        <div class="ReportAbuse">
                            <div id="ctl00_cphRoblox_AbuseReportButton1_AbuseReportPanel" class="ReportAbuse">
	
    
</div>
                        </div>
                        
                        
                        
                        
                        
                        <div class="GearGenreContainer divider-top">
                            <div id="GenresDiv">
                                <div id="ctl00_cphRoblox_Genres">
	
                                    <div class="stat-label">
                                        Genres:</div>
                                    <div class="GenreInfo stat">
                                        

<div>
    
            <div id="ctl00_cphRoblox_GenresDisplayTest_AssetGenreRepeater_ctl00_AssetGenreRepeaterPanel" class="AssetGenreRepeater_Container">
		
                <div class="GamesInfoIcon All"></div>
                <div>All</div>
            
	</div>
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
    <div style="clear:both;"></div>
</div>
                                    </div>
                                
</div>
                            </div>
                            <div id="ctl00_cphRoblox_GearAttributes" class="GearDiv">
	
                                    
                                    <div class="stat">
                                        



                                        <div class="clear"></div>
                                    </div>
                            
</div>
                            <div class="clear"></div>
                        </div>
                        <div class="PluginMessageContainer" style="display: none;">
                            <p>
                                <span class="status-confirm">A newer version is available.</span>
                            </p>
                        </div>
                    </div>
                    <div class="BuyPriceBoxContainer">
                        <div class="BuyPriceBox">
                            
                            
                            
                            
                            
                            <div id="ctl00_cphRoblox_RobuxPurchasePanel">
                                <div id="RobuxPurchase">
                                    <div class="calloutParent">
                                        Price: <span class="robux " data-se="item-priceinrobux">
                                            150
                                        </span>
                                        
                                    </div>
                                    <div id="BuyWithRobux">
                                        <div data-expected-currency="1" data-asset-type="Gear" class="btn-primary btn-medium PurchaseButton " data-se="item-buyforrobux" data-item-name="Portable Beach" data-item-id="162857357" data-expected-price="150" data-product-id="20349590" data-expected-seller-id="1" data-bc-requirement="0" data-seller-name="ROBLOX">
                                             Buy
                                             <span class="btn-text">Buy</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            
                            
                            
                            
                            <div class="clear">
                            </div>
                            <div class="footnote">
	                            
                                
                                <div id="ctl00_cphRoblox_Sold">
                                    (<span data-se="item-numbersold"><?php echo $womo; ?></span> 
                                    Sold)
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                        
                    </div>
                    <div class="clear"></div>
                    <div class="SocialMediaContainer">
                        
                        
                    </div>
                </div>
                
                
                <div class="clear"></div>
            </div>
            
            <div class="PrivateSales divider-top invisible">
                <h2>Private Sales</h2>
                <div id="UserSalesTab">
                    
                    
                            <div class="empty">
                                Sorry, no one is privately selling this item at the moment.
                            </div>
                        
                    <div class="pgItemsForResale">
                        <span id="ctl00_cphRoblox_pgItemsForResale"><a disabled="disabled">First</a>&nbsp;<a disabled="disabled">Previous</a>&nbsp;<a disabled="disabled">Next</a>&nbsp;<a disabled="disabled">Last</a>&nbsp;</span>
                    </div>
                </div>
                
                
                <div class="clear"></div>
            </div>
            
            
            
        </div>
        
        <div class="clear">
        </div>
    </div>
    
    
    
    
     

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>

    

<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://web.archive.org/web/20140707202504im_/https://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png">
            <div id="BCMessageDiv" class="BCMessage Message">
                You need  to buy this item!
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="/web/20140707202504/https://www.roblox.com/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>  
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a> 
        </div>  
    </div>
</div>


    <div id="InstallingPluginView" class="processing-view" style="display:none">
        <div class="ProcessingModalBody">
            <p style="margin:0px"><img src="https://web.archive.org/web/20140707202504im_/https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Installing Plugin..."></p>
            <p class="processing-text" style="margin:7px 0px">Installing Plugin...</p>
        </div>
    </div>
    <div id="UpdatingPluginView" class="processing-view" style="display:none">
        <div class="ProcessingModalBody">
            <p style="margin:0px"><img src="https://web.archive.org/web/20140707202504im_/https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Updating Plugin..."></p>
            <p class="processing-text" style="margin:7px 0px">Updating Plugin...</p>
        </div>
    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        <?php include "2014footer.php" ?>
      </div>
      
   </body>
</html>