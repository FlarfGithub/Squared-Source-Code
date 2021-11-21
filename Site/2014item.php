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
                <div id="Body" style="width:1020px;">
                    
    <div id="ItemContainer" class="text">
        <div>
            <div id="ctl00_cphRoblox_GearDropDown" class="SetList ItemOptions invisible" data-isdropdownhidden="True" data-isitemlimited="False" data-isitemresellable="False">
                <a href="#" class="btn-dropdown">
                    <img src="https://web.archive.org/web/20140612095841im_/http://images.rbxcdn.com/ea51d75440715fc531fc3ad281c722f3.png">
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
                Robloxian 2.0
            </h1>
            <h3>
                ROBLOX Package
                
            </h3>
        </div>
        <div id="Item">
            <div id="Details">
                
                        <div id="assetContainer">
                            <div id="Thumbnail">
                                <a id="ctl00_cphRoblox_AssetThumbnailImage" disabled="disabled" class="AssetThumbnailImage" title="Robloxian 2.0" onclick="return false" style="display:inline-block;height:320px;width:320px;"><img src="https://web.archive.org/web/20140612095841im_/http://t3.rbxcdn.com/450d3da4d60658a15662b113b2aaba69" height="320" width="320" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Robloxian 2.0" class="AssetThumbnailImage"></a>
                                
                                
                                
								
								
                            </div>
                        </div>
                    
                <div id="Summary">
                    <div class="SummaryDetails">
                        <div id="Creator" class="Creator">
                            <div class="Avatar">
                                
                                <a id="ctl00_cphRoblox_AvatarImage" class=" notranslate" title="ROBLOX" href="/web/20140612095841/http://www.roblox.com/User.aspx?ID=1" style="display:inline-block;height:70px;width:70px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t4.rbxcdn.com/9da6fcdd5269a96226d5be1ce0d238a1" height="70" width="70" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="ROBLOX" class=" notranslate"><img src="/web/20140612095841im_/http://www.roblox.com/images/icons/overlay_tbcOnly.png" align="left" style="position:relative;top:-19px;"></a>
                            </div>
                        </div>
                        <div class="item-detail">
                            <span class="stat-label notranslate">Creator:</span>
                            <a id="ctl00_cphRoblox_CreatorHyperLink" class="stat notranslate" href="User.aspx?ID=1">ROBLOX</a>
                            
                            <div>
                                <span class="stat-label">Created:</span>
                                <span class="stat">
                                    5/14/2010
                                </span>
                            </div>
                            <div id="LastUpdate">
                                <span class="stat-label">Updated:</span>
                                <span class="stat">
                                    3 months ago
                                </span>
                                </div>
                                
                                 
                        </div>
                        <div id="ctl00_cphRoblox_DescriptionPanel" class="DescriptionPanel notranslate">
	
                            <pre class="Description Full text">The first official ROBLOX body package. You get a cool new set of arms, leg, and a torso - all for one money!!!</pre>
                            <pre class="Description body text">The first official ROBLOX body package. You get a cool new set of arms, leg, and a torso - all for one money!!!</pre>
                        
</div>
                        <div class="ReportAbuse">
                            <div id="ctl00_cphRoblox_AbuseReportButton1_AbuseReportPanel" class="ReportAbuse">
	
    <span class="AbuseIcon"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseIconHyperLink" href="abusereport/asset?id=27112438&amp;RedirectUrl=http%3a%2f%2fwww.roblox.com%2fitem.aspx%3fseoname%3dRobloxian-2-0%26id%3d27112438"><img src="/web/20140612095841im_/http://www.roblox.com/images/abuse.PNG?v=2" alt="Report Abuse" style="border-width:0px;"></a></span>
    <span class="AbuseButton"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseTextHyperLink" href="abusereport/asset?id=27112438&amp;RedirectUrl=http%3a%2f%2fwww.roblox.com%2fitem.aspx%3fseoname%3dRobloxian-2-0%26id%3d27112438">Report Abuse</a></span>

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
                <div><a href="/web/20140612095841/http://www.roblox.com/all-games">All</a></div>
            
	</div>
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
            
        
    <div style="clear:both;"></div>
