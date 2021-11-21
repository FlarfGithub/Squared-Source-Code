<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
    <?php include_once "2014head.php"; ?>
    <?php 
    require_once "DiscordEmbed.php";
    $discordembed = new DiscordEmbed(); 
    if(isset($_GET['lang'])) {
        if($_GET['lang'] == 'ru') {
            //$discordembed->NormalEmbed("Зайти", "https://squared.cf/Default.aspx");
            echo '<title>Зайти - Squared</title>
    <meta property="og:site_name" content="Squared">
    <meta property="og:title" content="Зайти - Squared">
    <meta property="og:type" content="profile">
    <meta property="og:url" content="">
    <meta property="og:description" content="Squared, это вебсайт. Он за старого кирпичного строителя. Хороший для использования.">
    <meta property="og:image" content="https://cdn.upload.systems/uploads/pDPrTMVK.png">';
        } else {
            $discordembed->NormalEmbed("Home", "https://squared.cf/Default.aspx");
        }
    } else {
        $discordembed->NormalEmbed("Home", "https://squared.cf/Default.aspx");
    } ?>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php if(isset($_SESSION['id'])){ header('Location: Default.aspx'); } ?>
         <?php
                   if(isset($_GET['lang'])) {
        if($_GET['lang'] == 'ru') {
            include_once "2014navbar_ru.php";
        } else {
            include_once "2014navbar.php";
        }
    } else {
        include_once "2014navbar.php";
    }
                   ?>
         <style>
            .validation-summary-success{background-color:#E5FAE5;border:1px solid #0C0;padding:5px 0 5px 5px;font-size:12px;font-weight:normal;text-align:left;margin-bottom:10px;}.validation-summary-success
        </style>
         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
                   <?php
                   $logintosquared = 'Login to SQUARED';
                   $usernametext = 'Username:';
                   $passwordtext = 'Password:';
                   $notamember = 'Not a member?';
                   $signuptoplay = 'Sign Up to Play!';
                   $signuptext = 'Sign Up';
                   $signintext = 'Sign In';
                   if(isset($_GET['lang'])) {
        if($_GET['lang'] == 'ru') {
            $logintosquared = 'Зайти в';
            $passwordtext = 'Пароль:';
            $usernametext = 'Имя пользователя:';
            $notamember = 'Hет аккаунта?';
            $signuptoplay = 'Зарегистрируйся что-бы играть!';
            $signuptext = 'Зарегистрироватся';
            $signintext = 'Зайти';
        } else {
            $logintosquared = 'Login to';
            $usernametext = 'Username:';
            $passwordtext = 'Password:';
            $notamember = 'Not a member?';
            $signuptoplay = 'Sign Up to Play!';
            $signuptext = 'Sign Up';
            $signintext = 'Sign In';
        }
    } else {
        $logintosquared = 'Login to';
        $usernametext = 'Username:';
        $passwordtext = 'Password:';
        $notamember = 'Not a member?';
        $signuptoplay = 'Sign Up to Play!';
        $signuptext = 'Sign Up';
        $signintext = 'Sign In';
    }
                   ?>
                  <h1><?php echo $logintosquared; ?> SQUARED</h1>
                  <div>
                     <div id="loginarea" >
                        <div id="leftArea">
                           <div id="loginPanel">
                    <form action="loggingin.php" method="post" id="freshcut">
                              <?php /*
	if (isset($_GET['err'])){
		echo '<div class="validation-summary-errors">'.(array(1 => "Invalid Username", 2 => "Invalid Password", 3 => "Account Doesn't Exist", 4 => "Please enter a username!", 5=>"Please enter a password!", 6=>"There was an error connecting to the database. Try again later!")[intval($_GET['err'])]).'</div>';
	} elseif (isset($_GET['success'])) {
	    echo '<div class="validation-summary-success">'.(array(1 => "Successfully created account!", 2 => "Invalid Password or Password Don't Match", 3 => "Invalid E-mail:", 4 => "Registrations are closed! Try again later.", 5=>"Please complete the CAPTCHA.", 6=>"Invalid Invite Key")[intval($_GET['err'])]).'</div>';
	}*/
?>
                              <table id="logintable">
                                 <tbody>
                                    <tr id="username">
                                       <td><label class="form-label" for="Username"><?php echo $usernametext; ?></label></td>
                                       <td><input class="text-box text-box-medium" id="Username" name="login" type="text" value=""></td>
                                    </tr>
                                    <tr id="password">
                                       <td><label class="form-label" for="Password"><?php echo $passwordtext; ?></label></td>
                                       <td><input class="text-box text-box-medium" id="Password" name="pass" type="password"></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <div>
                              </div>
                              <div>
                                 <div id="signInButtonPanel">
                                    <a class="btn-medium btn-neutral" href="javascript:{}" onclick="document.getElementById('freshcut').submit();"><?php echo $signintext; ?></a>
                                 </div>
                                 <div class="clearFloats">
                                 </div>
                              </div>
							  </form>
                           </div>
                        </div>
                        <div id="rightArea" class="divider-left">
                           <div id="signUpPanel" class="FrontPageLoginBox">
                              <p class="text"><?php echo $notamember; ?></p>
                              <h2><?php echo $signuptoplay; ?></h2>
                              <br/>
                              <a href="/register.aspx" class="btn-medium btn-primary"><?php echo $signuptext; ?></a>                    
                           </div>
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