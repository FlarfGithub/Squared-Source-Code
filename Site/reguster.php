<form action="regform.php" method="post">
username: <input type="text" name="user" /> <br />
E-mail (for recovering passwords, etc.): <input type="email" name="email" /> <br />
password: <br /> <input type="password" name="pass" /> <br />
confirm password: <br /> <input type="password" name="cpass" /> <br />
INVITE KEY: <br /> <input type="text" name="invite" /> <br /><br />
<input type="submit" value="Login" />
<?php
	if (isset($_GET['err'])){
		echo '<div style="color:red;">'.(array(1 => "Invalid Username", 2 => "Invalid Password or Not Equal", 3 => "Invalid E-mail:", 4 => "Registrations are closed! Try again later.", 5=>"Please complete the CAPTCHA.", 6=>"Invalid Invite Key!")[intval($_GET['err'])]).'</div>';
	}
?>