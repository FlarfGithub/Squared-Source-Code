<?php
//This page let users sign up
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/styles.css" rel="stylesheet" title="Style" />
                <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Sign Up</title>
    </head>
    <body>
<?php
if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email'], $_POST['avatar']) and $_POST['username']!='')
{
	if(get_magic_quotes_gpc())
	{
		$_POST['username'] = stripslashes($_POST['username']);
		$_POST['password'] = stripslashes($_POST['password']);
		$_POST['passverif'] = stripslashes($_POST['passverif']);
		$_POST['email'] = stripslashes($_POST['email']);
		$_POST['avatar'] = stripslashes($_POST['avatar']);
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
				$avatar = mysqli_real_escape_string($conn, $_POST['avatar']);
				$dn = mysqli_num_rows(mysqli_query($conn,'select id from users where username="'.$username.'"'));
				if($dn==0)
				{
					$dn2 = mysqli_num_rows(mysqli_query($conn,'select id from users'));
					$id = $dn2+1;
					if(mysqli_query($conn,'insert into users(id, username, password, email, avatar, signup_date) values ('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.$avatar.'", "'.time().'")'))
					{
						$form = false;
?>
<div class="message">You have successfully been signed up. You can now log in.<br />
<a href="login.php">Log in</a></div>
<?php
					}
					else
					{
						$form = true;
						$message = 'An error occurred while signing you up.';
					}
				}
				else
				{
					$form = true;
					$message = 'Another user already use this username.';
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
		echo '<div class="message">'.$message.'</div>';
	}
?>
<div class="content">
<div class="box">
	<div class="box_left">
    	<a href="<?php echo $url_home; ?>">Chat Index</a> &gt; Sign Up
    </div>
	<div class="box_right">
  <a href="index.php">Login</a>
    </div>
    <div class="clean"></div>
</div>
    <form action="signup.php" method="post">
        Please fill this form to sign up:<br />
    
      <div class="col-md-5">
         <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
        </div>
          <div class="col-md-5">
            <label for="password">Password<span class="small">(6 characters min.)</span></label>
            <input type="password" class="form-control" name="password" placeholder="Password"/><br />
        </div>
                <div class="col-md-5">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
        </div>
           <div class="col-md-5">
            <label for="passverif">Password<span class="small">(verification)</span></label>
            <input type="password" class="form-control" name="passverif" placeholder="Re-Password"/><br />
        </div>

<!--             <div class="col-md-5">
            <label for="avatar">Avatar<span class="small">(optional)</span></label>
            <input type="text" class="form-control" name="avatar" value="<?php if(isset($_POST['avatar'])){echo htmlentities($_POST['avatar'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
        </div>
 -->           <div class="col-md-10">
            <input type="submit" class="btn btn-primary pull-right" value="Sign Up" />
        </div>
		
    </form>
</div>
<?php
}
?>

	</body>
</html>