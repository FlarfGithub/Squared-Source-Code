<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <?php include "2014head.php"; ?>
    </head>
    <body>
        <?php include "updateinfo.php"; ?>
        <?php include "2014navbar.php"; ?>
        <?php
        require "connect.php";
        $id=0;
        $namm="";$cre="";$nzw="";$lolnow="";
        if (!isset($_GET['id'])) {
                header('Location: 404');
        } else {
            $id=$_GET['id'];
        }

        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        if ($polaczenie->connect_errno!=0) {
            echo "Error: ".$polaczenie->connect_errno;
        } else {
            if ($rezultat = @$polaczenie->query(
            sprintf("SELECT * FROM games WHERE id='%s'",
            mysqli_real_escape_string($polaczenie,$id))))
            {
                    
                $ilu_userow = $rezultat->num_rows;
                if($ilu_userow>0)
                {
                    $wiersz = $rezultat->fetch_assoc();
                    
                    //	$_SESSION['zalogowany'] = true;
                    $namm = $wiersz['name'];
                    $cre = $wiersz['madeby'];
                    $lolnow = $wiersz['serverreserved'];
                    unset($_SESSION['blad']);
                    $rezultat->free_result();
                    
                } else {
                    
                    header('Location: 404');
                }
                
            }
            
            $polaczenie->close();
        }
        

        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
            if ($polaczenie->connect_errno!=0)
            {
                echo "Error: ".$polaczenie->connect_errno;
            }
            else
            {
                if ($rezultat = @$polaczenie->query(
                sprintf("SELECT * FROM users WHERE id='%s'",
                mysqli_real_escape_string($polaczenie,$cre))))
                {
                        
                    $ilu_userow = $rezultat->num_rows;
                    if($ilu_userow>0)
                    {
                        $wiersz = $rezultat->fetch_assoc();
                        
                        //	$_SESSION['zalogowany'] = true;
                        $nzw = $wiersz['user'];
                        $rezultat->free_result();
                        
                    } else {
                        
                        
                    }
                    
                }
                
                $polaczenie->close();
            }
            $polaczenie->close();
        ?>
        <script>
            function joingame(){
                <?php if(isset($_SESSION['id'])){
                    echo "window.location.replace('exoroeleven://".$lolnow.$_SESSION['ticket']."');";
                } else { echo 'alert("Log In");'; 
                    
                } ?>
            }
        </script>
        <div class="container defcontainer">
        <div class="card">
            <div class="card-header">
                Squared Game
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <b class="fs-3" >Mad Chinarer</b>
                        <div class="col-9">
                        <div  style="text-align:left;">
                        <img src="assetstore/gamethumbs/<?php echo $id; ?>.png" width="75%"/>
                        </div>
                        </div>
                        <div class="col-3">
                        <p><b class="fs-5" >Creator:</b> <a href="user.php?id=<?php echo $cre; ?>"><?php echo $nzw; ?></a><br/>
                        <a href="user.php?id=<?php echo $cre; ?>"><img src="img/testrender.png" width="75%"/></a><br/>
                        <a onclick="joingame();" class="btn btn-lg btn-success" style="width:100%;">Play</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        </div>
        <?php include "2014footer.php"; ?>
    </body>
</html>