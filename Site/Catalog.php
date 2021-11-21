<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
      <?php 
        require_once "DiscordEmbed.php";
        $discordembed = new DiscordEmbed(); 
        $discordembed->NormalEmbed("Catalog", "https://squared.cf/Catalog.aspx");
    ?>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php include_once "2014navbar.php"; ?>
		 <?php require_once "dbonly.php";
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
<?php
if (!isset($_GET['c'])) { // Cat. is category, not pet xddd
        $cat = "hats";
    } else {
        $cat = $_GET['c'];
    }
    if(!isset($_GET['page'])) {
        $page = 1;
    }else{
        $page = $_GET['page'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["search"]) {
            $search = $ep->remove($_POST["search"]);
            //header('Location: /users?page' . $page . '&search=' . $search);
            echo"<META http-equiv=refresh content=0;URL=/catalog?page=$page&search=$search>";
        }
    }
	?>
         <div id="BodyWrapper">
		 
		 
		 <div id="RepositionBody">
                <div id="Body" style="width:970px;">
                    
    
<style type="text/css">
    #Body {
        padding: 10px;
    }
</style>
<div id="catalog" data-empty-search-enabled="true">
<div class="header" style="height:60px;">
        <div style="float:left;">
            <h1><a href="/web/20140531160547/http://www.roblox.com/catalog/" id="CatalogLink">Catalog</a></h1>
        </div>
    <div class="CatalogSearchBar">
        <input id="keywordTextbox" name="name" type="text" class="translate text-box text-box-small">
        <div style="height:23px;border:1px solid #a7a7a7;padding:2px 2px 0px 2px;margin-right:6px;float:left;position:relative">
            <select id="categoriesForKeyword" style="">
                    <option value="1">All Categories</option>
                    <option value="0">Featured</option>
                    <option value="2">Collectibles</option>
                    <option value="3">Clothing</option>
                    <option value="4">Body Parts</option>
                    <option value="5">Gear</option>
                    <option value="6">Models</option>
                    <option value="8">Decals</option>
                    <option value="9">Audio</option>
                    <option value="7">Plugins</option>
            </select>
        </div>
        <a id="submitSearchButton" href="#" class="btn-control btn-control-large top-level">Search</a>
    </div>
</div>


    <div class="left-nav-menu divider-right">



    <a id="BrowseCategoriesButton" class="browseDropdownButton hover roblox-hierarchicaldropdownbutton"></a>