</div>
                                    </div>
                                
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
                                            15
                                        </span>
                                        
                                    </div>
                                    <div id="BuyWithRobux">
                                        <div data-expected-currency="1" data-asset-type="Package" class="btn-primary btn-medium PurchaseButton " data-se="item-buyforrobux" data-item-name="Robloxian 2.0" data-item-id="27112438" data-expected-price="15" data-product-id="4492352" data-expected-seller-id="1" data-bc-requirement="0" data-seller-name="ROBLOX">
                                             Buy with R$
                                             <span class="btn-text">Buy with R$</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            
                            
                            
                            
                            <div class="clear">
                            </div>
                            <div class="footnote">
	                            
                                
                                <div id="ctl00_cphRoblox_Sold">
                                    (<span data-se="item-numbersold">1205259</span> 
                                    Sold)
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <span>
                                <span class="FavoriteStar" data-se="item-numberfavorited">
                                    111,881 
                                </span>
                                
                        </span>

                        
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
            <div id="Tabs">
                <ul id="TabHeader" class="WhiteSquareTabsContainer">
                      
                            <li id="RecommendationsTabHeader" contentid="RecommendationsTab" class="SquareTabGray ItemTabs selected">
                                                <span><a id="RecommendationsLink" href="#RecommendationsTab">
                                                    Recommendations</a></span></li>
                      
                      <li id="CommentaryTabHeader" contentid="CommentaryTab" class="SquareTabGray ItemTabs ">
                                                <span><a id="CommentaryLink" href="#CommentaryTab">
                                                    Commentary</a></span></li>
                </ul>
                <div class="StandardPanelContainer">
                    <div id="RecommendationsTab" class="StandardPanelWhite TabContent selected">
                        

    <div class="AssetRecommenderContainer">
    <table id="ctl00_cphRoblox_AssetRec_dlAssets" cellspacing="0" align="Center" border="0" style="height:175px;width:800px;border-collapse:collapse;">
	<tbody><tr>
		<td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-0">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl00_AssetThumbnailHyperLink" class=" notranslate" title="Mechabloxxer" href="/web/20140612095841/http://www.roblox.com/Mechabloxxer-item?id=45093397" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t4.rbxcdn.com/b39d094d42becf2f536ae3ce3d1636e7" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Mechabloxxer" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl00_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Mechabloxxer-item?id=45093397">Mechabloxxer</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl00_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-1">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl01_AssetThumbnailHyperLink" class=" notranslate" title="Football Player" href="/web/20140612095841/http://www.roblox.com/Football-Player-item?id=39977366" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t6.rbxcdn.com/db318e1ce43d89790ead58755799ba94" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Football Player" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl01_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Football-Player-item?id=39977366">Football Player</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl01_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-2">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl02_AssetThumbnailHyperLink" class=" notranslate" title="Ice Golem" href="/web/20140612095841/http://www.roblox.com/Ice-Golem-item?id=68602934" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t3.rbxcdn.com/b85a655c777ff507eceacc19c24a09e0" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Ice Golem" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl02_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Ice-Golem-item?id=68602934">Ice Golem</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl02_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-3">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl03_AssetThumbnailHyperLink" class=" notranslate" title="Aphelion" href="/web/20140612095841/http://www.roblox.com/Aphelion-item?id=68804018" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t1.rbxcdn.com/179a3d007b4242f762c0255e5918daba" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Aphelion" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl03_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Aphelion-item?id=68804018">Aphelion</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl03_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-4">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl04_AssetThumbnailHyperLink" class=" notranslate" title="Dilophosaurus" href="/web/20140612095841/http://www.roblox.com/Dilophosaurus-item?id=68804654" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t2.rbxcdn.com/696b2c85848fda200e9cd8832a58c0ca" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Dilophosaurus" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl04_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Dilophosaurus-item?id=68804654">Dilophosaurus</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl04_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td>
	</tr><tr>
		<td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-5">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl05_AssetThumbnailHyperLink" class=" notranslate" title="Empyrean Armor " href="/web/20140612095841/http://www.roblox.com/Empyrean-Armor-item?id=77517729" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t7.rbxcdn.com/10673c87b63c6016ab741ecd7a4dfbf5" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Empyrean Armor " class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl05_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Empyrean-Armor-item?id=77517729">Empyrean Armor </a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl05_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-6">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl06_AssetThumbnailHyperLink" class=" notranslate" title="Team ROBLOX" href="/web/20140612095841/http://www.roblox.com/Team-ROBLOX-item?id=142463829" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t3.rbxcdn.com/a9d1eeaf26630009baa71504e70ff1a9" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Team ROBLOX" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl06_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Team-ROBLOX-item?id=142463829">Team ROBLOX</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl06_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-7">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl07_AssetThumbnailHyperLink" class=" notranslate" title="Agent 53" href="/web/20140612095841/http://www.roblox.com/Agent-53-item?id=55717536" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t5.rbxcdn.com/78ef2ac223d70ec3dacde3a5cd210fbc" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Agent 53" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl07_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Agent-53-item?id=55717536">Agent 53</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl07_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-8">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl08_AssetThumbnailHyperLink" class=" notranslate" title="Polar Bear" href="/web/20140612095841/http://www.roblox.com/Polar-Bear-item?id=137715213" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t2.rbxcdn.com/fd133ddb5db57b05227069698e9dfa93" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Polar Bear" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl08_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Polar-Bear-item?id=137715213">Polar Bear</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl08_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td><td>
            <div class="PortraitDiv" style="width: 140px;overflow: hidden;margin:auto;" visible="True" data-se="recommended-items-9">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl09_AssetThumbnailHyperLink" class=" notranslate" title="Firefighter" href="/web/20140612095841/http://www.roblox.com/Firefighter-item?id=107451588" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20140612095841im_/http://t6.rbxcdn.com/3b02b5d85d7d67a33ca3e15ee05fc726" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Firefighter" class=" notranslate"></a>
                </div>
                <div class="AssetDetails">
                    <div class="AssetName noTranslate">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl09_AssetNameHyperLinkPortrait" href="/web/20140612095841/http://www.roblox.com/Firefighter-item?id=107451588">Firefighter</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="stat-label">Creator:</span> <span class="Detail stat"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl09_CreatorHyperLinkPortrait" class="notranslate" href="User.aspx?ID=1">ROBLOX</a></span>
                    </div>
                </div>
            </div>
        </td>
	</tr>
