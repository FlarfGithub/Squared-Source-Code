<?php
//This page display a personnal message
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
        <title>Read a PM</title>
    </head>
    <body>

<?php
if(isset($_SESSION['id']))
{
if(isset($_GET['id']))
{
$id = intval($_GET['id']);
$req1 = mysqli_query($conn,'select title, user1, user2 from pm where id="'.$id.'" and id2="1"');
$dn1 = mysqli_fetch_array($req1);
if(mysqli_num_rows($req1)==1)
{
if($dn1['user1']==$_SESSION['id'] or $dn1['user2']==$_SESSION['id'])
{
if($dn1['user1']==$_SESSION['id'])
{
	mysqli_query($conn,'update pm set user1read="yes" where id="'.$id.'" and id2="1"');
	$user_partic = 2;
}
else
{
	mysqli_query($conn,'update pm set user2read="yes" where id="'.$id.'" and id2="1"');
	$user_partic = 1;
}
$req2 = mysqli_query($conn,'select pm.timestamp, pm.message, users.id as id, users.username, users.avatar from pm, users where pm.id="'.$id.'" and users.id=pm.user1 order by pm.id2');
if(isset($_POST['message']) and $_POST['message']!='')
{
	$message = $_POST['message'];
	if(get_magic_quotes_gpc())
	{
		$message = stripslashes($message);
	}
	$message = mysqli_real_escape_string($conn, $message);
	if(mysqli_query($conn,'insert into pm (id, id2, title, user1, user2, message, timestamp, user1read, user2read)values("'.$id.'", "'.(intval(mysqli_num_rows($req2))+1).'", "", "'.$_SESSION['id'].'", "", "'.$message.'", "'.time().'", "", "")') and mysqli_query($conn, 'update pm set user'.$user_partic.'read="yes" where id="'.$id.'" and id2="1"'))
	{
?>
<div class="message">Your reply has successfully been sent.<br />
<a href="read_pm.php?id=<?php echo $id; ?>">Go to the PM</a></div>
<?php
	}
	else
	{
?>
<div class="message">An error occurred while sending the reply.<br />
<a href="read_pm.php?id=<?php echo $id; ?>">Go to the PM</a></div>
<?php
	}
}
else
{
?>
<div class="content">
<?php
if(isset($_SESSION['id']))
{
$nb_new_pm = mysqli_fetch_array(mysqli_query($conn,'select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['id'].'" and user1read="no") or (user2="'.$_SESSION['id'].'" and user2read="no")) and id2="1"'));
$nb_new_pm = $nb_new_pm['nb_new_pm'];
?>
<div class="box">
	<div class="box_left">
    	<a href="<?php echo $url_home; ?>">Forum Index</a> &gt; <a href="list_pm.php">List of your PMs</a> &gt; Read a PM
    </div>
	<div class="box_right">
    	<a href="list_pm.php">Your messages <span class="badge"><font color="#ffcccc"><?php echo $nb_new_pm; ?></font></span></a> - <a href="profile.php?id=<?php echo $_SESSION['id']; ?>"><?php echo htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></a> (<a href="login.php">Logout</a>)
    </div>
    <div class="clean"></div>
</div>
<?php
}
else
{
?>
<div class="box">
	<div class="box_left">
    	<a href="<?php echo $url_home; ?>">Chat Index</a> &gt; <a href="list_pm.php">List of your PMs</a> &gt; Read a PM
    </div>
	<div class="box_right">
    	<a href="signup.php">Sign Up</a> - <a href="login.php">Login</a>
    </div>
    <div class="clean"></div>
</div>
<?php
}
?>
<h1><?php echo $dn1['title']; ?></h1>
  <table class="table table-condensed">
	<tr>
    	<th class="author">User</th>
        <th>Message</th>
    </tr>
<?php
while($dn2 = mysqli_fetch_array($req2))
{
?>
	<tr>
    	<td class="author center"><?php
if($dn2['avatar']!='')
{
	echo '<img src="'.htmlentities($dn2['avatar']).'" alt="Image Perso" style="max-width:100px;max-height:100px;" />';
}
?><a href="profile.php?id=<?php echo $dn2['id']; ?>"><?php echo $dn2['username']; ?></a></td>
    	<td class="left"><div class="date">Date sent: <?php echo date('Y/m/d H:i:s' ,$dn2['timestamp']); ?></div>
    	<?php echo $dn2['message']; ?></td>
    </tr>
<?php
}
?>
</table>
<hr></hr>
<h3>Reply</h3>
<div class="center">
    <div class="col-md-6 col-md-offset-2">
    <form action="read_pm.php?id=<?php echo $id; ?>" method="post">
    	<label for="message" class="center">Message</label><br />
        <textarea cols="40" class="form-control" rows="5" name="message" id="message" placeholder="Please Input your reply here!"></textarea><br />
        <input type="submit" class="btn btn-primary" value="Send" />
    </form>
</div>
</div>
</div>
<?php
}
}
else
{
	echo '<div class="message">You don\'t have the right to access this page.</div>';
}
}
else
{
	echo '<div class="message">This message doesn\'t exist.</div>';
}
}
else
{
	echo '<div class="message">The ID of this message is not defined.</div>';
}
}
else
{
?>
<div class="message">You must be logged to access this page.</div>
<div class="box_login">
	<form action="login.php" method="post">
		<label for="username">Username</label><input type="text" name="username" id="username" /><br />
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