<div id="dropdown" class="splashdropdownsplashdropdown roblox-hierarchicaldropdown">
    <ul id="dropdownUl" class="clearfix">

            <li class="subcategories" data-delay="never">
                <a href="#category=featured" class="assetTypeFilter" data-category="0">Featured</a>
                <ul class="slideOut" style="top: -1px; display: none;">
                    <li class="slideHeader" style="width: 135px;"><span>Featured Types</span></li>
                        <li style="width: 135px;"><a href="#category=featured" class="assetTypeFilter" data-types="0" data-category="0">All Featured Items</a></li>    
                        <li style="width: 135px;"><a href="#category=featured" class="assetTypeFilter" data-types="9" data-category="0">Featured Hats</a></li>    
                        <li style="width: 135px;"><a href="#category=featured" class="assetTypeFilter" data-types="5" data-category="0">Featured Gear</a></li>    
                        <li style="width: 135px;"><a href="#category=featured" class="assetTypeFilter" data-types="10" data-category="0">Featured Faces</a></li>    
                        <li style="width: 135px;"><a href="#category=featured" class="assetTypeFilter" data-types="11" data-category="0">Featured Packages</a></li>    
                </ul>
            </li>
        
            <li class="subcategories"><a href="#category=collectibles" class="assetTypeFilter collectiblesLink" data-category="2">Collectibles</a>
                <ul class="slideOut" style="top: -32px; display: none;">
                    <li class="slideHeader" style="width: 135px;"><span>Collectible Types</span></li>
                        <li style="width: 135px;"><a href="#category=collectibles" class="assetTypeFilter" data-types="2" data-category="2">All Collectibles</a></li>    
                        <li style="width: 135px;"><a href="#category=collectibles" class="assetTypeFilter" data-types="10" data-category="2">Collectible Faces</a></li>    
                        <li style="width: 135px;"><a href="#category=collectibles" class="assetTypeFilter" data-types="9" data-category="2">Collectible Hats</a></li>    
                        <li style="width: 135px;"><a href="#category=collectibles" class="assetTypeFilter" data-types="5" data-category="2">Collectible Gear</a></li>    
                </ul>
            </li>

            <li class="slideHeader DropdownDivider divider-bottom" data-delay="ignore"></li>

            <li data-delay="always">
                <a href="#category=all" class="assetTypeFilter" data-category="1">All Categories</a>
            </li>
        
            <li class="subcategories">
                <a href="#category=clothing" class="assetTypeFilter" data-category="3">Clothing</a>
                <ul class="slideOut" style="top: -97px; display: none;">
                    <li class="slideHeader"><span>Clothing Types</span></li>
                        <li><a href="#" class="assetTypeFilter" data-types="3" data-category="3">All Clothing</a></li>    
                        <li><a href="#" class="assetTypeFilter" data-types="9" data-category="3">Hats</a></li>    
                        <li><a href="#" class="assetTypeFilter" data-types="12" data-category="3">Shirts</a></li>    
                        <li><a href="#" class="assetTypeFilter" data-types="13" data-category="3">T-Shirts</a></li>    
                        <li><a href="#" class="assetTypeFilter" data-types="14" data-category="3">Pants</a></li>    
                        <li><a href="#" class="assetTypeFilter" data-types="11" data-category="3">Packages</a></li>    
                </ul>
            </li>
        
            <li class="subcategories"><a href="#category=bodyparts" class="assetTypeFilter" data-category="4">Body Parts</a>
                <ul class="slideOut" style="top: -128px; display: none;">
                    <li class="slideHeader" style="width: 135px;"><span>Body Part Types</span></li>
                        <li style="width: 135px;"><a href="#category=bodyparts" class="assetTypeFilter" data-types="4" data-category="4">All Body Parts</a></li>    
                        <li style="width: 135px;"><a href="#category=bodyparts" class="assetTypeFilter" data-types="15" data-category="4">Heads</a></li>    
                        <li style="width: 135px;"><a href="#category=bodyparts" class="assetTypeFilter" data-types="10" data-category="4">Faces</a></li>    
                        <li style="width: 135px;"><a href="#category=bodyparts" class="assetTypeFilter" data-types="11" data-category="4">Packages</a></li>    
                </ul>
            </li>
        
            <li class="subcategories"><a href="#category=gear" class="assetTypeFilter" data-category="5">Gear</a>
                <ul class="slideOut" style="top: -159px; width: auto; display: none;">
                    <div>
                        <li class="slideHeader" style="width: 150px;"><span>Gear Categories</span></li>
                            <li><a href="#geartype=All Gear" class="gearFilter" data-category="5" data-types="All">All Gear</a></li>
                            <li><a href="#geartype=Melee Weapon" class="gearFilter" data-category="5" data-types="1">Melee Weapon</a></li>
                            <li><a href="#geartype=Ranged Weapon" class="gearFilter" data-category="5" data-types="2">Ranged Weapon</a></li>
                            <li><a href="#geartype=Explosive" class="gearFilter" data-category="5" data-types="3">Explosive</a></li>
                            <li><a href="#geartype=Power Up" class="gearFilter" data-category="5" data-types="4">Power Up</a></li>
                            <li><a href="#geartype=Navigation Enhancer" class="gearFilter" data-category="5" data-types="5">Navigation Enhancer</a></li>
                            <li><a href="#geartype=Musical Instrument" class="gearFilter" data-category="5" data-types="6">Musical Instrument</a></li>
                    </div>
                    <div id="gearSecondColumn">
                            <li><a href="#geartype=Social Item" class="gearFilter" data-category="5" data-types="7">Social Item</a></li>
                            <li><a href="#geartype=Building Tool" class="gearFilter" data-category="5" data-types="8">Building Tool</a></li>
                            <li><a href="#geartype=Personal Transport" class="gearFilter" data-category="5" data-types="9">Personal Transport</a></li>

                    </div>
                </ul>
            </li>
        
            <li>
                <a href="#category=models" class="assetTypeFilter " data-category="6">Models</a>
            </li>
                    <li>
                <a href="#category=decals" class="assetTypeFilter " data-category="8">Decals</a>
            </li>
                    <li>
                <a href="#category=audio" class="assetTypeFilter " data-category="9">Audio</a>
            </li>
                    <li>
                <a href="#category=plugins" class="assetTypeFilter " data-category="7">Plugins</a>
            </li>
    </ul>
