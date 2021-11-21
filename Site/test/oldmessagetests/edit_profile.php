<?php
//This page let an user edit his profile
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/styles.css" rel="stylesheet" title="Style" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
  
		<div class="content">
<?php
if(isset($_SESSION['username']))
{
$nb_new_pm = mysqli_fetch_array(mysqli_query($conn,'select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) and id2="1"'));
$nb_new_pm = $nb_new_pm['nb_new_pm'];
?>
<div class="box">
    <div class="box_left">
        <a href="<?php echo $url_home; ?>">Chat Index</a> &gt; List of your Personal Messages
    </div>
    <div class="box_right">
        <a href="list_pm.php">Your messages <span class="badge"><font color="#ffcccc"><?php echo $nb_new_pm; ?></font></span></a> - <a href="profile.php?id=<?php echo $_SESSION['userid']; ?>"><?php echo htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></a> (<a href="login.php">Logout</a>)
    </div>
    <div class="clean"></div>
</div>
<?php
	if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email']))
	{
		if(get_magic_quotes_gpc())
		{
			$_POST['username'] = stripslashes($_POST['username']);
			$_POST['password'] = stripslashes($_POST['password']);
			$_POST['passverif'] = stripslashes($_POST['passverif']);
			$_POST['email'] = stripslashes($_POST['email']);
		}
		if($_POST['password']==$_POST['passverif'])
		{
			if(strlen($_POST['password'])>=6)
			{
				if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
				{
					$username = mysqli_real_escape_string($conn, $_POST['username']);
					$password = mysqli_real_escape_string($conn, $_POST['password']);
					$email = mysqli_real_escape_string($conn, $_POST['email']);
					$dn = mysqli_fetch_array(mysqli_query($conn,'select count(*) as nb from users where username="'.$username.'"'));
					if($dn['nb']==0 or $_POST['username']==$_SESSION['username'])
					{
						if(mysqli_query($conn,'update users set username="'.$username.'", password="'.$password.'", email="'.$email.'", avatar="'.$avatar.'" where id="'.mysqli_real_escape_string($_SESSION['userid']).'"'))
						{
							$form = false;
							unset($_SESSION['username'], $_SESSION['userid']);
?>
<div class="message">Your profile have successfully been edited. You must login again.<br />
<a href="login.php">Login</a></div>
<?php
						}
						else
						{
							$form = true;
							$message = 'An error occured while editing your profile.';
						}
					}
					else
					{
						$form = true;
						$message = 'Another user already uses this username.';
					}
				}
				else
				{
					$form = true;
					$message = 'The email you typed is not valid.';
				}
			}
			else
			{
				$form = true;
				$message = 'Your password must have a minimum of 6 characters.';
			}
		}
		else
		{
			$form = true;
			$message = 'The passwords you entered are not identical.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		if(isset($message))
		{
			echo '<strong>'.$message.'</strong>';
		}
		if(isset($_POST['username'],$_POST['password'],$_POST['email']))
		{
			$username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
			if($_POST['password']==$_POST['passverif'])
			{
				$password = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');
			}
			else
			{
				$password = '';
			}
			$email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');

		}
		else
		{
			$dnn = mysqli_fetch_array(mysqli_query($conn,'select username,email from users where username="'.$_SESSION['username'].'"'));
			$username = htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8');
			$password = '';
			$email = htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8');

		}
?>
    <form action="edit_profile.php" method="post">
    	<div class="col-md-4 col-md-offset-3">
        You can edit your informations:<br />
    </div>
        
        	<div class="col-md-4 col-md-offset-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" />

            <label for="password">Password<span class="small">(6 characters min.)</span></label>
            <input type="password"  class="form-control" name="password" id="password" value="<?php echo $password; ?>" />

            <label for="passverif">Password<span class="small">(verification)</span></label>
            <input type="password"  class="form-control" name="passverif" id="passverif" value="<?php echo $password; ?>" />
     

            <label for="email">Email</label>
            <input type="text"  class="form-control" name="email" id="email" value="<?php echo $email; ?>" /><br>
           
            <input type="submit" class="btn btn-primary btn-block" value="Submit" />
       
        </div>
    </form>

<?php
	}
}
else
{
?>
<h2>You must be logged to access this page:</h2>

	<form action="login.php" method="post">
		<div class="col-md-4 col-md-offset-3">
		<label for="username">Username</label><input type="text" class="form-control" name="username" id="username" /><br />
		<label for="password">Password</label><input type="password" class="form-control" name="password" id="password" /><br />
   
	        <input type="submit" class="btn btn-primary btn-block" value="Login" /> 
        </div>
    </div>
    </form>
</div>
<?php
}
?>
		</div>

	</body>
</html>