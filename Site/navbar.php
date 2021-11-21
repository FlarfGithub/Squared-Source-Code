<?php
if(isset($_SESSION['id'])){
    require "dbonly.php";
}
                        ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img height="50px" src="/img/logo.svg"/>Squared</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
                    <a class="nav-link" href="games"><i class="fas fa-gamepad"></i> Games</a>
                    <a class="nav-link" href="catalog"><i class="fas fa-shopping-cart"></i> Catalog</a>
                    <a class="nav-link" href="news"><i class="fas fa-newspaper"></i> News (2)</a>
                </div>
                </div>
                <div class="navbar-nav">
                    <?php 
                    $db3 = $db;
                    $lid = $_SESSION['id'];
                    $usrquery = $db3->query("SELECT * FROM users WHERE id = '$lid'");
                    $usr = $usrquery->fetch();
                    if(isset($_SESSION['id'])){
                        echo '

                    <div class="navbar-button-container">
                        <a class="btn btn-sm btn-outline-dark my-1 mr-2" data-toggle="tooltip" data-html="true"
                           data-placement="bottom" title="'. $usr['qian'] . ' Qian"
                           href="#"><img src="https://squared.cf/img/mace.svg"
                                                                       width="22" height="22"> '. $usr['qian'] . '</a>
                    </div>
            
                    <a class="nav-link" href="user">'.$_SESSION['user'].'</a>
                        <a class="nav-link" href="logout.php">Logout</a>';
                    
                        echo '<a class="nav-link" href="login">Login</a>
                        <a class="nav-link" href="register">Register</a>';
                    }?>
                </div>
            </div>
        </nav>