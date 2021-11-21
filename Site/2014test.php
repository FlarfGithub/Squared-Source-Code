<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php if(isset($_SESSION['id'])){ header('Location: index.php'); } ?>
         <?php include_once "2014navbar.php"; ?>
         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
                  <h1>Login to SQUARED</h1>
                  <div>
                     <div id="loginarea" >
                        <div id="leftArea">
                           <div id="loginPanel">
                    <form action="loggingin.php" method="post" id="freshcut">
                              <table id="logintable">
                                 <tbody>
                                    <tr id="username">
                                       <td><label class="form-label" for="Username">Username:</label></td>
                                       <td><input class="text-box text-box-medium" id="Username" name="login" type="text" value=""></td>
                                    </tr>
                                    <tr id="password">
                                       <td><label class="form-label" for="Password">Password:</label></td>
                                       <td><input class="text-box text-box-medium" id="Password" name="pass" type="password"></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <div>
                              </div>
                              <div>
                                 <div id="signInButtonPanel">
                                    <a class="btn-medium btn-neutral" href="javascript:{}" onclick="document.getElementById('freshcut').submit();">Sign In</a>
                                 </div>
                                 <div class="clearFloats">
                                 </div>
                              </div>
							  </form>
                           </div>
                        </div>
                        <div id="rightArea" class="divider-left">
                           <div id="signUpPanel" class="FrontPageLoginBox">
                              <p class="text">Not a member?</p>
                              <h2>Sign Up to Play!</h2>
                              <br/>
                              <a href="/register" class="btn-medium btn-primary">Sign Up</a>                    
                           </div>
                        </div>
                     </div>
                     <input id="ReturnUrl" name="ReturnUrl" type="hidden" value="">
                  </div>
                  <div style="clear:both"></div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>