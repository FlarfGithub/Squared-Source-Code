<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
      
      <link rel="stylesheet" href="EtcCSS.css">
   </head>
   <body class style>
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
                    $new = $db->query("SELECT * FROM news WHERE id = '".$ep->number($_GET['id'])."'");
    if($new->rowCount() == 0) {
        echo "news not found";
    } else {
        $new = $new->fetch();
    }
    $posters = $db->query("SELECT * FROM users WHERE id = '".$new['madeby']."'");
    $posters = $posters->fetch();
    $poster_username = $new['poster'];
    $poster_id = $new['madeby'];
    $post_name = $new['name'];
    $post_content = $new['content'];
    $post_id = $_GET['id'];
    $post_date = date("F jS Y", strtotime($new['postdate']));
    $post_time = $new['postdate'];
        ?>
        <style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  /*min-width:800px !important;*/
}
</style>

         <div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" style="width:970px;">
                    

	<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr valign="top">



<td id="ctl00_cphRoblox_CenterColumn" width="95%" class="CenterColumn">
<br>
<span id="ctl00_cphRoblox_PostView1">
<table cellpadding="0" width="100%">
<tbody>
<tr>
<td align="left">
<span id="ctl00_cphRoblox_PostView1_ctl00_Whereami1" name="Whereami1">
<div>
<nobr>
<a id="ctl00_cphRoblox_PostView1_ctl00_Whereami1_ctl00_LinkHome" class="linkMenuSink notranslate" href="/news">Squared News</a>
</nobr>
<nobr>
<span id="ctl00_cphRoblox_PostView1_ctl00_Whereami1_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
<a id="ctl00_cphRoblox_PostView1_ctl00_Whereami1_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/vnews?id=<?php echo $new['id']; ?>"><?php echo $new['name']; ?></a>
</nobr>

</div>
</span>
</td>
<td align="right">
<span id="ctl00_cphRoblox_PostView1_ctl00_Navigationmenu1">
<div id="forum-nav" style="text-align: right">
<a id="ctl00_cphRoblox_PostView1_ctl00_Navigationmenu1_ctl00_HomeMenu" class="menuTextLink first" href="/index">Home</a>

</div>
</span>
</td>
</tr>
<tr>
<td align="left" colspan="2">
<h2 id="ctl00_cphRoblox_PostView1_ctl00_PostTitle" cssclass="notranslate" style="margin-bottom:20px"><?php echo $new['name']; ?></h2>
</td>
</tr>

<tr>
<td colspan="2">
<table id="ctl00_cphRoblox_PostView1_ctl00_PostList" class="tableBorder" cellspacing="1" cellpadding="0" border="0" style="width:100%;">
<tbody>
<tr>
<td class="forumHeaderBackgroundAlternate" colspan="3" style="height:20px;">
<table class="forum-table-header" cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
<tbody>
<tr>
<td align="left" style="width:50%;"></td>
<td class="tableHeaderText table-header-right-align" align="right">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr class="forum-post">
<td class="forum-content-background" valign="top" style="width:150px;white-space:nowrap;">
<table border="0">
<tbody>
<tr>
 <td><img src="/img/Online.png" alt="" style="border-width:0px;">&nbsp;<a class="normalTextSmallBold notranslate" href="/user?id=<?php echo $new['madeby']; ?>"><?php echo $new['poster']; ?></a><br></td>
</tr>
<tr>
<td><a href="/user?id=<?php echo $new['madeby']; ?>" style="width:100px;height:100px;position:relative;"><img src="https://squared.cf/get_avatar?id=<?php echo $new['madeby']; ?>" style="border-width:0px;width:100px;height:100px;"></a></td>
</tr>
<tr>
<td><span class="normalTextSmaller">Joined: <?php echo date('F jS Y', strtotime($posters['created_at'])); ?></span></td>
</tr>
<tr>
<td><span class="normalTextSmaller">Total Posts: <?php echo $posters['newsposts']; ?></span></td>
</tr>
<tr>
<td style="height:20px;"><span class="normalTextSmaller primaryGroupInfo notranslate" username="<?php echo $new['poster']; ?>" style="display:none;"></span></td>
</tr>
</tbody>
</table>
</td>
<td class="forum-content-background" valign="top">
 <table cellspacing="0" cellpadding="3" border="0" style="width:100%;border-collapse:collapse;table-layout:fixed;overflow:hidden;word-wrap:break-word;">
<tbody>
<tr>
<td colspan="2"><span class="normalTextSmaller"><?php echo date('F jS Y', strtotime($new['postdate'])); ?> at <?php echo date('g:i A', strtotime($new['postdate'])); ?><a name=""></a></span></td>
</tr>
<tr>
<td valign="top" colspan="2" style="height:125px;"><span class="normalTextSmall notranslate"><?php echo $new['content']; ?></span></td>
</tr>
<tr>
<td colspan="2">
<span class="normalTextSmaller notranslate">
</span>
</td>
</tr>
<tr>
<td style="height:2px;"></td>
</tr>
<tr>
<td align="left" style="height:29px;"></td>
<td align="right"></td>
</tr>
</tbody>
</table>
</td>
</tr>


<tr>
<td colspan="2" style="height:20px;">
<table class="forum-table-header" cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
<tbody>
<tr>
<td align="left" style="width:50%;"></td>
<td class="tableHeaderText table-header-right-align" align="right">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>


<tr>
<td align="left">
<span id="ctl00_cphRoblox_PostView1_ctl00_Whereami2" name="Whereami2">
<div>
<nobr>
<a id="ctl00_cphRoblox_PostView1_ctl00_Whereami2_ctl00_LinkHome" class="linkMenuSink notranslate" href="/news">Squared News</a>
</nobr>
<nobr>
<span id="ctl00_cphRoblox_PostView1_ctl00_Whereami2_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
<a id="ctl00_cphRoblox_PostView1_ctl00_Whereami2_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/news?id=<?php echo $new['madeby']; ?>"><?php echo $new['name']; ?></a>
</nobr>

</div>
</span>
</td>
</tr>
</tbody>
</table>
</span>
</td>




</tr>
</tbody>
</table>
        </div>
        </div>
   </body>
</html>