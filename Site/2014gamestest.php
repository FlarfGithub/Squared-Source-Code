<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
      <link rel="stylesheet" href="GamesCSS.css">
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
                    <div id="Body" style="width:auto; min-width:970px;">
                    





<div id="ResponsiveWrapper" data-worseperformanceenabled="False" data-worseperformancedelay="0">  

         
    
    <div id="GamesPageLeftColumn">


        <div id="GamesPageHeader">
            <h1><span class="games-filter-resetter">Games</span></h1>
        </div>

        
        <div id="FiltersAndSort" data-defaulttoppaidtoweekly="true" data-defaultweeklyratings="true">
            <div class="filter">
                <h3>Filter By: </h3>
                <select id="SortFilter" data-default="default">
                    <option data-hidetimefilter="" value="default">Default</option>
                    <option data-hidetimefilter="" value="0">Popular</option>
                        <option value="13">Top Points</option>
                    <option data-hidetimefilter="" value="8">Top Earning</option>
                    <option value="2">Top Favorite</option>
                    <option data-hidetimefilter="" data-hidegenrefilter="" value="3">Featured</option>
                    <option value="9">Top Paid</option>
                    <option value="11">Top Rated</option>
                </select>
            </div>

            <div class="filter">
                <h3>Time: </h3>
                <select id="TimeFilter" data-default="0" disabled="disabled">
                    <option value="0">Now</option>
                    <option value="1">Past Day</option>
                    <option value="2">Past Week</option>
                    <option value="4">All Time</option>
                </select>
            </div>

            <div class="filter">
                <h3>Genre: </h3>
                <select id="GenreFilter" data-default="1">
                        <option value="1">All</option>
                        <option value="13">Adventure</option>
                        <option value="19">Building</option>
                        <option value="15">Comedy</option>
                        <option value="10">Fighting</option>
                        <option value="20">FPS</option>
                        <option value="11">Horror</option>
                        <option value="8">Medieval</option>
                        <option value="17">Military</option>
                        <option value="12">Naval</option>
                        <option value="21">RPG</option>
                        <option value="9">Sci-Fi</option>
                        <option value="14">Sports</option>
                        <option value="7">Town and City</option>
                        <option value="16">Western</option>
                </select>
            </div>
            
            <div id="GamesPageSearch">
                <input id="searchbox" class="translate" type="text" name="search" style="color:#888;height:20px;" onkeypress="if (event.keyCode == 13) { return Roblox.GamesDisplayShared.search(); }">
                <div class="SearchIconButton" onclick="Roblox.GamesDisplayShared.search()"></div>
            </div>

        </div>

        <div id="GamesListsContainer">




