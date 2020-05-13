<?php 
$mysqli = new mysqli("localhost:3307", "root", "", "projectportal");
if($mysqli->connect_errno){
	echo "Failed to connect to MYSQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
}

?>
