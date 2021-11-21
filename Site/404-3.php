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
			

			
			<td id="ctl00_cphRoblox_CenterColumn" class="CenterColumn">
				<br>
				<span id="ctl00_cphRoblox_ThreadView1">

<table cellpadding="0" width="100%">
	<tbody><tr>
		<td align="left"><span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1" name="Whereami1">
<div>
    <nobr>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkHome" class="linkMenuSink notranslate" href="/web/20140706055037/http://www.roblox.com/Forum/Default.aspx">ROBLOX Forum</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/web/20140706055037/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=1">ROBLOX</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_ForumSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkForum" class="linkMenuSink notranslate" href="/web/20140706055037/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=46">All Things ROBLOX</a>
    </nobr>
</div></span></td>
        <td align="right"><span id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1">

<div id="forum-nav" style="text-align: right">
	<a id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1_ctl00_HomeMenu" class="menuTextLink first" href="/web/20140706055037/http://www.roblox.com/Forum/Default.aspx">Home</a>
	<a id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1_ctl00_SearchMenu" class="menuTextLink" href="/web/20140706055037/http://www.roblox.com/Forum/Search/default.aspx">Search</a>
	
	
	
	
	
	
	
</div>
</span></td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr style="padding-bottom:5px;">
		<td valign="bottom" align="left">
		    <a id="ctl00_cphRoblox_ThreadView1_ctl00_NewThreadLinkTop" class="btn-control btn-control-medium verified-email-act" href="/web/20140706055037/http://www.roblox.com/Forum/AddPost.aspx?ForumID=46">
				New Thread<span class="btn-text">New Thread</span>
			</a>
		</td>
		<td align="right">
		    <span class="normalTextSmallBold">Search this forum: </span>
			<input name="ctl00$cphRoblox$ThreadView1$ctl00$Search" type="text" id="ctl00_cphRoblox_ThreadView1_ctl00_Search">
			<input type="submit" name="ctl00$cphRoblox$ThreadView1$ctl00$SearchButton" value=" Go " id="ctl00_cphRoblox_ThreadView1_ctl00_SearchButton" class="translate btn-control btn-control-medium forum-btn-control-medium">
        </td>
	</tr>
	<tr>
		<td valign="top" colspan="2">
		    <div style="height:7px"></div>
		    <table id="ctl00_cphRoblox_ThreadView1_ctl00_ThreadList" class="tableBorder" cellspacing="1" cellpadding="3" border="0" style="width:100%;">
	<tbody><tr class="forum-table-header">
		<th align="left" colspan="3" style="height:25px;">&nbsp;Subject&nbsp;</th><th align="left" style="white-space:nowrap;">&nbsp;Author&nbsp;</th><th align="center">&nbsp;Replies&nbsp;</th><th align="center">&nbsp;Views&nbsp;</th><th align="center" style="white-space:nowrap;">&nbsp;Last Post&nbsp;</th>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Popular post (Not Read)" src="https://web.archive.org/web/20140706055037im_/http://www.roblox.com/images/Forums/popular-unread.png" style="border-width:0px;"></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20140706055037/http://www.roblox.com/Forum/ShowPost.aspx?PostID=80620879"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Post Title
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20140706055037/http://www.roblox.com/User.aspx?UserName=reesemcblox"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				username
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">Replies</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">Views</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20140706055037/http://www.roblox.com/Forum/ShowPost.aspx?PostID=80620879#80620879"><div>
			<span class="normalTextSmaller"><b>Time/Pinned</b></span>
		</div><div class="normalTextSmaller notranslate">Reply username</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="https://web.archive.org/web/20140706055037im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20140706055037/http://www.roblox.com/Forum/ShowPost.aspx?PostID=139395625"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Post Title
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20140706055037/http://www.roblox.com/User.aspx?UserName=TheGrandNoob1337"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				username
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">Replies</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">Views</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20140706055037/http://www.roblox.com/Forum/ShowPost.aspx?PostID=139395625#139395686"><div>
			<span class="normalTextSmaller"><b>Time/Pinned</b></span>
		</div><div class="normalTextSmaller notranslate">Reply username</div></a></td>
	</tr><tr class="forum-table-footer">
		<td colspan="7">&nbsp;</td>
	</tr>
</tbody></table>
            <span id="ctl00_cphRoblox_ThreadView1_ctl00_Pager"><table cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td><span class="normalTextSmallBold">Page 1 of 23,031</span></td><td align="right"><span><span class="normalTextSmallBold">Goto to page: </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page0" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page0','')">1</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page1" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page1','')">2</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page2" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page2','')">3</a><span class="normalTextSmallBold"> ... </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page23029" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page23029','')">23,030</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page23030" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page23030','')">23,031</a><span class="normalTextSmallBold">&nbsp;</span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Next" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Next','')">Next</a></span></td>
	</tr>
</tbody></table></span>
            
            
		</td>
	</tr>
	<tr>
		<td colspan="2">
			&nbsp;
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2" name="Whereami2">
<div>
    <nobr>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkHome" class="linkMenuSink notranslate" href="/web/20140706055037/http://www.roblox.com/Forum/Default.aspx">ROBLOX Forum</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/web/20140706055037/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=1">ROBLOX</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_ForumSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkForum" class="linkMenuSink notranslate" href="/web/20140706055037/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=46">All Things ROBLOX</a>
    </nobr>
</div></span>
			
		</td>
		<td align="right">
			<span class="normalTextSmallBold">Display threads for: </span><select name="ctl00$cphRoblox$ThreadView1$ctl00$DisplayByDays" id="ctl00_cphRoblox_ThreadView1_ctl00_DisplayByDays">
	<option selected="selected" value="0">All Days</option>
	<option value="1">Today</option>
	<option value="3">Past 3 Days</option>
	<option value="7">Past Week</option>
	<option value="14">Past 2 Weeks</option>
	<option value="30">Past Month</option>
	<option value="90">Past 3 Months</option>
	<option value="180">Past 6 Months</option>
	<option value="360">Past Year</option>

</select>
			<br>
			    <a id="ctl00_cphRoblox_ThreadView1_ctl00_MarkAllRead" class="linkSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$MarkAllRead','')">Mark all threads as read</a>
			<br>
			<span class="normalTextSmallBold">
				
			</span>
		</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</tbody></table>
</span>
			</td>

				
            
            
            
            
		</tr>
	</tbody></table>
                </div>
         </div>
         <?php include "2014footer.php" ?>
      </div>
   </body>
</html>