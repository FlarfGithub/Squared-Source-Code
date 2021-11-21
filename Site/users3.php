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
<div class="app py-4 container">

    <div class="card" style="padding: 10px;text-align: center;">

        <table class="card-body" cellspacing="0" cellpadding="4" border="0">
            <form name="frmSearch" method="post" action=""><center><div id="SearchBar" class="SearchBar">
                    <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <div class="input-group-append">
                                <input class="btn btn-primary" value="Search" type="submit">
                            </div>
                        </div>
                    </div></center></form>
        <hr>
            <?php
$req = mysqli_query($conn,'select id, user, email from users');
while($dnn = mysqli_fetch_array($req))
{
?>
<tbody>
            <tr class="GridPager">
            <td>
                <a title="<?php echo $dnn['user'] ?>" href="/user.php?id=<?php echo $dnn['id'] ?>" style="display:inline-block;cursor:pointer;"><img src="" width="80" alt="<?php echo $dnn['user'] ?>"></a>
            </td><td>
                <a href="/user.php?id=<?php echo $dnn['id'] ?>"><?php echo $dnn['user'] ?></a><br>
                <span> test </span>
            </td><td>
                <span> test </span><br>
            </td><td>
                <span>Website</span>
            </td>
        </tr>
</tbody>
<?php
}
?>
 </div>

</div>

</div>
        <?php include_once "footer.php"; ?>
    </body>
</html>