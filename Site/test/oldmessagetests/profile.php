<?php
//This page display the profile of an user
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
if(isset($_SESSION['id']))
{
$nb_new_pm = mysqli_fetch_array(mysqli_query($conn,'select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['id'].'" and user1read="no") or (user2="'.$_SESSION['id'].'" and user2read="no")) and id2="1"'));
$nb_new_pm = $nb_new_pm['nb_new_pm'];
?>
<div class="box">
    <div class="box_left">
        <a href="<?php echo $url_home; ?>">Chat Index</a> &gt; List of your Personal Messages
    </div>
    <div class="box_right">
        <a href="list_pm.php">Your messages <span class="badge"><font color="#ffcccc"><?php echo $nb_new_pm; ?></font></span></a> - <a href="profile.php?id=<?php echo $_SESSION['id']; ?>"><?php echo htmlentities($_SESSION['user'], ENT_QUOTES, 'UTF-8'); ?></a> (<a href="login.php">Logout</a>)
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
    	<a href="<?php echo $url_home; ?>">Chat Index</a> &gt; <a href="users.php">List</a> &gt; Profile of an user
    </div>
	<div class="box_right">
    	<a href="signup.php">Sign Up</a> - <a href="login.php">Login</a>
    </div>
    <div class="clean"></div>
</div>
<?php
}
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
	$dn = mysqli_query($conn,'select user, email, ticket, created_at from users where id="'.$id.'"');
	if(mysqli_num_rows($dn)>0)
	{
		$dnn = mysqli_fetch_array($dn);
?>
This is the profile of "<?php echo htmlentities($dnn['user']); ?>" :
<?php
if($_SESSION['id']==$id)
{
?>
<br /><div class="center"><a href="edit_profile.php" class="button">Edit my profile</a></div>
<?php
}
?>
<center>
<table style="width:500px;">
</td>
    	<td class="left"><h1><?php echo htmlentities($dnn['user'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?><br />
        This user joined the website on <?php echo date('Y/m/d',$dnn['created_at']); ?></td>
    </tr>
</table>
<?php
if(isset($_SESSION['user']) and $_SESSION['user']!=$dnn['user'])
{
?>
<br /><a href="new_pm.php?recip=<?php echo urlencode($dnn['user']); ?>" class="big">Recipient "<?php echo ucfirst(htmlentities($dnn['user'], ENT_QUOTES, 'UTF-8'))
    ; ?>"</a>
<?php
}
	}
	else
	{
		echo 'This user doesn\'t exist.';
	}
}
else
{
	echo 'The ID of this user is not defined.';
}
?>
		</div>

	</body>
</html></center>