<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s510g881", "Wai9xei7", "s510g881");
if($mysqli->connect_errno){
	echo "Connection failed: " . $mysqli->connect_errno;
	exit();
}
$user = $_POST["option"];
$query = "SELECT * FROM Posts WHERE author_id='$user'";
if($result = $mysqli->query($query)){
	echo "For User: $user <br>";
	echo "<table style='border-style: groove'> <tr style='border-style: groove'> <th style='border-style: groove'> Posts </th> </tr> <br>";
	while ($row = $result->fetch_assoc()){
		echo "<tr style='border-style: groove'> <td style='border-style: groove'> $row[content] </td> </tr>";
	}
	$result->free();
}
else{
	echo "Failed!";
}
$mysqli->close();
?>