</div>
<div id="legend" class="">
    <div class="header expanded" id="legendheader">
        <h3>Legend</h3>
    </div>
    <div id="legendcontent" style="overflow: hidden; ">
        <img src="/img/d649b9c54a08dcfa76131d123e7d8acc.png" style="margin-left: -13px">
        <div class="legendText"><b>Limited Unique Items</b><br>
        A limited supply originally sold by the item creator. Each unit is labeled with a serial number. Once sold out, owners can re-sell them to other users.
        </div>
    </div>
</div>                           
    </div>
    <div class="right-content divider-left">
        <h2>Featured Items on SQUARED</h2>
        <div style="clear:both;"></div>
        
        
        









        <div style="clear:both"></div>

































<?php
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
        return "$sec seconds ago";
    } elseif ($min <= 60) {
        if($min==1) {
            return "1 minute ago";
        }
        else {
            return "$min minutes ago";
        }
    } elseif ($hrs <= 24) {
        if($hrs == 1) {
            return "1 hour ago";
        }
        else {
            return "$hrs hours ago";
        }
    } elseif ($days <= 7) {
        if($days == 1) {
            return "Yesterday";
        }
        else {
            return "$days days ago";
        }
    } elseif ($weeks <= 4.3) {
        if($weeks == 1) {
            return "1 week ago";
        }
        else {
            return "$weeks weeks ago";
        }
    } elseif ($mnths <= 12) {
        if($mnths == 1) {
            return "1 month ago";
        }
        else {
            return "$mnths months ago";
        }
    } else {
        if($yrs == 1) {
            return "1 year ago";
        }
        else {
            return "$yrs years ago";
        }
    }
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

        $resultsperpage = 9;

        if($cat == "hats") {
            $sql = "SELECT count(*) FROM `assets` WHERE itemname LIKE '%$search%' AND assettype = 'hat'";
        }
        if($cat == "shirts") {
            $sql = "SELECT count(*) FROM `assets` WHERE itemname LIKE '%$search%' AND assettype = 'shirt'";
        }
        if($cat == "pants") {
            $sql = "SELECT count(*) FROM `assets` WHERE itemname LIKE '%$search%' AND assettype = 'pants'";
        }
        if($cat == "tshirts") {
            $sql = "SELECT count(*) FROM `assets` WHERE itemname LIKE '%$search%' AND assettype = 'pants'";
        }
        if($cat == "faces") {
            $sql = "SELECT count(*) FROM `assets` WHERE itemname LIKE '%$search%' AND assettype = 'face'";
        }
        $result = $db2->prepare($sql);
        $result->execute();
        $itemcount = $result->fetchColumn();

        $numberofpages = ceil($itemcount/$resultsperpage);

        if($page < 1) $page = 1;
        $thispagefirstresult = ($page-1)*$resultsperpage;
        $lol = $db2->prepare("SELECT * FROM assets WHERE itemname LIKE '%$search%' AND assettype = 'hat' ORDER BY id DESC LIMIT " . $thispagefirstresult . "," . $resultsperpage);
        if($cat == "hats") {
            $lol = $db2->prepare("SELECT * FROM assets WHERE itemname LIKE '%$search%' AND assettype = 'hat' ORDER BY id DESC LIMIT " . $thispagefirstresult . "," . $resultsperpage);
        }
        if($cat == "shirts") {
            $lol = $db2->prepare("SELECT * FROM assets WHERE itemname LIKE '%$search%' AND assettype = 'shirt' ORDER BY id DESC LIMIT " . $thispagefirstresult . "," . $resultsperpage);
        }
        if($cat == "tshirts") {
            $lol = $db2->prepare("SELECT * FROM assets WHERE itemname LIKE '%$search%' AND assettype = 'tshirt' ORDER BY id DESC LIMIT " . $thispagefirstresult . "," . $resultsperpage);
        }
        if($cat == "pants") {
            $lol = $db2->prepare("SELECT * FROM assets WHERE itemname LIKE '%$search%' AND assettype = 'pants' ORDER BY id DESC LIMIT " . $thispagefirstresult . "," . $resultsperpage);
        }
        if($cat == "faces") {
            $lol = $db2->prepare("SELECT * FROM assets WHERE itemname LIKE '%$search%' AND assettype = 'face' ORDER BY id DESC LIMIT " . $thispagefirstresult . "," . $resultsperpage);
        }

        $lol->execute();
        if($itemcount < 1) {
            echo '
    <div class="alert alert-danger" style="width: 100rem;" role="alert">
    Nothing found.
    </div>';
        }
        while ($row = $lol->fetch())
        {
            $itemname = $ep->remove($row['itemname']);
            $updated = updated($row['madeat']);
            echo '

<div class="CatalogItemOuter SmallOuter">
<div class="SmallCatalogItemView SmallView">
<div class="CatalogItemInner SmallInner">    
    <div class="roblox-item-image image-small" data-item-id="27112438" data-image-size="small"><div style="position: relative; overflow: hidden;"><a href="/Item.aspx?id='.$row['id'].'"><img height="110" width="110" title="'.$row['itemname'].'" alt="'.$row['itemname'].'" border="0" class="original-image" src="'.$row['thumbnail'].'"></a></div></div>
        
    <div id="textDisplay">
    <div class="CatalogItemName notranslate"><a class="name notranslate" href="/Item.aspx?id='.$row['id'].'" title="' . $row['itemname'] . '">'.$row['itemname'].'</a></div>
            <div class="robux-price"><span class="robux notranslate">'.$row['price'].'</span></div>
    </div>
    <div class="CatalogHoverContent">
        <div><span class="CatalogItemInfoLabel">Creator:</span> <span class="HoverInfo notranslate"><a href="/User.aspx?id='.$row['ownerid'].'">'.file_get_contents("https://squared.cf/gufID.php?id=".$row['ownerid']).'</a></span></div>
        <div><span class="CatalogItemInfoLabel">Updated:</span> <span class="HoverInfo">' . $updated . ' ago</span></div>
        <div><span class="CatalogItemInfoLabel">Sales:</span> <span class="HoverInfo notranslate">'.$row['sales'].'</span></div>
    </div>

</div>
</div>	
</div>';
        }
        ?>






        <div style="clear:both;padding-top: 50px;text-align:center;font-weight: bold;">
            <a href="#featured=all" class="assetTypeFilter" data-category="Featured">See all featured items</a>
        </div>
    </div>
    <div style="clear:both"></div>
</div>

<![endif]-->
   
                    <div style="clear:both"></div>
                </div>
            </div>
		 
		 
            </div>
         </div>
         <?php include "2014footer.php" ?>
      </div>
   </body>
</html>