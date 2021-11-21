<?php

class maintenance
{
    function inithtml()
    {
        echo("
        <!DOCTYPE html>
        <title>Calvy</title>
        <script data-ad-client=\"ca-pub-1059398814015975\" async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<script src=\"https://kit.fontawesome.com/48d867d8b6.js\" crossorigin=\"anonymous\"></script>
        <link rel='icon' href='/images/logo.png'>
        <script src=\"https://code.jquery.com/jquery-3.6.0.slim.min.js\" integrity=\"sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=\" crossorigin=\"anonymous\"></script>
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
      rel=\"stylesheet\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,900&display=swap\" rel=\"stylesheet\">      
          <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">     
                          <link rel='stylesheet' href='/assets/css/main.css'>   
        <style>
            * {
                font-family: 'Lato', sans-serif;
                color: #dedede;
            }
            body {
                margin:0;
                background-color: #121212 !important;
            }
        </style>
        
        ");
    }

    function undermaintenance($reason)
    {
        ?>
		<title>Мы работаем над сайтом</title>
		<center><h1>Проститие, мы работаем над сайтом.</h1></center>
		<center><h2>we are not shutting down, but the site will remain under maintenance for now.</h2></center>
		<center><h2>check back later</h2></center>
		<br>
		<center><h3>Maintenance reason: <?php echo($reason); ?></h3></center>
        <?php
    }
	
	function emptyline($amountoflines)
	{
		for ($k = 0 ; $k < $amountoflines; $k++)
		{
			?>
			
			<br>
			<?php
		}
	}

    function quotes()
    {
        ?>
		<center><h3>random quotes</h3></center>
		<center>"Ngjfjjdjdfjjfjfjfjfjfjfjjggjggjgjgj" - NeX</center>
		<center>"database had a seizure, a stroke, and a heart attack simultaneously" - acro</center>
		<center>"fartticklepiss" - AkZ</center>
		<center>"hacked by banana" - Banana</center>
		<center>"Cats are cats." - krypto</center>
		<center>"alert(<span class="hljs-string">"Hi"</span>);" - pos0&nbsp;<span style="color: #808080;"><span style="color: #999999;">(lol pos0 is an idiot he tried to put an alert)</span></span></center>
		<center>"xороший" - Ale1</center>
		<center>"Database is having tech problems, please wait until we come back soon." - Iaceon</center>
		<center>"Yo mama Joke compliation 2016 - 2020" - TheCoolestPerson</center>
		<center>"Ye" - masterofdoomedballs</center>
		<center>"aaaakjd" - Zlarb</center>
		<center>"my balls itch" - Flanger</center>
		<center>"Fuck Fuck Cum Bars" - troll</center>
		<center>"i do best" - sudoapt</center>
		<center>"pablo escobar was a good man" - pablo</center>
		<center>"I smear my ass with Vaseline, and I love anal sex so much" - NickMarkick&nbsp;<span style="color: #999999;">(hes so fucking gay i swear)</span></center>
		<center>"I am pro" - Bizzziez</center>
		<center>"i love cats" - kqm</center>
		<center>"i have no idea what is happening to the website" - mentum</center>
		<center>"why the fuck is slovakian music so good" - charlie</center>
		<center>"Lego Island Is Awesome" - PepperRoni</center>
		<center>"Fuck my femboy ass~" - Cross</center>
		<center>"i luv u banana" - natan</center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		<center></center>
		
        <?php
    }

    function navbar($renderall = true)
    {
        ?>
<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-dark shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="/images/logo.png" width="30" height="30"
                                                      class="d-inline-block align-text-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    if ($renderall) {
                        ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
        <?php
    }

    function card($redirto = "#", $img, $name)
    {
        ?>
        <div style="border: 15px solid #121212; border-radius: 10px; width:150px; height:195px; display: inline-block; margin: 0 auto;">
            <a href="<?php echo $redirto; ?>" style="text-decoration: none; color:black;">
                <div id="container" style="display: inline-block;">
                    <img style="border-radius:10px; width: 100%;"
                         src="<?php echo $img; ?>">
                </div>
                <h6 style="text-align:center;text-overflow: ellipsis; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                    <?php
                    echo($name);
                    ?>
                </h6>
            </a>

        </div>
        <?php
    }

    function cardgame($redirto = "#", $img, $name, $numplrs)
    {
        ?>
        <div onclick="document.location.replace('<?php echo($redirto); ?>');"
             style="border: 15px solid #121212; cursor:pointer; border-radius: 10px; width:150px; height:195px; display: inline-block; margin: 0 auto;">
            <a style="position: absolute; border-radius: 10px; background-color: #434343; border: 1px solid grey;"><?php echo($numplrs); ?></a>
            <img style="border-radius:10px; width: 100%; height: 65%;"
                 src="<?php echo $img; ?>">
            <h6 style="text-align:center;text-overflow: ellipsis; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                <?php
                echo($name);
                ?>
            </h6>
        </div>
        <?php
    }

    function cardavatar($redirto = "#", $img, $name, $id)
    {
        ?>
        <div style="border: 15px solid #121212; width:150px; height:195px; margin: auto; display:inline-block; margin:0 auto;">
            <a href="#" onclick="wear(<?php echo($id); ?>);" style="text-decoration: none; color:black;">
                <div id="container">
                    <img style="border-radius:10px; width: 100%;"
                         src="<?php echo $img; ?>">
                </div>
                <h6 style="text-align:center;text-overflow: ellipsis; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                    <?php
                    echo($name);
                    ?>
                </h6>
            </a>
        </div>
        <?php
    }

    function buildfooter()
    {
        ?>
        </div style="margin-bottom:50px;">
            <div class="footer" style="clear:both;width:100%; border-top: 1px solid grey;">
                <div class="card-body">
                    <h5 class="card-title">© Calvy</h5>
                    <p class="card-text">Calvy is not sponsored, authorized or endorsed by ROBLOX</p>
                </div>
            </div>
        <?php
    }
}

?>
