<?php
            require "connect.php";
            $amountofusers = 0;
            $onlinepeople = 0;
			$conn2 = new mysqli($host, $db_user, $db_password);
			$conn2->select_db($db_name);
		    // Check connection
			if ($conn2->connect_error) {
			    die("Connection failed: " . $conn2->connect_error);
			}
			$sql = "SELECT id FROM users";

			$result = $conn2->query($sql);
		    $amountofusers = $result->num_rows;
			$conn2->close();
			
			$conn2 = new mysqli($host, $db_user, $db_password);
			$conn2->select_db($db_name);
		    // Check connection
			if ($conn2->connect_error) {
			    die("Connection failed: " . $conn2->connect_error);
			}
			$sql = "SELECT * FROM users WHERE online=1";

			$result = $conn2->query($sql);
		    $onlinepeople = $result->num_rows;
			$conn2->close();
			$assa = randnumber(1, $amountofusers)
            ?>
         <div id="Footer" class="footer-container">
    <div class="FooterNav">
    <a>Squared 2021</a>
        &nbsp;|&nbsp; 
        <a>Lucky Number: <?php echo $assa; ?>/<?php echo $amountofusers; ?></a>
        &nbsp;|&nbsp; 
        <a>Online Users: <?php echo $onlinepeople; ?> out of <?php echo $amountofusers; ?> users</a>
        &nbsp;|&nbsp; 
        <a href="https://discord.gg/FRAsjbymhT">Discord</a></div>
    <div class="FooterNav">
        <div id="SEOGenreLinks" class="SEOGenreLinks">
                  <a></a> 
        </div>
    </div>
</div>