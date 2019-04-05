<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s510g881", "Wai9xei7", "s510g881");
if($mysqli->connect_errno){
	echo "Connection failed: " . $mysqli->connect_errno;
	exit();
}
$user = $_POST["option"];
$query = "SELECT * FROM Posts WHERE author_id='$user'";
if($result = $mysqli->query($query)){
	echo "Posts: <br>";
	while ($row = $result->fetch_assoc()){
		echo $row[content] . "<br>";
	}
	$result->free();
}
else{
	echo "Failed!";
}
$mysqli->close();
?>
