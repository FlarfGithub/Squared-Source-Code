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
                        $bannote = $wiersz['banreason'];
                        $moderatornote = $wiersz['moderatornote'];
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
<h1>User is Banned.</h1>
<h3>this dude got banned LMAO WHAT AN IDIOT HAHAHAHAHHA</h3>
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
            ?>
         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
                   <br>
                   <br>
<div style="float:center;min-height:600px">
    <table class="table" cellspacing="0" cellpadding="0" border="0" id="_ctl0_cphRoblox_gvPlacesBrowsed">
<div class="col-10-12 push-1-12">
<div class="card">
<div class="top red">
Your account has been suspended
</div>
<div class="content">
<span class="dark-gray-text sbold">We have deemed that your account has violated our Terms of Service, and as such a punishment has been applied to your account. Further incompetence or violations to our Terms of Service will result in a termination of your account.</span>
<div style="padding-left:20px;margin-top:20px;">
<div class="block" style="margin-bottom:20px;">
</div>
<div class="block" style="margin-bottom:20px;">
<b class="dark-gray-text">Ban Reason:</b>
<span class="light-gray-text"><?php echo $bannote; ?></span>
</div>
</div>
<div style="padding-left:20px;margin-top:20px;">
<div class="block" style="margin-bottom:20px;">
<b class="dark-gray-text">Moderator Note:</b>
<span class="light-gray-text"><?php echo $moderatornote; ?></span>
</div>
</div>
<hr>
<div style="margin-bottom:10px;">
<span class="dark-gray-text" style="font-size:16px;">If you wish to appeal, then you cant. You may have to dm phil.</a>.
</span></div>
</div>
</div>
</div>
            </div>
         </div>
         <?php include "2014footer.php" ?>
      </div>
   </body>
</html>