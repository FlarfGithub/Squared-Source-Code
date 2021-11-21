<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <?php include_once "2014head.php"; ?>
    <?php 
        require_once "DiscordEmbed.php";
        $discordembed = new DiscordEmbed(); 
        $discordembed->NormalEmbed("Register", "https://squared.cf/register.aspx");
    ?>
</head>
<body class="">
    <div id="MasterContainer">
        <?php include_once "updateinfo.php"; ?>
        <?php if(isset($_SESSION['id'])){ header('Location: /Default.aspx'); } ?>
        <?php include_once "2014navbar.php"; ?>
        <style>
            .validation-summary-success{background-color:#E5FAE5;border:1px solid #0C0;padding:5px 0 5px 5px;font-size:12px;font-weight:normal;text-align:left;margin-bottom:10px;}.validation-summary-success
        </style>
        <div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" style="width:970px">
                    <center><h1>Sign up to build &amp; make friends</h1></center>
                  <div>
                     <div id="loginarea" >
                        <div id="leftArea">
                           <div id="loginPanel">
                            <form action="regform.php" method="post" id="freshcut">
                        <?php
	if (isset($_GET['err'])) {
		echo '<div class="validation-summary-errors">'.(array(1 => "Invalid Username or Username Already Taken", 2 => "Invalid Password or Password Don't Match", 3 => "Invalid E-mail:", 4 => "Registrations are closed! Try again later.", 5=>"Please complete the CAPTCHA.", 6=>"Invalid Invite Key")[intval($_GET['err'])]).'</div>';
	}
?>


                              <table id="logintable">
                                 <tbody>
                                    <tr id="username">
                                       <td><label class="form-label" for="Username">Desired Username:</label></td>
                                       <td><input class="text-box text-box-medium" id="Username" name="user" type="text" value=""></td>
                                    </tr>
                                    <tr id="email">
                                       <td><label class="form-label" for="Email">Email:</label></td>
                                       <td><input class="text-box text-box-medium" id="Email" name="email" type="text" value=""></td>
                                    </tr>
                                    <tr id="password">
                                       <td><label class="form-label" for="Password">Password:</label></td>
                                       <td><input class="text-box text-box-medium" id="Password" name="pass" type="password"></td>
                                    </tr>
                                    <tr id="password2">
                                       <td><label class="form-label" for="Password2">Confirm Password:</label></td>
                                       <td><input class="text-box text-box-medium" id="Password" name="cpass" type="password"></td>
                                    </tr>
                                    <tr id="invite">
                                       <td><label class="form-label" for="Invite">Invite Key:</label></td>
                                       <td><input class="text-box text-box-medium" id="Invite" name="invite" type="text" value=""></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <div>
                              </div>
                              <div>
                                 <div id="signInButtonPanel">
                                    <a class="btn-medium btn-neutral" href="javascript:{}" onclick="document.getElementById('freshcut').submit();">Sign Up</a>
                                 </div>
                                 <div class="clearFloats">
                                 </div>
                              </div>
							  </form>
                           </div>
                        </div>
                        <div id="rightArea" class="divider-left">
                           <div id="signUpPanel" class="FrontPageLoginBox">
                              <h2>Already a member?</h2>
                              <br/>
                              <a href="/Login.aspx" class="btn-medium btn-primary">Sign In</a>                    
                           </div>
                           <br>
                           <br>
                           <br>
                           <br>
                           
                        </div>
                     </div>
                     <input id="ReturnUrl" name="ReturnUrl" type="hidden" value="">
                  </div>
                  <div style="clear:both"></div>
               </div>
            </div>
         </div>
         <?php include "2014footer.php" ?>
      </div>
   </body>
</html>