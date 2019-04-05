<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s510g881", "Wai9xei7", "s510g881");
if($mysqli->connect_errno){
	echo "Connection failed: " . $mysqli->connect_errno;
	exit();
}
$query = "SELECT * FROM Users";
if($result = $mysqli->query($query)){
	echo "Users: <br>";
	while ($row = $result->fetch_assoc()){
		echo $row[user_id] . "<br>";
	}
	$result->free();
}
else{
	echo "Failed!";
}
$mysqli->close();
?>