</tbody></table>
    
</div>

<script type="text/javascript">
    $(function () {
        var itemNames = $('.PortraitDiv .AssetDetails .AssetName a');
        $.each(itemNames, function (index) {
            var elem = $(itemNames[index]);
            elem.html(fitStringToWidthSafe(elem.html(), 200));
        });
        var userNames = $('.PortraitDiv .AssetDetails .AssetCreator .Detail a');
        $.each(userNames, function (index) {
            var elem = $(userNames[index]);
            elem.html(fitStringToWidthSafe(elem.html(), 70));
        });
    });
</script>

                    </div>
                    <div id="CommentaryTab" class="StandardPanelWhite TabContent ">
                        <div id="ctl00_cphRoblox_CommentsPane_CommentsUpdatePanel">
	
        <div id="AjaxCommentsPaneData"></div>

        <div class="AjaxCommentsContainer">
            
            <div class="Comments" data-asset-id="27112438"></div>
            
            <div class="CommentsItemTemplate">
                    <div class="Comment text">
                        <div class="Commenter">
                            <div class="Avatar" data-user-id="%CommentAuthorID" data-image-size="small">
                            </div>
                        </div>
                        <div class="PostContainer">
                            <div class="Post">
                                <div class="Audit">
                                    <span class="ByLine footnote"><div class="UserOwnsAsset" title="User has this item" alt="User has this item" style="display:none;"></div>Posted %CommentCreated ago by <a href="/web/20140612095841/http://www.roblox.com/user.aspx?id=%CommentAuthorID">%CommentAuthor</a></span>
                                    <div class="ReportAbuse">
                                        <span class="AbuseButton">
                                            <a href="AbuseReport/Comment.aspx?ID=%CommentID&amp;RedirectUrl=%PageURL">Report Abuse</a>
                                        </span>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="Content">
                                    %CommentContent
                                </div>
                                <div id="Actions" class="Actions">
                                    <a data-comment-id="%CommentID" class="DeleteCommentButton">Delete Comment</a>
                                </div>
                            </div>
                            <div class="PostBottom"></div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
        </div>

</div>

<script type="text/javascript">
    Roblox.CommentsPane.Resources = {
        //<sl:translate>
        defaultMessage:         'Write a comment!',
        noCommentsFound:		'No comments found.',
        moreComments:			'More comments',
        sorrySomethingWentWrong:'Sorry, something went wrong.',
        charactersRemaining:	' characters remaining',
        emailVerifiedABTitle:	'Verify Your Email',
        emailVerifiedABMessage: "You must verify your email before you can comment. You can verify your email on the <a href='/My/Account.aspx?confirmemail=1'>Account</a> page.",
        linksNotAllowedTitle:   'Links Not Allowed',
        linksNotAllowedMessage: 'Comments should be about the item or place on which you are commenting. Links are not permitted.',
        accept:					'Verify',
        decline:				'Cancel',
        tooManyCharacters:		'Too many characters!',
        tooManyNewlines:		'Too many newlines!'
        //</sl:translate>
       };

       Roblox.CommentsPane.Limits =
       [	{ limit: '10'
            , character: "\n"
            , message: Roblox.CommentsPane.Resources.tooManyNewlines
            }
       ,	{ limit: '200'
            , character: undefined
            , message: Roblox.CommentsPane.Resources.tooManyCharacters
            }
       ];

       Roblox.CommentsPane.FilterIsEnabled = true;
       Roblox.CommentsPane.FilterRegex = "(([a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}[:\\#/\?]+)|([a-zA-Z0-9]\\.[a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}))";
       Roblox.CommentsPane.FilterCleanExistingComments = false;

    Roblox.CommentsPane.initialize();