<div class="games-list-container overflow-hidden" id="GamesListContainer0" data-sortfilter="0" data-gamefilter="1" data-minbclevel="0" style="height: 258px; cursor: auto;">
    <div class="games-list-header games-filter-changer">
	    <h2>Popular</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable" style="left: 0px;">
            


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/CLUB-NYONIC-IPhone-Stores-Surf-Tubes-Music-place?id=2746648">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/c58180263fc4cbf6a50abd8660d34a2f"></span>
            <div class="game-name notranslate">
                ☺CLUB NYONIC☺ ~ IPhone, Stores, Surf, Tu     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            4,029 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=608677">Nyonic</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">552,580</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,811 &nbsp;  |  &nbsp; 472<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/THE-MAD-MURDERER-Accessories-place?id=152594797">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/3d80ff4c0963a1a787820b57d602b8c1"></span>
            <div class="game-name notranslate">
                THE MAD MURDERER [+ Accessories]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            3,423 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2312310">loleris</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">3,998,706</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>13,355 &nbsp;  |  &nbsp; 2,225<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Different-Town-of-Robloxia-place?id=142468380">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/b7f624df34497a8927ae4645f7fea964"></span>
            <div class="game-name notranslate">
                Different Town of Robloxia!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            3,270 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=40265333">JuliusColesV2</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">5,526,684</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>6,744 &nbsp;  |  &nbsp; 2,044<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Survive-The-Disasters-97-Changed-Username-place?id=18540115">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/f1c58cebf37117992f1781c56d9f4c2f"></span>
            <div class="game-name notranslate">
                Survive The Disasters! [97] Changed User     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2,496 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=4307571">VyrissTheVixen</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">26,510,300</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>18,966 &nbsp;  |  &nbsp; 1,273<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/More-Furniture-Work-at-a-Pizza-Place-place?id=192800">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/6ef0144628d318e74a9232d71565834f"></span>
            <div class="game-name notranslate">
                [More Furniture] Work at a Pizza Place     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2,277 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=82471">Dued1</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">15,485,590</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>20,388 &nbsp;  |  &nbsp; 1,397<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Guest-Defense-FAST-PP-place?id=156495177">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/dbd7f6af3ed9d5dba575eae1a9ad269a"></span>
            <div class="game-name notranslate">
                Guest Defense : FAST PP     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,787 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=19717956">BuildIntoGames</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">390,557</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,686 &nbsp;  |  &nbsp; 925<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Apocalypse-Rising-place?id=1600503">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/54015a46d45693f86a2434fc567b5cd8"></span>
            <div class="game-name notranslate">
                Apocalypse Rising     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,638 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=281519">Gusmanak</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">17,591,196</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>28,613 &nbsp;  |  &nbsp; 2,573<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/The-Last-Man-Standing-CHEAPER-GAMEPASS-place?id=13859364">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/5aa7f0c52130f4c3424511218d0053bd"></span>
            <div class="game-name notranslate">
                The Last Man Standing [CHEAPER GAMEPASS!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,556 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1696905">Janlari</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">65,584</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>132 &nbsp;  |  &nbsp; 68<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Natural-Disaster-Survival-place?id=189707">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/4a41e9e57a18ad9c2381565eaaf52476"></span>
            <div class="game-name notranslate">
                Natural Disaster Survival     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,487 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=80254">stickmasterluke</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">16,538,180</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>17,958 &nbsp;  |  &nbsp; 1,115<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Framed-Beta-0-4-place?id=29812337">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/3e73a92097e2056231d91da99184205d"></span>
            <div class="game-name notranslate">
                Framed! - Beta 0.4     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,263 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=8387864">pa00</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">199,413</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,039 &nbsp;  |  &nbsp; 477<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Base-wars-Kill-Assist-Battle-Score-Patch-notes-place?id=18164449">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/c419fa9077dae7acc8d5f900faac73c9"></span>
            <div class="game-name notranslate">
                Base wars! [Kill Assist, Battle Score (P     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,212 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=5239900">d4rk886</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">32,722,165</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>14,820 &nbsp;  |  &nbsp; 2,433<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/POOL-PARTY-High-School-Life-Three-place?id=92604236">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/62e8a2e94c3bbdf71d75f88daa675f21"></span>
            <div class="game-name notranslate">
                [POOL PARTY!] High School Life Three!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,184 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=32172098">Devinoski</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">2,978,460</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>7,553 &nbsp;  |  &nbsp; 2,610<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:05 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:28 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  exclusion.robots: 0.418
  exclusion.robots.policy: 0.396
  RedisCDXSource: 2.299
  LoadShardBlock: 34.052 (3)
  CDXLines.iter: 37.85 (3)
  esindex: 0.021
  PetaboxLoader3.resolve: 31.032
  load_resource: 81.185
  captures_list: 80.429
  PetaboxLoader3.datanode: 46.926 (4)
-->


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Be-Crushed-By-A-Speeding-Wall-place?id=90267357">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/b5e587321a20172bf17b7da219c4bf89"></span>
            <div class="game-name notranslate">
                Be Crushed By A Speeding Wall     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,023 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=31244132">Digitalscape</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">177,316</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>544 &nbsp;  |  &nbsp; 455<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Survive-The-Creepy-Disasters-NEW-place?id=157684536">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/43df8b5c14f967c3d6856cd197d1f371"></span>
            <div class="game-name notranslate">
                Survive The Creepy Disasters! (NEW!)     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,017 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=56557282">Zaphirax</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">546,246</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>879 &nbsp;  |  &nbsp; 665<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Paintball-FIXED-place?id=4175379">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/01b3d9360c8c2b25c3886aa89fc99591"></span>
            <div class="game-name notranslate">
                Paintball! [FIXED]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            965 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=384534">daxter33</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">31,159,134</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>20,890 &nbsp;  |  &nbsp; 2,155<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/The-Roblox-Gym-place?id=21575277">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/9de3c0fbb541ee6f8d498e2e626e5fd1"></span>
            <div class="game-name notranslate">
                The Roblox Gym™     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            927 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=771417">mew903</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">264,955</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,456 &nbsp;  |  &nbsp; 418<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Galleons-v6-2b-place?id=5310452">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/7727fef0f39959614c91b7c5d3d692c7"></span>
            <div class="game-name notranslate">
                Galleons v6.2b     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            816 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=290237">Wingman8</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">8,390,171</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>6,789 &nbsp;  |  &nbsp; 528<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Welcome-to-the-Neighborhood-of-Robloxia-V-4-place?id=92898409">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/64b56acc8bdb0c6f51ae50c4ae4cb1bc"></span>
            <div class="game-name notranslate">
                Welcome to the Neighborhood of Robloxia      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            803 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=31342830">testin423</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">15,368,080</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>24,031 &nbsp;  |  &nbsp; 1,793<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Murder-Mystery-v0-4-4b-Beta-place?id=142823291">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/b6af3a3c0e5c42ec68d71b3591c56d6e"></span>
            <div class="game-name notranslate">
                Murder Mystery [v0.4.4b] [Beta]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            800 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1848960">Nikilis</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">12,300,694</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>33,606 &nbsp;  |  &nbsp; 3,309<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Survive-The-Rollercoaster-DESC-place?id=96673074">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/1692b800f3151f1fe96c0b5c24a81e2c"></span>
            <div class="game-name notranslate">
                ☆Survive The Rollercoaster !☆ (DESC)     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            749 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=17820096">Trecheria</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">45,697</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>239 &nbsp;  |  &nbsp; 106<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Deathrun-2-Run-or-Die-place?id=6602652">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/526b63ccd936cdd88461c4588c63146f"></span>
            <div class="game-name notranslate">
                Deathrun 2 - Run or Die!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            693 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1852246">Wsly</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">7,373,348</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>12,034 &nbsp;  |  &nbsp; 1,779<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Bug-fixes-Stop-it-Slender-place?id=30869879">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/696d9151b2250ff14624fa4d2c7328fb"></span>
            <div class="game-name notranslate">
                (Bug fixes!) Stop it, Slender!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            674 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6686423">Kinnis97</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,814,528</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>8,043 &nbsp;  |  &nbsp; 539<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ROBLOX-Card-Wars-Update-place?id=117164706">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/40ab4bb0c2373c0f80f02450d1202ab1"></span>
            <div class="game-name notranslate">
                ROBLOX Card Wars *Update*     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            644 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=42520474">ImaginaryGamer</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">88,237</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>246 &nbsp;  |  &nbsp; 126<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Classic-Marvel-Heroes-New-Vip-Characters-place?id=144769280">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/78c6894de9e4cdce1de00942a5b249a3"></span>
            <div class="game-name notranslate">
                Classic Marvel Heroes [ New Vip Characte     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            643 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=44686034">AwesomeGamers200</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">503,210</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,455 &nbsp;  |  &nbsp; 381<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:07 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:30 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 265.638
  exclusion.robots: 0.119
  exclusion.robots.policy: 0.112
  RedisCDXSource: 0.593
  esindex: 0.006
  LoadShardBlock: 233.59 (3)
  PetaboxLoader3.datanode: 237.039 (4)
  CDXLines.iter: 27.904 (3)
  load_resource: 139.228
  PetaboxLoader3.resolve: 82.588
--></div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container overflow-hidden" id="GamesListContainer8" data-sortfilter="8" data-gamefilter="1" data-minbclevel="0" style="top: -55px; height: 258px; cursor: auto;">
    <div class="games-list-header games-filter-changer">
	    <h2>Top Earning</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable" style="left: 0px;">
            


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/More-Furniture-Work-at-a-Pizza-Place-place?id=192800">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/6ef0144628d318e74a9232d71565834f"></span>
            <div class="game-name notranslate">
                [More Furniture] Work at a Pizza Place     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2,277 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=82471">Dued1</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">15,485,385</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>20,388 &nbsp;  |  &nbsp; 1,397<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/The-Greenwood-Town-place?id=16613936">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/9432f6e760d0e892a69e41dbe0430382"></span>
            <div class="game-name notranslate">
                The Greenwood Town     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            628 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=4762878">Floppa98</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">8,189,300</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>11,033 &nbsp;  |  &nbsp; 3,845<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Guest-Defense-FAST-PP-place?id=156495177">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/dbd7f6af3ed9d5dba575eae1a9ad269a"></span>
            <div class="game-name notranslate">
                Guest Defense : FAST PP     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,787 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=19717956">BuildIntoGames</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">388,961</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,686 &nbsp;  |  &nbsp; 925<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/THE-MAD-MURDERER-Accessories-place?id=152594797">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/3d80ff4c0963a1a787820b57d602b8c1"></span>
            <div class="game-name notranslate">
                THE MAD MURDERER [+ Accessories]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            3,423 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2312310">loleris</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">3,997,758</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>13,355 &nbsp;  |  &nbsp; 2,225<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ROBLOX-Cookie-Clicker-place?id=154545309">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/d59bc2a69e155f3a4002b2b8d7c8bfb2"></span>
            <div class="game-name notranslate">
                ROBLOX Cookie Clicker     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            63 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1210210">ForeverDev</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">593,876</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,158 &nbsp;  |  &nbsp; 2,452<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Paintball-FIXED-place?id=4175379">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/01b3d9360c8c2b25c3886aa89fc99591"></span>
            <div class="game-name notranslate">
                Paintball! [FIXED]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            965 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=384534">daxter33</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">31,158,454</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>20,890 &nbsp;  |  &nbsp; 2,155<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Murder-Mystery-v0-4-4b-Beta-place?id=142823291">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/b6af3a3c0e5c42ec68d71b3591c56d6e"></span>
            <div class="game-name notranslate">
                Murder Mystery [v0.4.4b] [Beta]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            800 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1848960">Nikilis</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">12,300,878</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>33,606 &nbsp;  |  &nbsp; 3,309<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/League-of-ROBLOX-place?id=155156926">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/23d07cbb8e1982be893bc6d38b3ef304"></span>
            <div class="game-name notranslate">
                League of ROBLOX     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            227 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=676056">Davidii</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">241,861</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,365 &nbsp;  |  &nbsp; 404<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Traitor-Trouble-NEW-MAP-place?id=153635759">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/5b3627c56223c0b147387e648b7ca4a2"></span>
            <div class="game-name notranslate">
                Traitor Trouble [NEW MAP]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            506 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=59967">taymaster</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">252,283</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,963 &nbsp;  |  &nbsp; 826<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Dont-Blink-Beta-place?id=155324688">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/8e35a4a7c75e843c1ecc4d90b4c67742"></span>
            <div class="game-name notranslate">
                Don't Blink [Beta]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            190 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1152789">SmoothBlockModel</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">434,729</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,047 &nbsp;  |  &nbsp; 563<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Bug-fixes-Stop-it-Slender-place?id=30869879">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/696d9151b2250ff14624fa4d2c7328fb"></span>
            <div class="game-name notranslate">
                (Bug fixes!) Stop it, Slender!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            674 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6686423">Kinnis97</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,814,223</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>8,043 &nbsp;  |  &nbsp; 539<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Watch-Dogs-ctOS-Testing-Read-Desc-45-place?id=488591">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/4ba1fd6a9eb014a329e6b9f87e59d455"></span>
            <div class="game-name notranslate">
                Watch Dogs :: ctOS [Testing/Read Desc] 4     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            157 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=236451">ninetailfox73</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">229,551</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>3,210 &nbsp;  |  &nbsp; 253<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">57,413</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:06 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:28 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 192.401
  exclusion.robots: 0.096
  exclusion.robots.policy: 0.089
  RedisCDXSource: 4.527
  esindex: 0.008
  LoadShardBlock: 156.924 (3)
  PetaboxLoader3.datanode: 142.39 (4)
  CDXLines.iter: 27.93 (3)
  load_resource: 50.344
  PetaboxLoader3.resolve: 32.643
-->


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Points-Ultimate-Marble-Rider-v2-1-3-place?id=150290683">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/16dfce2b613aa83c4f0d6918f312b5d5"></span>
            <div class="game-name notranslate">
                *Points!* [Ultimate Marble Rider] [v2.1.     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            271 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2837719">asimo3089</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">399,089</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,282 &nbsp;  |  &nbsp; 361<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Base-wars-Kill-Assist-Battle-Score-Patch-notes-place?id=18164449">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/c419fa9077dae7acc8d5f900faac73c9"></span>
            <div class="game-name notranslate">
                Base wars! [Kill Assist, Battle Score (P     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,212 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=5239900">d4rk886</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">32,722,165</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>14,820 &nbsp;  |  &nbsp; 2,433<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/The-Roblox-Gym-place?id=21575277">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/9de3c0fbb541ee6f8d498e2e626e5fd1"></span>
            <div class="game-name notranslate">
                The Roblox Gym™     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            927 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=771417">mew903</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">264,755</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,456 &nbsp;  |  &nbsp; 418<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Be-Crushed-By-A-Speeding-Wall-place?id=90267357">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/b5e587321a20172bf17b7da219c4bf89"></span>
            <div class="game-name notranslate">
                Be Crushed By A Speeding Wall     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,023 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=31244132">Digitalscape</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">176,419</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>544 &nbsp;  |  &nbsp; 455<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Cops-and-Robbers-place?id=154744011">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/1afee3f91ec6065440f7e50779d45349"></span>
            <div class="game-name notranslate">
                Cops and Robbers     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            381 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1314618">RoyStanford</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">374,420</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,630 &nbsp;  |  &nbsp; 605<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Demon-Revenge-place?id=144332843">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/c3f6a794fbc60fd1583252254cd3355c"></span>
            <div class="game-name notranslate">
                Demon Revenge     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            98 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2312310">loleris</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,841,168</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>11,610 &nbsp;  |  &nbsp; 977<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Martial-Arts-Battle-Arena-Kai-place?id=8385672">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/7fa796f2fa0a9331c0f4ee9fce1760ab"></span>
            <div class="game-name notranslate">
                Martial Arts Battle Arena Kai     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            407 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1854975">Friaza</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">3,489,338</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>5,992 &nbsp;  |  &nbsp; 712<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Double-Player-Points-Day-NBC-Version-in-DESC-place?id=153412881">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/e3ff22847caf26a84026709ab6a8258b"></span>
            <div class="game-name notranslate">
                [Double Player Points Day!] NBC Version      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            57 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=458978">lomo0987</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">10,712</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>101 &nbsp;  |  &nbsp; 88<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ᴮᴱᵀᴬ-Medieval-Warfare-Reforged-place?id=109814071">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/fd709d56bb6acd423772a3c3ed099d92"></span>
            <div class="game-name notranslate">
                ᴮᴱᵀᴬ Medieval Warfare: Reforged     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            171 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=16743585">Schematics</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">434,048</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>3,029 &nbsp;  |  &nbsp; 376<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Noob-Test-Obby-3-place?id=149821938">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/0794bb9f3a84fb4f32b09429c88b0e80"></span>
            <div class="game-name notranslate">
                Noob Test Obby 3     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            435 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=8190205">hcs19</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">757,900</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,229 &nbsp;  |  &nbsp; 764<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Blox-Hunt-New-Map-Gamepasses-v1-4-1-place?id=70005410">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/7fa65d56005dc6e0120f7f4c9508bb76"></span>
            <div class="game-name notranslate">
                Blox Hunt | New Map &amp; Gamepasses |  v1.4     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            233 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=3967548">lion2323</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,536,462</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>6,300 &nbsp;  |  &nbsp; 651<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/After-The-Flash-Rain-v1-9-3-place?id=16739417">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/e1ce2ab0eebd78799b1ca05b7e2065f9"></span>
            <div class="game-name notranslate">
                After The Flash: Rain - v1.9.3     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            306 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=117755">ChadTheCreator</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">711,326</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>5,094 &nbsp;  |  &nbsp; 401<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:11 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:29 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 87.803
  exclusion.robots: 0.075
  exclusion.robots.policy: 0.07
  RedisCDXSource: 0.736
  esindex: 0.006
  LoadShardBlock: 56.5 (3)
  PetaboxLoader3.datanode: 66.021 (4)
  CDXLines.iter: 27.984 (3)
  load_resource: 172.566
  PetaboxLoader3.resolve: 141.386
--></div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container overflow-hidden" id="GamesListContainer13" data-sortfilter="13" data-gamefilter="1" data-minbclevel="0" style="top: -110px; height: 258px; cursor: auto;">
    <div class="games-list-header games-filter-changer">
	    <h2>Top Points</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable" style="left: 0px;">
            


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/More-Furniture-Work-at-a-Pizza-Place-place?id=192800">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/6ef0144628d318e74a9232d71565834f"></span>
            <div class="game-name notranslate">
                [More Furniture] Work at a Pizza Place     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2,277 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=82471">Dued1</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">15,485,486</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>20,388 &nbsp;  |  &nbsp; 1,397<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Guest-Defense-FAST-PP-place?id=156495177">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/dbd7f6af3ed9d5dba575eae1a9ad269a"></span>
            <div class="game-name notranslate">
                Guest Defense : FAST PP     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,787 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=19717956">BuildIntoGames</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">389,905</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,686 &nbsp;  |  &nbsp; 925<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Bug-fixes-Stop-it-Slender-place?id=30869879">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/696d9151b2250ff14624fa4d2c7328fb"></span>
            <div class="game-name notranslate">
                (Bug fixes!) Stop it, Slender!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            680 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6686423">Kinnis97</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,814,732</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>8,043 &nbsp;  |  &nbsp; 539<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Base-wars-Kill-Assist-Battle-Score-Patch-notes-place?id=18164449">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/c419fa9077dae7acc8d5f900faac73c9"></span>
            <div class="game-name notranslate">
                Base wars! [Kill Assist, Battle Score (P     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,212 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=5239900">d4rk886</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">32,721,782</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>14,820 &nbsp;  |  &nbsp; 2,433<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Be-Crushed-By-A-Speeding-Wall-place?id=90267357">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/b5e587321a20172bf17b7da219c4bf89"></span>
            <div class="game-name notranslate">
                Be Crushed By A Speeding Wall     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,023 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=31244132">Digitalscape</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">176,638</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>544 &nbsp;  |  &nbsp; 455<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Natural-Disaster-Survival-place?id=189707">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/4a41e9e57a18ad9c2381565eaaf52476"></span>
            <div class="game-name notranslate">
                Natural Disaster Survival     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,487 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=80254">stickmasterluke</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">16,538,507</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>17,958 &nbsp;  |  &nbsp; 1,115<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ROBLOX-Cookie-Clicker-place?id=154545309">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/d59bc2a69e155f3a4002b2b8d7c8bfb2"></span>
            <div class="game-name notranslate">
                ROBLOX Cookie Clicker     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            63 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1210210">ForeverDev</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">593,876</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,158 &nbsp;  |  &nbsp; 2,452<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ᴮᴱᵀᴬ-Medieval-Warfare-Reforged-place?id=109814071">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/fd709d56bb6acd423772a3c3ed099d92"></span>
            <div class="game-name notranslate">
                ᴮᴱᵀᴬ Medieval Warfare: Reforged     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            171 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=16743585">Schematics</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">434,061</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>3,029 &nbsp;  |  &nbsp; 376<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/The-Roblox-Gym-place?id=21575277">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/9de3c0fbb541ee6f8d498e2e626e5fd1"></span>
            <div class="game-name notranslate">
                The Roblox Gym™     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            927 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=771417">mew903</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">264,892</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,456 &nbsp;  |  &nbsp; 418<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ROBLOX-Cookie-Clicker-V2-PLAYER-POINTS-place?id=157061912">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/e5e3ea2df9651f905cf04048913887fc"></span>
            <div class="game-name notranslate">
                ROBLOX Cookie Clicker V2 [PLAYER POINTS!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            170 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1210210">ForeverDev</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">133,816</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>319 &nbsp;  |  &nbsp; 102<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Double-Player-Points-Day-NBC-Version-in-DESC-place?id=153412881">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/e3ff22847caf26a84026709ab6a8258b"></span>
            <div class="game-name notranslate">
                [Double Player Points Day!] NBC Version      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            57 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=458978">lomo0987</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">10,735</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>101 &nbsp;  |  &nbsp; 88<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Sword-Fighting-Tournament-place?id=14375697">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/61d41014c203c3ad43580f73ccb0d737"></span>
            <div class="game-name notranslate">
                Sword Fighting Tournament     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            468 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2231221">TheGamer101</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">25,459,549</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>22,404 &nbsp;  |  &nbsp; 2,200<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:05 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:27 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 113.992
  exclusion.robots: 0.086
  exclusion.robots.policy: 0.079
  RedisCDXSource: 0.511
  esindex: 0.008
  LoadShardBlock: 80.524 (3)
  PetaboxLoader3.datanode: 101.298 (4)
  CDXLines.iter: 29.862 (3)
  load_resource: 108.111
  PetaboxLoader3.resolve: 32.77
-->


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Swordfight-for-Player-Points-5KOs-1PP-place?id=156154563">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/f5ac8220e3fb535f3e05ad6d6d62bddf"></span>
            <div class="game-name notranslate">
                Swordfight for Player Points! [5KOs = 1P     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            23 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1210210">ForeverDev</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">69,597</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>555 &nbsp;  |  &nbsp; 275<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Player-Points-Marketplace-place?id=158220718">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/03dad82fa42d2019897c9db1592589f1"></span>
            <div class="game-name notranslate">
                Player Points Marketplace!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            9 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1210210">ForeverDev</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">13,575</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>48 &nbsp;  |  &nbsp; 57<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Minion-Freeze-Tag-PLAYER-POINTS-place?id=21916786">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/b9882fbd6b99b1ef05d7b7d0e33129f1"></span>
            <div class="game-name notranslate">
                Minion Freeze Tag [PLAYER POINTS!]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            204 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6444287">MonkrysGhost</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">2,744,157</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>6,766 &nbsp;  |  &nbsp; 1,644<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/1-KILL-1-POINT-DUAL-VENOMSHANK-place?id=143020339">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/87aa8ba44caf4571ae88f001ff55ed32"></span>
            <div class="game-name notranslate">
                *1 KILL= 1 POINT!* DUAL VENOMSHANK!!!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            39 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=53932913">FlameWheel07</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">104,406</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>442 &nbsp;  |  &nbsp; 284<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Advanced-Swordfight-10-Minutes-2-Player-Points-place?id=157045370">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/d389d39f72c5846b41b844da8ad4368a"></span>
            <div class="game-name notranslate">
                Advanced Swordfight [10 Minutes = 2 Play     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            4 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=46277413">DukeEnlight</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">42,138</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>211 &nbsp;  |  &nbsp; 260<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/League-of-ROBLOX-place?id=155156926">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/23d07cbb8e1982be893bc6d38b3ef304"></span>
            <div class="game-name notranslate">
                League of ROBLOX     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            227 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=676056">Davidii</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">241,913</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,365 &nbsp;  |  &nbsp; 404<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Simon-Says-Player-Points-place?id=61846006">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/678f964a397e1798026ee2606ad165af"></span>
            <div class="game-name notranslate">
                Simon Says ~Player Points     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            296 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=15755563">RobRedEyes2</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">6,288,561</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>7,382 &nbsp;  |  &nbsp; 806<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/RESURRECTION-CoR5-place?id=19549795">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/f60502e6715893d1276ca47c77e88959"></span>
            <div class="game-name notranslate">
                [ RESURRECTION ] CoR5     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            635 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=5725475">litozinnamon</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">30,497,840</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>22,920 &nbsp;  |  &nbsp; 1,552<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Points-Ultimate-Marble-Rider-v2-1-3-place?id=150290683">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/16dfce2b613aa83c4f0d6918f312b5d5"></span>
            <div class="game-name notranslate">
                *Points!* [Ultimate Marble Rider] [v2.1.     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            271 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2837719">asimo3089</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">399,040</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,282 &nbsp;  |  &nbsp; 361<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Defend-the-Frontier-2-More-PP-Cash-XP-place?id=154690702">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/16151a07c721051251e5768de13ebb52"></span>
            <div class="game-name notranslate">
                Defend the Frontier 2 [More PP, Cash, XP     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            31 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=39619052">Xeptix</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">61,147</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>584 &nbsp;  |  &nbsp; 63<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Medieval-Warfare-place?id=100181562">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/97f602f5bd3a927f52e227219a2e9f15"></span>
            <div class="game-name notranslate">
                Medieval Warfare     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            44 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=16743585">Schematics</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,884,558</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>3,838 &nbsp;  |  &nbsp; 429<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/PLAYER-POINTS-HARDEST-8-STAGE-OBBY-place?id=157939634">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/6e43f047300cc0c281229ce84174d0b8"></span>
            <div class="game-name notranslate">
                [PLAYER POINTS] HARDEST 8 STAGE OBBY!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            13 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=57753358">Awesomeness2669</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">47,891</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>160 &nbsp;  |  &nbsp; 542<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:10 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:30 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 837.495
  exclusion.robots: 0.089
  exclusion.robots.policy: 0.082
  RedisCDXSource: 0.515
  esindex: 0.008
  LoadShardBlock: 800.962 (3)
  PetaboxLoader3.resolve: 794.778 (3)
  PetaboxLoader3.datanode: 126.214 (4)
  CDXLines.iter: 32.701 (3)
  load_resource: 135.862
--></div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container overflow-hidden" id="GamesListContainer9" data-sortfilter="9" data-gamefilter="1" data-minbclevel="0" style="top: -165px; height: 258px; cursor: auto;">
    <div class="games-list-header games-filter-changer">
	    <h2>Top Paid</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable" style="left: 0px;">
            


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Watch-Dogs-ctOS-Testing-Read-Desc-45-place?id=488591">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/4ba1fd6a9eb014a329e6b9f87e59d455"></span>
            <div class="game-name notranslate">
                Watch Dogs :: ctOS [Testing/Read Desc] 4     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            157 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=236451">ninetailfox73</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">229,652</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>3,210 &nbsp;  |  &nbsp; 253<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">57,413</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ROBLOX-Wheel-of-Fortune-place?id=19683741">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/e678bd48985b8091d3bb847a00c0ee1c"></span>
            <div class="game-name notranslate">
                ROBLOX Wheel of Fortune!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            40 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=123247">alexnewtron</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">583,501</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,299 &nbsp;  |  &nbsp; 354<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">77,218</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Welcome-to-Venezia-BETA-place?id=6328286">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/d329e6d7785c24155c15e3065d2bf94e"></span>
            <div class="game-name notranslate">
                Welcome to Venezia [BETA]      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            13 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1134994">SONICTHEHEDGEHOGXX</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,191,416</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,108 &nbsp;  |  &nbsp; 613<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">35</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">108,982</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ROBLOX-Point-Vote-for-a-Bloxxy-Q-9-place?id=17470283">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/9d7eecde8b32fb50f5afeed7665f549d"></span>
            <div class="game-name notranslate">
                ROBLOX Point *Vote for a Bloxxy! Q #9!*     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            11 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=486309">StarMarine614</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">720,626</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,442 &nbsp;  |  &nbsp; 1,268<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">70,631</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Call-of-Robloxia-Dev-Tests-place?id=114844189">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/04df4a650ab5ad7790429c59f74448ca"></span>
            <div class="game-name notranslate">
                Call of Robloxia - Dev Tests     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            78 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=5725475">litozinnamon</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">585,513</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>3,333 &nbsp;  |  &nbsp; 343<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">61,686</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Legacy-RPG-CA-1-1-1r0-place?id=101449733">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/10e91e9bce540725acf904d8a57053f2"></span>
            <div class="game-name notranslate">
                Legacy RPG | CA-1.1.1r0     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            18 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=4308133">AetherKnight</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">233,209</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,575 &nbsp;  |  &nbsp; 266<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">62,196</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Mob-of-the-Dead-Vote-for-a-Bloxy-Q-9-place?id=93610545">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/afb7c1a2e1ce52a95bbde2f045bba346"></span>
            <div class="game-name notranslate">
                {Mob of the Dead.} *Vote for a Bloxy! Q      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            5 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=16805972">TrustMeImRussian</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">39,724</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>577 &nbsp;  |  &nbsp; 95<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">6,104</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Gravity-Oasis-Project-2014-Early-Access-place?id=143285175">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/51076de3866c22664a81ad04985a150f"></span>
            <div class="game-name notranslate">
                Gravity Oasis - Project 2014 [Early Acce     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=486309">StarMarine614</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">23,298</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>476 &nbsp;  |  &nbsp; 44<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">10,479</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/StyLiS-Studios-Tech-Zombie-Pathfinding-place?id=147352409">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/dac38915985165b5d6e3d7c05313c30e"></span>
            <div class="game-name notranslate">
                [ StyLiS Studios Tech ] Zombie Pathfindi     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            4 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=5725475">litozinnamon</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">17,899</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>268 &nbsp;  |  &nbsp; 20<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">35</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">2,991</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/NUKE-THE-WHALES-place?id=110670">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/e11f71c5659087c8e046992c6fc59395"></span>
            <div class="game-name notranslate">
                ☢ NUKE THE WHALES ☢ ☢ ☢     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1 player online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=261">Shedletsky</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">720,406</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,299 &nbsp;  |  &nbsp; 251<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">55,242</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/GTA-5-Robloxian-Edition-v4-3-EARLY-ACCESS-NEW-place?id=140941550">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/d677ec1b512d95b952ebbda60c2ad02c"></span>
            <div class="game-name notranslate">
                GTA: 5 Robloxian Edition™ v4.3 [EARLY AC     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            6 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=52079248">TheDarkAbys</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">11,003</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>87 &nbsp;  |  &nbsp; 102<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">6,658</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Wizard101-Pre-Pre-Alpha-Mega-update-coming-place?id=140472987">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/eda4a9ce1eec1144b3203e3364f535b3"></span>
            <div class="game-name notranslate">
                Wizard101 Pre Pre... Alpha[Mega update c     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            3 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=37130476">Valtukins</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">3,107</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>67 &nbsp;  |  &nbsp; 13<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">2,035</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:05 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:28 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 316.073
  exclusion.robots: 0.079
  exclusion.robots.policy: 0.073
  RedisCDXSource: 3.817
  esindex: 0.018
  LoadShardBlock: 281.603 (3)
  PetaboxLoader3.datanode: 169.207 (4)
  CDXLines.iter: 27.757 (3)
  load_resource: 202.563
  PetaboxLoader3.resolve: 84.465
-->


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Medievalville-0-5-4-place?id=118303659">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/dfcc27f8280e6ce7f3545e83a5a2341a"></span>
            <div class="game-name notranslate">
                Medievalville 0.5.4     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1 player online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=282988">Haggie125</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">34,636</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>621 &nbsp;  |  &nbsp; 38<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">10,628</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Marble-Ride-Tycoon-2-place?id=122614434">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/6d7be759e6d8d3a675f3b08a7f6e3207"></span>
            <div class="game-name notranslate">
                Marble Ride Tycoon 2      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            0 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=40842434">HomingBeacon</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">27,721</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>139 &nbsp;  |  &nbsp; 80<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">17,183</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Survival-Beginnings-PAID-ACCESS-place?id=25558772">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/b341365940f074b93aa16353781b91b3"></span>
            <div class="game-name notranslate">
                Survival: Beginnings (PAID ACCESS)     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            5 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=545303">Shagabash</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">7,985</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>102 &nbsp;  |  &nbsp; 13<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">2,294</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Lost-Kingdoms-RPG-CB-1-2-1-r0-Open-Jobs-place?id=144583384">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/e0c0e0a53292eb09f5e6fb7bd109523d"></span>
            <div class="game-name notranslate">
                Lost Kingdoms RPG  | CB-1.2.1 _r0 (Open      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1 player online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6776380">DevBonnie</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">6,134</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>84 &nbsp;  |  &nbsp; 23<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">963</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Left-4-Death-Re-Vamped-Alpha-WIP-place?id=15363548">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/b145a61c1a93dd39b04385676aa60a12"></span>
            <div class="game-name notranslate">
                Left 4 Death: Re-Vamped! [Alpha/WIP]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1 player online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=4377618">ScriptMasterMatt</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">590,931</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>51 &nbsp;  |  &nbsp; 20<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">649</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Crystal-Cave-Sledding-Early-Access-Alpha-place?id=151859996">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/c7967c151fa9730cb170d2d2c19812e0"></span>
            <div class="game-name notranslate">
                Crystal Cave Sledding [Early Access Alph     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1 player online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1852246">Wsly</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,993</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>119 &nbsp;  |  &nbsp; 4<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">50</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">746</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Grand-Theft-Auto-V-Online-Early-Access-v0-67d-place?id=22587995">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/5a1514c06b897399d1a2c033bc7dac4c"></span>
            <div class="game-name notranslate">
                Grand Theft Auto V Online - [Early Acces     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            9 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6652514">slayer1928</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">25,164</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>50 &nbsp;  |  &nbsp; 3<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">30</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">499</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Can-You-escape-the-box-Admin-on-sale-place?id=33305474">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/aead09bb495b5ab758729a3875fcd431"></span>
            <div class="game-name notranslate">
                Can You escape... the box? *Admin on sal     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            6 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=5352665">DaDestiny</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">78,618</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>454 &nbsp;  |  &nbsp; 167<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">28</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">5,298</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Mirrors-Edge-Campaign-Comment-Badge-Ideas-place?id=92559092">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/7d1fd62403cb2e04ea3059381463e4f9"></span>
            <div class="game-name notranslate">
                Mirror's Edge Campaign [Comment Badge Id     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1 player online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=25455823">singleroblox</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">5,649</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>50 &nbsp;  |  &nbsp; 13<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">359</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Love-Notes-A-Card-Game-Pre-Release-Access-place?id=158368357">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/3edb1ae42fb75b06a6b20d06f6a07dc3"></span>
            <div class="game-name notranslate">
                Love Notes: A Card Game [Pre-Release Acc     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=14174090">Mobard</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">275</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>12 &nbsp;  |  &nbsp; 1<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">161</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Escape-The-Flood-NEW-place?id=95946568">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/f95c0f270960696bc32506292132abc5"></span>
            <div class="game-name notranslate">
                Escape The Flood (NEW)!!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=30203318">badHotboys12</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">220,126</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>33 &nbsp;  |  &nbsp; 12<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">1,009</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Legend-Of-Korblox-Extra-XP-Legend-of-Korblox-II-place?id=109808202">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/a425baa6f108ad01d136539b30b48d19"></span>
            <div class="game-name notranslate">
                Legend Of Korblox Extra XP [Legend of Ko     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1 player online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=10655716">iiPoke</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">29,423</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>154 &nbsp;  |  &nbsp; 36<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">25</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">8,076</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:08 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:32 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 2780.562
  exclusion.robots: 0.153
  exclusion.robots.policy: 0.142
  RedisCDXSource: 1713.11
  esindex: 0.01
  LoadShardBlock: 1030.25 (3)
  PetaboxLoader3.datanode: 781.927 (4)
  CDXLines.iter: 33.077 (3)
  load_resource: 66.355
  PetaboxLoader3.resolve: 39.825
--></div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container overflow-hidden" id="GamesListContainer11" data-sortfilter="11" data-gamefilter="1" data-minbclevel="0" style="top: -220px; height: 258px; cursor: auto;">
    <div class="games-list-header games-filter-changer">
	    <h2>Top Rated</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable" style="left: 0px;">
            


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Natural-Disaster-Survival-place?id=189707">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/4a41e9e57a18ad9c2381565eaaf52476"></span>
            <div class="game-name notranslate">
                Natural Disaster Survival     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            1,487 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=80254">stickmasterluke</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">16,538,507</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>17,958 &nbsp;  |  &nbsp; 1,115<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Survive-The-Disasters-97-Changed-Username-place?id=18540115">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/f1c58cebf37117992f1781c56d9f4c2f"></span>
            <div class="game-name notranslate">
                Survive The Disasters! [97] Changed User     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2,496 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=4307571">VyrissTheVixen</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">26,510,426</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>18,966 &nbsp;  |  &nbsp; 1,273<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/More-Furniture-Work-at-a-Pizza-Place-place?id=192800">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/6ef0144628d318e74a9232d71565834f"></span>
            <div class="game-name notranslate">
                [More Furniture] Work at a Pizza Place     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            2,277 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=82471">Dued1</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">15,485,486</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>20,388 &nbsp;  |  &nbsp; 1,397<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Galleons-v6-2b-place?id=5310452">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/7727fef0f39959614c91b7c5d3d692c7"></span>
            <div class="game-name notranslate">
                Galleons v6.2b     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            816 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=290237">Wingman8</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">8,389,791</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>6,789 &nbsp;  |  &nbsp; 528<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/THE-MAD-MURDERER-Accessories-place?id=152594797">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/3d80ff4c0963a1a787820b57d602b8c1"></span>
            <div class="game-name notranslate">
                THE MAD MURDERER [+ Accessories]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            3,423 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2312310">loleris</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">3,997,572</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>13,355 &nbsp;  |  &nbsp; 2,225<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Space-Knights-Beta-Gameplay-place?id=124175297">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/b1bc391e9d944722a5184590fe13aabf"></span>
            <div class="game-name notranslate">
                Space Knights! [Beta Gameplay]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            372 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=46085083">RaceToTheBottom</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">2,392,577</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>10,081 &nbsp;  |  &nbsp; 657<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/CLUB-BOATES-Read-Descrption-place?id=38578583">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/99e99af58ffcc36b0043c953e2821ba1"></span>
            <div class="game-name notranslate">
                CLUB BOATES [Read Descrption!]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            107 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=117755">ChadTheCreator</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">15,048</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>289 &nbsp;  |  &nbsp; 17<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Bug-fixes-Stop-it-Slender-place?id=30869879">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/696d9151b2250ff14624fa4d2c7328fb"></span>
            <div class="game-name notranslate">
                (Bug fixes!) Stop it, Slender!     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            680 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6686423">Kinnis97</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,814,732</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>8,043 &nbsp;  |  &nbsp; 539<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Points-Ultimate-Marble-Rider-v2-1-3-place?id=150290683">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/16dfce2b613aa83c4f0d6918f312b5d5"></span>
            <div class="game-name notranslate">
                *Points!* [Ultimate Marble Rider] [v2.1.     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            270 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=2837719">asimo3089</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">399,040</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,282 &nbsp;  |  &nbsp; 361<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Pokemon-Adventures-READ-DESC-place?id=63143570">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/45431d12836a6a9819b57f256113886f"></span>
            <div class="game-name notranslate">
                Pokemon Adventures - READ DESC.     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            498 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=19591496">IlIll</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">3,267,229</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>10,885 &nbsp;  |  &nbsp; 762<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Keyboard-Hero-Arena-v0-98-Open-Beta-place?id=135819377">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/e46a3bd56c3645ea7d18e5e3d6c7d254"></span>
            <div class="game-name notranslate">
                Keyboard Hero: Arena [v0.98] [Open Beta]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            24 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=51430481">Ceoh</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">169,935</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>3,136 &nbsp;  |  &nbsp; 275<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Martial-Arts-Battle-Arena-Kai-place?id=8385672">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/7fa796f2fa0a9331c0f4ee9fce1760ab"></span>
            <div class="game-name notranslate">
                Martial Arts Battle Arena Kai     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            412 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1854975">Friaza</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">3,489,274</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>5,992 &nbsp;  |  &nbsp; 712<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:05 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:28 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 95.569
  exclusion.robots: 0.151
  exclusion.robots.policy: 0.142
  RedisCDXSource: 1.84
  esindex: 0.01
  LoadShardBlock: 55.671 (3)
  PetaboxLoader3.datanode: 66.643 (4)
  CDXLines.iter: 34.673 (3)
  load_resource: 83.98
  PetaboxLoader3.resolve: 27.547
-->


        




<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Welcome-to-the-Neighborhood-of-Robloxia-V-4-place?id=92898409">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/64b56acc8bdb0c6f51ae50c4ae4cb1bc"></span>
            <div class="game-name notranslate">
                Welcome to the Neighborhood of Robloxia      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            803 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=31342830">testin423</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">15,368,080</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>24,031 &nbsp;  |  &nbsp; 1,793<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Irregularity-WIP-place?id=150847894">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/4e7ffe1e9dcdb3445dd280a2a0028c4f"></span>
            <div class="game-name notranslate">
                Irregularity [WIP]      
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            8 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=38328309">BloxBusterBCC</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">166,892</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>2,798 &nbsp;  |  &nbsp; 202<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Der-Riese-v0-2-New-Sounds-place?id=17888427">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/39b26c305732962fa565f1b25137ba38"></span>
            <div class="game-name notranslate">
                Der Riese v0.2 (New Sounds)     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            142 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=1198241">Starbattle</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,266,675</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>4,114 &nbsp;  |  &nbsp; 309<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Darkened-Dawn-place?id=3053085">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/342079329f8e16919875cfc67587a1cb"></span>
            <div class="game-name notranslate">
                Darkened Dawn     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            356 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=693819">chris046</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">6,786,344</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>5,903 &nbsp;  |  &nbsp; 543<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Blox-Hunt-New-Map-Gamepasses-v1-4-1-place?id=70005410">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/7fa65d56005dc6e0120f7f4c9508bb76"></span>
            <div class="game-name notranslate">
                Blox Hunt | New Map &amp; Gamepasses |  v1.4     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            233 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=3967548">lion2323</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">1,536,416</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>6,300 &nbsp;  |  &nbsp; 651<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Grand-Theft-Auto-V-Online-Early-Access-v0-67d-place?id=22587995">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/5a1514c06b897399d1a2c033bc7dac4c"></span>
            <div class="game-name notranslate">
                Grand Theft Auto V Online - [Early Acces     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            9 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=6652514">slayer1928</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">25,167</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>50 &nbsp;  |  &nbsp; 3<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
                <div class="game-price">
                    <span class="robux-price robux">30</span>
                </div>
                <div class="game-bought-count">
                    <span><span class="notranslate">499</span> bought</span>
                </div>
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/EBR-Office-place?id=72461904">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/72ae5985d0e5404d8e16b4cbd7d2af2b"></span>
            <div class="game-name notranslate">
                [EBR] Office     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            13 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=100519">Ravenshield</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">20,003</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>325 &nbsp;  |  &nbsp; 26<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/PEARS-to-PAIRS-Multiplayer-Card-Game-place?id=13536949">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/143101573b66442f1cb946ad0352e747"></span>
            <div class="game-name notranslate">
                PEARS to PAIRS Multiplayer Card Game     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            126 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=123247">alexnewtron</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">2,210,287</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>5,897 &nbsp;  |  &nbsp; 391<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/Robloxity-V3-3-4-place?id=12468179">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/64763f97c6dd56c822316564fbcb5778"></span>
            <div class="game-name notranslate">
                Robloxity [V3.3.4]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            523 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=3588768">1dev3</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">12,295,990</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>22,534 &nbsp;  |  &nbsp; 1,870<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/ROBLOX-Battle-OPEN-place?id=96623001">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/ed6d6ec2bdf50d7dbe6e8d89c202544a"></span>
            <div class="game-name notranslate">
                ROBLOX Battle [OPEN]     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            285 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=21557">Games</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">5,348,727</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>12,750 &nbsp;  |  &nbsp; 1,254<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/After-The-Flash-Rain-v1-9-3-place?id=16739417">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/e1ce2ab0eebd78799b1ca05b7e2065f9"></span>
            <div class="game-name notranslate">
                After The Flash: Rain - v1.9.3     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            306 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=117755">ChadTheCreator</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">711,303</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>5,094 &nbsp;  |  &nbsp; 401<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>
        <div class="games-list-column">



<div class="game-item">
    <div class="always-shown"> 
        <a class="game-item-anchor" rel="external" href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/New-Football-Legends-place?id=149970473">
            <span class=""><img class="game-item-image" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/5113831706a31b96132a001becb256be"></span>
            <div class="game-name notranslate">
                New Football Legends     
            </div>
        </a>
        <span class="player-count deemphasized notranslate">
            430 players online
        </span>
        <span class="online-player roblox-player-text" style="float: left"></span>

        <div class="show-on-hover-only deemphasized hidden">
            <div class="creator-name notranslate">
                by <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/User.aspx?ID=18362190">LegendOfGuest</a>
            </div>


        </div>
    </div>

    <div class="hover-shown deemphasized ">
        <div class="snap-bottom snap-left">
            <div>
                played <span class="roblox-plays-count notranslate">510,632</span> times
            </div>
        
                <div class=" game-thumbs-up-down notranslate">
                    <span class="tiny-thumbs-up"></span>1,357 &nbsp;  |  &nbsp; 142<span class="tiny-thumbs-down"></span>
                </div>
        </div>

        <div class="snap-bottom snap-right">
        </div>
    </div>
</div>
        </div>

<!--
     FILE ARCHIVED ON 23:33:09 May 30, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:30 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 496.677
  exclusion.robots: 0.134
  exclusion.robots.policy: 0.126
  RedisCDXSource: 5.289
  esindex: 0.012
  LoadShardBlock: 452.795 (3)
  PetaboxLoader3.datanode: 461.675 (4)
  CDXLines.iter: 34.682 (3)
  load_resource: 118.864
  PetaboxLoader3.resolve: 76.713
--></div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container overflow-hidden" id="GamesListContainer14" data-sortfilter="14" data-gamefilter="1" data-minbclevel="0" style="top: -275px; height: 258px; cursor: auto;">
    <div class="games-list-header games-filter-changer">
	    <h2>Builders Club</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable" style="left: 0px;">
            









<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=70501379&amp;Position=1&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/6f567205cc399b9a7ada070f0b2c7f38" alt="Trade Hangout" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t6.rbxcdn.com/6f567205cc399b9a7ada070f0b2c7f38&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Trade Hangout">
            Trade Hangout
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            97 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="15265" data-downvotes="2198" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">2,198</div>
                <div class="up-votes-count rbx-font-xs">15,265</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=13416513">Merely</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=198411056&amp;Position=2&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/dc77b518be7100e274d33aa9f1ca19b4" alt="Empire Theatre V7" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t5.rbxcdn.com/dc77b518be7100e274d33aa9f1ca19b4&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Empire Theatre V7">
            Empire Theatre V7
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            39 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="1393" data-downvotes="968" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">968</div>
                <div class="up-votes-count rbx-font-xs">1,393</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=9603827">Wizzy011</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=187932665&amp;Position=3&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/eb379c08d72e254bf514c0f0f03f0bc0" alt="☠Killer Theatre☠ ☠HIRING☠" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t2.rbxcdn.com/eb379c08d72e254bf514c0f0f03f0bc0&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="☠Killer Theatre☠ ☠HIRING☠">
            ☠Killer Theatre☠ ☠HIRING☠
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            16 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="534" data-downvotes="930" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">930</div>
                <div class="up-votes-count rbx-font-xs">534</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=31896361">Blvsted</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=115670532&amp;Position=4&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/365a2f8667918b59f6620b52c6b29a3c" alt="Kohls Admin House BC" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t7.rbxcdn.com/365a2f8667918b59f6620b52c6b29a3c&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Kohls Admin House BC">
            Kohls Admin House BC
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            9 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="4508" data-downvotes="1469" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">1,469</div>
                <div class="up-votes-count rbx-font-xs">4,508</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=36377783">agspureiam</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=136768762&amp;Position=5&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/c56d153db3f26a6f8167bc8f7e26fee0" alt="RobloMall" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t5.rbxcdn.com/c56d153db3f26a6f8167bc8f7e26fee0&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="RobloMall">
            RobloMall
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            8 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="2640" data-downvotes="336" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">336</div>
                <div class="up-votes-count rbx-font-xs">2,640</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=4337002">Buddyism</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=257082861&amp;Position=6&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/80caaf7c566b08980e3bb336f7a011d1" alt=" ♫Guess The Song V4♫" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t5.rbxcdn.com/80caaf7c566b08980e3bb336f7a011d1&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title=" ♫Guess The Song V4♫">
             ♫Guess The Song V4♫
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            7 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="124" data-downvotes="248" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">248</div>
                <div class="up-votes-count rbx-font-xs">124</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=79842834">bella10217</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=275047201&amp;Position=7&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t7.rbxcdn.com/42070943f0ab3b4d6abb069dd0265a03" alt="Jurassic World NOW HIRING!" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t7.rbxcdn.com/42070943f0ab3b4d6abb069dd0265a03&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Jurassic World NOW HIRING!">
            Jurassic World NOW HIRING!
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            6 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="46" data-downvotes="20" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">20</div>
                <div class="up-votes-count rbx-font-xs">46</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=40231108">cosmicavenger007</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=255450795&amp;Position=8&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t2.rbxcdn.com/a48ef54b31cffebd4f9d2c786f83f49c" alt="Guess That Song For Admin {V.3.0} UPDATE" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t2.rbxcdn.com/a48ef54b31cffebd4f9d2c786f83f49c&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Guess That Song For Admin {V.3.0} UPDATE">
            Guess That Song For Admin {V.3.0} UPDATE
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            6 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="126" data-downvotes="277" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">277</div>
                <div class="up-votes-count rbx-font-xs">126</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=22618282">Ribz2012</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=131978153&amp;Position=9&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/4df551d5b9a1422151d23cd6c467f244" alt="Obby for admin! [Read desc for in-game stuff]" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t5.rbxcdn.com/4df551d5b9a1422151d23cd6c467f244&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Obby for admin! [Read desc for in-game stuff]">
            Obby for admin! [Read desc for in-game s
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            4 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="11" data-downvotes="18" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">18</div>
                <div class="up-votes-count rbx-font-xs">11</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=28611483">iTexler</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=290821968&amp;Position=10&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/4de4606e06436cce08a1bba4c130b146" alt="New Khols Epix Edit Admin House!" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t4.rbxcdn.com/4de4606e06436cce08a1bba4c130b146&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="New Khols Epix Edit Admin House!">
            New Khols Epix Edit Admin House!
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            4 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=89702673">Lasering</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=285404696&amp;Position=11&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t4.rbxcdn.com/0ad722aadf54fbc87734e3a1fe6024be" alt="ONE Technologies's TESTING" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t4.rbxcdn.com/0ad722aadf54fbc87734e3a1fe6024be&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="ONE Technologies's TESTING">
            ONE Technologies's TESTING
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            4 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="7" data-downvotes="1" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">1</div>
                <div class="up-votes-count rbx-font-xs">7</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/Groups/group.aspx?gid=2648010">ONE Technologies</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=213435765&amp;Position=12&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/55575785437984aae6f790a023029e10" alt="LMaD Sword Fight Gameshow!" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t3.rbxcdn.com/55575785437984aae6f790a023029e10&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="LMaD Sword Fight Gameshow!">
            LMaD Sword Fight Gameshow!
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            4 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="19" data-downvotes="55" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">55</div>
                <div class="up-votes-count rbx-font-xs">19</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=10929008">Flamey50</cite>
        </span>
    </a>
</li>


<!--
     FILE ARCHIVED ON 17:09:18 Aug 29, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:28 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 177.377
  exclusion.robots: 0.132
  exclusion.robots.policy: 0.122
  RedisCDXSource: 6.105
  esindex: 0.011
  LoadShardBlock: 139.244 (3)
  PetaboxLoader3.datanode: 107.224 (4)
  CDXLines.iter: 28.356 (3)
  load_resource: 77.065
  PetaboxLoader3.resolve: 29.97
-->









<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=290070352&amp;Position=13&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/d3a527bfc85cb364e8408804bb2be831" alt="[CLOSED] Obby for Prizee" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t1.rbxcdn.com/d3a527bfc85cb364e8408804bb2be831&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="[CLOSED] Obby for Prizee">
            [CLOSED] Obby for Prizee
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            3 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="8" data-downvotes="13" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">13</div>
                <div class="up-votes-count rbx-font-xs">8</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=12679636">Robloxblo</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=284769797&amp;Position=14&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/c5f7a91d136637707c6835442e3eccb2" alt="(BC) Heaven Cafe®" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t1.rbxcdn.com/c5f7a91d136637707c6835442e3eccb2&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="(BC) Heaven Cafe®">
            (BC) Heaven Cafe®
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            3 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="12" data-downvotes="4" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">4</div>
                <div class="up-votes-count rbx-font-xs">12</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=19779272">BinaryGreen</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=179971748&amp;Position=15&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/7a118b58567d69dc48fb8449f396e0ba" alt="ROBLOX Story: The Bully (TRUE STORY)" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t3.rbxcdn.com/7a118b58567d69dc48fb8449f396e0ba&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="ROBLOX Story: The Bully (TRUE STORY)">
            ROBLOX Story: The Bully (TRUE STORY)
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            3 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="1832" data-downvotes="593" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">593</div>
                <div class="up-votes-count rbx-font-xs">1,832</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=40567256">StarCronix</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=289848145&amp;Position=16&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/74d16624e47333c4b89ea61ed01761c8" alt="||Knife Zone||" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t6.rbxcdn.com/74d16624e47333c4b89ea61ed01761c8&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="||Knife Zone||">
            ||Knife Zone||
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            2 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="2" data-downvotes="0" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">2</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=115907">xAcoustic</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=216287529&amp;Position=17&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t5.rbxcdn.com/ee1285c7c8a520044d7538a6f92ae8db" alt="Sword fight in the desert!" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t5.rbxcdn.com/ee1285c7c8a520044d7538a6f92ae8db&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Sword fight in the desert!">
            Sword fight in the desert!
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            2 Players Online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=50590180">iiiKrissy</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=279712955&amp;Position=18&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/ae6731b7310e287ece00032293312865" alt="78" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t6.rbxcdn.com/ae6731b7310e287ece00032293312865&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="78">
            78
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            1 player online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=17599451">Craftble</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=279714535&amp;Position=19&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/f4d1b9e26654b4fdf4e5dbfccb979c17" alt="95" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t3.rbxcdn.com/f4d1b9e26654b4fdf4e5dbfccb979c17&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="95">
            95
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            1 player online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=17599451">Craftble</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=276710871&amp;Position=20&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t0.rbxcdn.com/17388d095ba8556a7943fe9cefd03082" alt="Total Drama Island! [ALL STARS]" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t0.rbxcdn.com/17388d095ba8556a7943fe9cefd03082&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="Total Drama Island! [ALL STARS]">
            Total Drama Island! [ALL STARS]
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            1 player online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="19" data-downvotes="12" data-voting-processed="false">
                    <div class="background "></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">12</div>
                <div class="up-votes-count rbx-font-xs">19</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=35980975">noahking45</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=283449352&amp;Position=21&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/c52c2ea5dcc9590848f3e3929fa01d4b" alt="42" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t3.rbxcdn.com/c52c2ea5dcc9590848f3e3929fa01d4b&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="42">
            42
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            1 player online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/Groups/group.aspx?gid=252920">ROBLOXXOLBOR</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=279714006&amp;Position=22&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t3.rbxcdn.com/d601e2fa67c5991a7c7fe3356d11075e" alt="84" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t3.rbxcdn.com/d601e2fa67c5991a7c7fe3356d11075e&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="84">
            84
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            1 player online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/User.aspx?ID=17599451">Craftble</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=290084678&amp;Position=23&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t1.rbxcdn.com/05f0926c17ae468caa9040e3b1dd04bf" alt="87" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t1.rbxcdn.com/05f0926c17ae468caa9040e3b1dd04bf&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="87">
            87
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            1 player online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/Groups/group.aspx?gid=2641448">Pickle Co.</cite>
        </span>
    </a>
</li>



<li class="list-item game">
    <a href="https://web.archive.org/web/20140530233305mp_/http://www.roblox.com/games/refer?SortFilter=14&amp;TimeFilter=0&amp;GenreFilter=1&amp;PlaceId=283449482&amp;Position=24&amp;PageType=Games" class="game-item">
        <span class="game-thumb-content">
            <span class="game-thumb-wrapper">
                <img class="game-thumb" src="https://web.archive.org/web/20140530233305im_/http://t6.rbxcdn.com/552337bd752b9b496c09aa1cce4da3d0" alt="44" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t6.rbxcdn.com/552337bd752b9b496c09aa1cce4da3d0&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </span>
        </span>
        <span class="rbx-game-title rbx-text-overflow" title="44">
            44
        </span>
        <span class="rbx-game-text-notes rbx-font-xs">
            1 player online
        </span>
        <span class="rbx-votes">
            <div class="vote-bar">
                <div class="thumbs-up">
                    <span class="rbx-icon-thumbs-up"></span>
                </div>
                <div class="voting-container" data-upvotes="0" data-downvotes="0" data-voting-processed="false">
                    <div class="background no-votes"></div>
                    <div class="votes"></div>
                    <div class="mask">
                        <div class="segment seg-one"></div>
                        <div class="segment seg-two"></div>
                        <div class="segment seg-three"></div>
                        <div class="segment seg-four"></div>
                    </div>
                </div>
                <div class="thumbs-down">
                    <span class="rbx-icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="down-votes-count rbx-font-xs">0</div>
                <div class="up-votes-count rbx-font-xs">0</div>

            </div>
        </span>
        <span class="rbx-developer rbx-font-xs">
            by <cite class="rbx-link-sm" data-href="/Groups/group.aspx?gid=252920">ROBLOXXOLBOR</cite>
        </span>
    </a>
</li>


<!--
     FILE ARCHIVED ON 17:09:20 Aug 29, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:24:29 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 251.061
  exclusion.robots: 0.087
  exclusion.robots.policy: 0.08
  RedisCDXSource: 4.103
  esindex: 0.006
  LoadShardBlock: 214.103 (3)
  PetaboxLoader3.datanode: 309.031 (4)
  CDXLines.iter: 29.52 (3)
  load_resource: 192.605
  PetaboxLoader3.resolve: 70.254
--></div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container hidden overflow-hidden" id="GamesListContainer2" data-sortfilter="2" data-gamefilter="1" data-minbclevel="0" style="height: 0px;">
    <div class="games-list-header games-filter-changer">
	    <h2>Top Favorite</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
            </div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container hidden overflow-hidden" id="GamesListContainer3" data-sortfilter="3" data-gamefilter="1" data-minbclevel="0" style="height: 0px;">
    <div class="games-list-header games-filter-changer">
	    <h2>Featured</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
            </div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="games-list-container hidden overflow-hidden" id="GamesListContainer15" data-sortfilter="15" data-gamefilter="1" data-minbclevel="0" style="height: 0px;">
    <div class="games-list-header games-filter-changer">
	    <h2>Personal Server</h2>
    </div>
    <div class="show-in-multiview-mode-only">
        <div class="see-all-button games-filter-changer btn-medium btn-neutral">
            See All
        </div>
    </div>

    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
            </div>

            <div class="scroller prev hidden">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/bf9c0660cdeb6283b71aa9237716519e.png">
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <img src="https://web.archive.org/web/20140702023825im_/http://images.rbxcdn.com/ab6e44a9d9ebfde2244da961275acd06.png">
                </div>
            </div>
        </div>
    </div>
</div>


            <div id="DivToHideOverflowFromLastGamesList" style="top: -160px;">
            </div>

        </div>


    </div>
</div>

<script type="text/javascript">
    Roblox.SearchBox = {};
    Roblox.SearchBox.Resources = {
        //<sl:translate>
        search: "Search"
        //</sl:translate>
    };
    Roblox.GamesPageContainerBehavior.Resources = {
        //<sl:translate>
        pageTitle: "ROBLOX Games - Browse our selection of free online games"
        //</sl:translate>
    };
    
    var defaultGamesLists = "0,8,13,9,11,14";
    Roblox.GamesPageContainerBehavior.FilterValueToGamesListsIdSuffixMapping = {"default": defaultGamesLists.split(',')};
    
    Roblox.GamesPageContainerBehavior.IsUserLoggedIn = false;
    Roblox.GamesPageContainerBehavior.adRefreshRateMilliSeconds = 3000;

    Roblox.GamesPageContainerBehavior.PromptForEmailAddress = false;
    Roblox.GamesPageContainerBehavior.PromptForEmailAddressDelayInMs = 0;
    Roblox.GamesPageContainerBehavior.ExperimentalGameSortVariation = 0;
</script>

                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
   </body>
</html>