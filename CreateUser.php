<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s510g881", "Wai9xei7", "s510g881");
if($mysqli->connect_errno){
	echo "Connection failed: " . $mysqli->connect_errno;
	exit();
}
$user = $_POST["user_id"];
$query = "INSERT INTO Users (user_id) VALUES('" . $user . "')";
if($result = $mysqli->query($query)){
	echo "Added User: $user";
	while ($row = $result->fetch_assoc()){
		//echo "Added User: " . $row["user_id"];
	}
	$result->free();
}
else{
	echo "Addition failed, user already exists";
}
$mysqli->close();
?>
