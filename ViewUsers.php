<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s510g881", "Wai9xei7", "s510g881");
if($mysqli->connect_errno){
	echo "Connection failed: " . $mysqli->connect_errno;
	exit();
}
$query = "SELECT * FROM Users";
if($result = $mysqli->query($query)){
	echo "<table style='border-style: groove'> <tr style='border-style: groove'> <th style='border-style: groove'> Users </th> </tr> <br>";
	while ($row = $result->fetch_assoc()){
		echo "<tr style='border-style: groove'> <td style='border-style: groove'>$row[user_id] </td></tr>";
	}
	echo "</table>";
	$result->free();
}
else{
	echo "Failed!";
}
$mysqli->close();
?>
