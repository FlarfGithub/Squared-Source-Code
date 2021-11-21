<?php
$wog="";
include_once "connect.php";
$conn = new mysqli($host, $db_user, $db_password);
$conn->select_db($db_name);
$sql = "SELECT * FROM users WHERE id='".$_GET['id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$wog=$row['user'];
	}
}
$conn->close();
echo $wog;
die();
?>