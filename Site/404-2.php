<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
      <link rel="stylesheet" href="EtcCSS.css">
      <link rel="stylesheet" href="ForumCSS.css">
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php include_once "2014navbar.php"; ?>
                 <?php
        require "dbonly.php";
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
                <div id="Body" style="width:970px;">
                    

	<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr valign="top">
			
            <!-- left column -->
			
			
            <!-- center column -->
			<td id="ctl00_cphRoblox_CenterColumn" width="95%" class="CenterColumn">
				<br>
            	<span id="ctl00_cphRoblox_NavigationMenu2">

<div id="forum-nav" style="text-align: right">
	<a id="ctl00_cphRoblox_NavigationMenu2_ctl00_HomeMenu" class="menuTextLink first" href="/web/20140704221834/http://www.roblox.com/Forum/Default.aspx">Home</a>
	<a id="ctl00_cphRoblox_NavigationMenu2_ctl00_SearchMenu" class="menuTextLink" href="/web/20140704221834/http://www.roblox.com/Forum/Search/default.aspx">Search</a>
	
	
	
	
	
	
	
</div>
</span>
				<br>
				<table cellpadding="0" cellspacing="2" width="100%">
					<tbody><tr>
						<td align="right">
						    <span id="ctl00_cphRoblox_SearchRedirect">

<span>
    <span class="normalTextSmallBold">Search Squared Forums:</span>
    <input name="ctl00$cphRoblox$SearchRedirect$ctl00$SearchText" type="text" maxlength="50" id="ctl00_cphRoblox_SearchRedirect_ctl00_SearchText" class="notranslate" size="20">
    <input type="submit" name="ctl00$cphRoblox$SearchRedirect$ctl00$SearchButton" value="Go" id="ctl00_cphRoblox_SearchRedirect_ctl00_SearchButton" class="translate btn-control btn-control-medium forum-btn-control-medium">
</span></span>
							
						</td>
					</tr>
				</tbody></table>
                <div style="height:7px;"></div>
				<table cellpadding="2" cellspacing="1" border="0" width="100%" class="table"><tbody><tr class="table-header forum-table-header">
	<th class="first" colspan="2"><a id="ctl00_cphRoblox_ForumGroupRepeater1_ctl01_GroupTitle" class="forumTitle" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=1">Squared</a></th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Threads&nbsp;&nbsp;</th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Posts&nbsp;&nbsp;</th><th style="width:135px;white-space:nowrap;">&nbsp;Last Post&nbsp;</th>
</tr>

<tr class="forum-table-row">
	<td colspan="2" style="width:80%;"><a class="forum-summary" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=19"><div class="forumTitle">
		Name
	</div><div>
		Description
	</div></a></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Threads</span></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Posts</span></td><td align="center"><a class="last-post" href="/web/20140704221834/http://www.roblox.com/Forum/ShowPost.aspx?PostID=139250973#139250973"><span class="normalTextSmaller"><div>
		<b>Time</b>
	</div></span><span class="normalTextSmaller notranslate"><div class="notranslate">Latest Poster</div></span></a></td>
</tr>

<tr class="table-header forum-table-header">
	<th class="first" colspan="2"><a id="ctl00_cphRoblox_ForumGroupRepeater1_ctl02_GroupTitle" class="forumTitle" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=8">Club Houses</a></th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Threads&nbsp;&nbsp;</th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Posts&nbsp;&nbsp;</th><th style="width:135px;white-space:nowrap;">&nbsp;Last Post&nbsp;</th>
</tr>

<tr class="forum-table-row">
	<td colspan="2" style="width:80%;"><a class="forum-summary" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=19"><div class="forumTitle">
		Name
	</div><div>
		Description
	</div></a></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Threads</span></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Posts</span></td><td align="center"><a class="last-post" href="/web/20140704221834/http://www.roblox.com/Forum/ShowPost.aspx?PostID=139250973#139250973"><span class="normalTextSmaller"><div>
		<b>Time</b>
	</div></span><span class="normalTextSmaller notranslate"><div class="notranslate">Latest Poster</div></span></a></td>
</tr>

<tr class="table-header forum-table-header">
	<th class="first" colspan="2"><a id="ctl00_cphRoblox_ForumGroupRepeater1_ctl03_GroupTitle" class="forumTitle" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=9">Game Creation and Development</a></th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Threads&nbsp;&nbsp;</th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Posts&nbsp;&nbsp;</th><th style="width:135px;white-space:nowrap;">&nbsp;Last Post&nbsp;</th>
</tr>

<tr class="forum-table-row">
	<td colspan="2" style="width:80%;"><a class="forum-summary" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=19"><div class="forumTitle">
		Name
	</div><div>
		Description
	</div></a></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Threads</span></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Posts</span></td><td align="center"><a class="last-post" href="/web/20140704221834/http://www.roblox.com/Forum/ShowPost.aspx?PostID=139250973#139250973"><span class="normalTextSmaller"><div>
		<b>Time</b>
	</div></span><span class="normalTextSmaller notranslate"><div class="notranslate">Latest Poster</div></span></a></td>
</tr>

<tr class="table-header forum-table-header">
	<th class="first" colspan="2"><a id="ctl00_cphRoblox_ForumGroupRepeater1_ctl04_GroupTitle" class="forumTitle" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=6">Entertainment</a></th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Threads&nbsp;&nbsp;</th><th style="width:50px;white-space:nowrap;">&nbsp;&nbsp;Posts&nbsp;&nbsp;</th><th style="width:135px;white-space:nowrap;">&nbsp;Last Post&nbsp;</th>
</tr>

<tr class="forum-table-row">
	<td colspan="2" style="width:80%;"><a class="forum-summary" href="/web/20140704221834/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=19"><div class="forumTitle">
		Name
	</div><div>
		Description
	</div></a></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Threads</span></td><td class="forum-centered-cell" align="center"><span class="normalTextSmaller">Posts</span></td><td align="center"><a class="last-post" href="/web/20140704221834/http://www.roblox.com/Forum/ShowPost.aspx?PostID=139250973#139250973"><span class="normalTextSmaller"><div>
		<b>Time</b>
	</div></span><span class="normalTextSmaller notranslate"><div class="notranslate">Latest Poster</div></span></a></td>
</tr>

</tbody></table>
				<p></p>
			</td>

			
			
            <!-- right column -->
			

            
		</tr>
	</tbody></table>


                    <div style="clear:both"></div>
                </div>
         </div>
         <?php include "2014footer.php" ?>
      </div>
   </body>
</html>