</script>

                    </div>
                </div>
            </div>
            
            <div id="FreeGames">
                <div class="SEOLinksContainer"><span><b>Other free games and items:</b></span><ul class="freegames"><li><a class="notranslate" href="/web/20140612095841/http://www.roblox.com/nuclear-testing-base-item?id=27112338" title="Free Games: nuclear testing base">nuclear testing base</a></li><li><a class="notranslate" href="/web/20140612095841/http://www.roblox.com/an1234567890s-Place-place?id=27112428" title="Free Games: an1234567890" s="" place'="">an1234567890's Place</a></li><li><a class="notranslate" href="/web/20140612095841/http://www.roblox.com/build-to-survive-place?id=27112437" title="Free Games: build to survive">build to survive</a></li><li><a class="notranslate" href="/web/20140612095841/http://www.roblox.com/Jesus-Rules-Jesus-Fusion-T-Shirt-Pants-item?id=27112439" title="Free Games: Jesus Rules-Jesus Fusion T-Shirt Pants!">Jesus Rules-Jesus Fusion T-Shirt Pants!</a></li><li><a class="notranslate" href="/web/20140612095841/http://www.roblox.com/White-Assassins-Creed-Cloak-item?id=27112448" title="Free Games: White Assassins Creed Cloak">White Assassins Creed Cloak</a></li><li><a class="notranslate" href="/web/20140612095841/http://www.roblox.com/Rangers-Soldier-item?id=27112538" title="Free Games: Rangers Soldier">Rangers Soldier</a></li></ul></div></div>
        </div>
        
        <div class="clear">
        </div>
    </div>
    
    
    

