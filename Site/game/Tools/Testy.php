<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "../../2014head.php"; ?>
      <script src="/sdf.js" type="text/javascript"></script>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "../../updateinfo.php"; ?>
         <?php if(!isset($_SESSION['id'])){ header('Location: /login.ashx'); die(); } ?>
         <?php include_once "../../2014navbar.php"; ?>
         <?php include_once "../../updatestuff.php"; ?>

         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
			   <br>
			   <span style="center">hello</span>
            </div>
         </div>
      </div>
   </body>
</html>