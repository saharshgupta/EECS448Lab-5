<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s510g881", "Wai9xei7", "s510g881");
if($mysqli->connect_errno){
	echo "Connection failed: " . $mysqli->connect_errno;
	exit();
}
$post_id = $_POST["delete"];
//print_r($post_id);
$len = sizeof($post_id);
for($i = 0; $i<$len;$i++){
	$query = "DELETE FROM Posts WHERE post_id = " . $post_id[$i];
	if($result = $mysqli->query($query)){
		echo "Deleted post_id = $post_id[$i] <br>";
	}
	else
	{
		echo "Failed!";
	}
}
$mysqli->close();
?>