<div id="ItemPurchaseAjaxData" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-balance-tickets="0" data-user-bc="0" data-continueshopping-url="http://www.roblox.com/Catalog/" data-imageurl="http://t7.rbxcdn.com/4e83eb297396e6306dc7246e74df001f" data-alerturl="http://images.rbxcdn.com/cbb24e0c0f1fb97381a065bd1e056fcb.png" data-builderscluburl="http://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png"></div>

    <div id="ProcessingView" style="display:none">
        <div class="ProcessingModalBody">
            <p style="margin:0px"><img src="https://web.archive.org/web/20140612095841im_/http://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Processing..."></p>
            <p style="margin:7px 0px">Processing Transaction</p>
        </div>
    </div>
    
    <script type="text/javascript">
        //<sl:translate>
        Roblox.ItemPurchase.strings = {
            insufficientFundsTitle : "Insufficient Funds",
            insufficientFundsText : "You need {0} more to purchase this item.",
            cancelText : "Cancel",
            okText : "OK",
            buyText : "Buy",
            buyTextLower : "buy",
            tradeCurrencyText : "Trade Currency",
            priceChangeTitle : "Item Price Has Changed",
            priceChangeText : "While you were shopping, the price of this item changed from {0} to {1}.",
            buyNowText : "Buy Now",
            buyAccessText: "Buy Access",
            buildersClubOnlyTitle : "{0} Only",
            buildersClubOnlyText : "You need {0} to buy this item!",
            buyItemTitle : "Buy Item",
            buyItemText : "Would you like to {0} {5}the {1} {2} from {3} for {4}?",
            balanceText : "Your balance after this transaction will be {0}",
            freeText : "Free",
            purchaseCompleteTitle : "Purchase Complete!",
            purchaseCompleteText : "You have successfully {0} {5}the {1} {2} from {3} for {4}.",
            continueShoppingText : "Continue Shopping",
            customizeCharacterText : "Customize Character",
            orText : "or",
            rentText : "rent",
            accessText: "access to "
        }
    //</sl:translate>
    </script>


    

    

    <div id="ctl00_cphRoblox_CreateSetPanelDiv" class="createSetPanelPopup">
	
        
    
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
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://web.archive.org/web/20140612095841im_/http://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png">
            <div id="BCMessageDiv" class="BCMessage Message">
                You need  to buy this item!
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="/web/20140612095841/http://www.roblox.com/Upgrades/BuildersClubMemberships.aspx" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#NULL').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

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
            <p style="margin:0px"><img src="https://web.archive.org/web/20140612095841im_/http://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Installing Plugin..."></p>
            <p class="processing-text" style="margin:7px 0px">Installing Plugin...</p>
        </div>
    </div>
    <div id="UpdatingPluginView" class="processing-view" style="display:none">
        <div class="ProcessingModalBody">
            <p style="margin:0px"><img src="https://web.archive.org/web/20140612095841im_/http://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Updating Plugin..."></p>
            <p class="processing-text" style="margin:7px 0px">Updating Plugin...</p>
        </div>
    </div>
    <script type="text/javascript"> 
        Roblox.Resources = {};
        Roblox.Resources.PlaceProductPromotion = {
            //<sl:translate>
            anErrorOccurred: 'An error occurred, please try again.'
            , youhaveAdded: "You have added "
            , toYourGame: " to your game, "
            , youhaveRemoved: "You have removed "
            , fromYourGame: " from your game, "
            , ok: "OK"
            , success: "Success!"
            , error: "Error"
            , sorryWeCouldnt: "Sorry, we couldn't remove the item from your game. Please try again."
	        , notForSale: "This item is not for sale."
	        , rent: "Rent"
            //</sl:translate>
        };
        $(function() {
            Roblox.Resources.PluginInstallation = {
                //<sl:translate>
                errorTitle: "Error Installing Plugin",
                errorBody: "There was a problem installing this plugin. Please try again later.",
                successTitle: "Plugin Installed",
                successBody: " has been successfully installed! Please open a new window to begin using this plugin.",
                ok: "OK",
                reinstall: "Reinstall",
                updateErrorTitle: "Error Updating Plugin",
                updateErrorBody: "There was a problem updating this plugin. Please try again later.",
                updateSuccessTitle: "Plugin Update",
                updateSuccessBody: " has been successfully updated! Please open a new window for the changes to take effect.",
                update: "Update",
                //</sl:translate>
                alertImageUrl: 'https://web.archive.org/web/20140612095841/http://images.rbxcdn.com/cbb24e0c0f1fb97381a065bd1e056fcb.png'
            };
        
            var commentsLoaded = false;

            //Tabs
            function SwitchTabs(nextTabElem) {
                $('.WhiteSquareTabsContainer .selected,  .TabContent.selected').removeClass('selected');
                nextTabElem.addClass('selected');
                $('#' + nextTabElem.attr('contentid')).addClass('selected');

                var label = $.trim(nextTabElem.attr('contentid'));
                if(label == "CommentaryTab" && !commentsLoaded) {
                    Roblox.CommentsPane.getComments(0);
                    commentsLoaded = true;
                    if(Roblox.SuperSafePrivacyMode != undefined) {
                        Roblox.SuperSafePrivacyMode.initModals();
                    }
                    return false;
                }
            }
            
            $('.WhiteSquareTabsContainer li').bind('click', function (event) {
                event.preventDefault();
                SwitchTabs($(this));
            });
        
            
            function confirmDelete() {
                Roblox.GenericConfirmation.open({
                    //<sl:translate>
                    titleText: "Delete Item",
                    bodyContent: "Are you sure you want to permanently DELETE this item from your inventory?",
                    //</sl:translate>
                    onAccept: function () {
                        javascript: __doPostBack('ctl00$cphRoblox$btnDelete', '');
                    },
                    acceptColor: Roblox.GenericConfirmation.blue,
                    //<sl:translate>
                    acceptText: "OK"
                    //</sl:translate>
                });
            }

            function confirmSubmit() {
                Roblox.GenericConfirmation.open({
                    //<sl:translate>
                    titleText: "Create New Badge Giver",
                    bodyContent: "This will add a new badge giver model to your inventory. Are you sure you want to do this?",
                    //</sl:translate>
                    onAccept: function () {
                        window.location.href = $('#ctl00_cphRoblox_btnSubmit').attr('href');
                    },
                    acceptColor: Roblox.GenericConfirmation.blue,
                    //<sl:translate>
                    acceptText: "OK"
                    //</sl:translate>
                });
            }

            $('#ctl00_cphRoblox_btnDelete').click(function() {
                confirmDelete();
                return false;
            });

            $('div.Ownership input').click(function() {
                confirmSubmit();
                return false;
            });

            modalProperties = { escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000"} };
        
            // Code for Modal Popups and Plugin initialization
            
                $(".btn-disabled-primary").removeClass("Button").tipsy({ gravity: 's' }).attr("href", "javascript: return false;");
        });
        function ModalClose(popup) {
            $.modal.close('.' + popup);
        }
    </script>

                    <div style="clear:both"></div>
                </div>
        </div>
        </div>
   </body>
</html>