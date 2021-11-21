<html>
    <head>
        <?php include_once "head.php"; ?>
    </head>
    <body>
        <?php include_once "updateinfo.php"; ?>
        <?php include_once "navbar.php"; ?>
        <?php
        require "patch.php";
        require "dbonly.php";
        $ep = new exploitPatch(); 
        ?>
        <?php if(!isset($_GET['page'])) {
    $page = 1;
}else{
    $page = $_GET['page'];
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["search"]) {
        $search = $ep->remove($_POST["search"]);
        //header('Location: /users.php?page' . $page . '&search=' . $search);
        echo"<META http-equiv=refresh content=0;URL=/users.php?page=$page&search=$search>";
    }
}?>

This is the list of all the users:
 <table class="table table-condensed">
    <tr>
    	<th>ID</th>
    	<th>Username</th>
    	<th>About Me</th>
    </tr>
<?php
$req = mysqli_query($conn,'select id, user, about from users');
while($dnn = mysqli_fetch_array($req))
{
?>
	<tr>
    	<td><?php echo $dnn['id']; ?></td>
    	<td><a href="user?id=<?php echo $dnn['id']; ?>"><?php echo htmlentities($dnn['user'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td><?php echo htmlentities($dnn['about'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php
}
?>
</table>
		</div>
        <?php include_once "footer.php"; ?>
    </body>
</html>