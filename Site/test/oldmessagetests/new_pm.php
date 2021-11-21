<?php
//This page let create a new personnal message
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
        <title>New PM</title>
    </head>
    <body>

<?php
if(isset($_SESSION['id']))
{
$form = true;
$otitle = '';
$orecip = '';
$omessage = '';
if(isset($_POST['title'], $_POST['recip'], $_POST['message']))
{
	$otitle = $_POST['title'];
	$orecip = $_POST['recip'];
	$omessage = $_POST['message'];
	if(get_magic_quotes_gpc())
	{
		$otitle = stripslashes($otitle);
		$orecip = stripslashes($orecip);
		$omessage = stripslashes($omessage);
	}
	if($_POST['title']!='' and $_POST['recip']!='' and $_POST['message']!='')
	{
		$title = mysqli_real_escape_string($conn, $otitle);
		$recip = mysqli_real_escape_string($conn, $orecip);
		$message = mysqli_real_escape_string($conn, $omessage);
		$dn1 = mysqli_fetch_array(mysqli_query($conn,'select count(id) as recip, id as recipid, (select count(*) from pm) as npm from users where user="'.$recip.'"'));
		if($dn1['recip']==1)
		{
			if($dn1['recipid']!=$_SESSION['userid'])
			{
				$id = $dn1['npm']+1;
				if(mysqli_query($conn, 'insert into pm (id, id2, title, user1, user2, message, timestamp, user1read, user2read)values("'.$id.'", "1", "'.$title.'", "'.$_SESSION['userid'].'", "'.$dn1['recipid'].'", "'.$message.'", "'.time().'", "yes", "no")'))
				{
	?>
	<div class="message">The PM have successfully been sent.<br />
	<a href="list_pm.php">List of your Personal Messages</a></div>
	<?php
					$form = false;
				}
				else
				{
					$error = 'An error occurred while sending the PM.';
				}
			}
			else
			{
				$error = 'You cannot send a PM to yourself.';
			}
		}
		else
		{
			$error = 'The recipient of your PM doesn\'t exist.';
		}
	}
	else
	{
		$error = 'A field is not filled.';
	}
}
elseif(isset($_GET['recip']))
{
	$orecip = $_GET['recip'];
}
if($form)
{
if(isset($error))
{
	echo '<div class="message">'.$error.'</div>';
}
?>
<div class="content">
<?php
$nb_new_pm = mysqli_fetch_array(mysqli_query($conn,'select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) and id2="1"'));
$nb_new_pm = $nb_new_pm['nb_new_pm'];
?>
<div class="box">
	<div class="box_left">
    	<a href="<?php echo $url_home; ?>">Chat Index</a> &gt; <a href="list_pm.php">List of you PMs</a> &gt; New PM
    </div>
	<div class="box_right">
     	<a href="list_pm.php">Your messages <span class="badge"><font color="#ffcccc"><?php echo $nb_new_pm; ?></font></span></a> - <a href="profile.php?id=<?php echo $_SESSION['userid']; ?>"><?php echo htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></a> (<a href="login.php">Logout</a>)
    </div>
    <div class="clean"></div>
</div>
<div class="row">
<h1>New Personal Message</h1>
    <form action="new_pm.php" method="post">
	<!-- 	Please fill this form to send a PM:<br /> -->
		<div class="col-md-5 col-md-offset-4">
        <label for="title">Title</label>
        <input type="text" class="form-control" placeholder="Title" value="<?php echo htmlentities($otitle, ENT_QUOTES, 'UTF-8'); ?>" id="title" name="title" /><br>
 
        <label for="recip">Recipient<span class="small">(Username)</span></label>
        <input type="text" class="form-control" placeholder="Recipient" value="<?php echo htmlentities($orecip, ENT_QUOTES, 'UTF-8'); ?>" id="recip" name="recip" /><br />
     
        <label for="message">Message</label>
        <textarea cols="40" rows="5" class="form-control" placeholder="Please Input your message his/her" id="message" name="message"><?php echo htmlentities($omessage, ENT_QUOTES, 'UTF-8'); ?></textarea><br />
        <input type="submit" class="btn btn-primary btn-block" value="Send" />
    </form>
    </div>
</div>
</div>
<?php
}
}
else
{
?>
<div class="message">You must be logged to access this page.</div>
<div class="box_login">
	<form action="login.php" method="post">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" /><br />
		<label for="password">Password</label><input type="password" name="password" id="password" /><br />
        <label for="memorize">Remember</label><input type="checkbox" name="memorize" id="memorize" value="yes" />
        <div class="center">
	        <input type="submit" value="Login" /> <input type="button" onclick="javascript:document.location='signup.php';" value="Sign Up" />
        </div>
    </form>
</div>
<?php
}
?>
	
	</body>
</html>