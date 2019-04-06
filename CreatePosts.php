<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s510g881", "Wai9xei7", "s510g881");
if($mysqli->connect_errno){
	echo "Connection failed: " . $mysqli->connect_errno;
	exit();
}
$user = $_POST["user_id"];
$post = $_POST["post"];
if($post == ""){
	echo "Post field can not be empty";
}
else{
$query = "INSERT INTO Posts (content,author_id) VALUES('$post','$user')";
if($result = $mysqli->query($query)){
	echo "For User: $user <br>";
	echo "Added Content: $post <br>";
	$result->free();
}
else{
	echo "No User exists with that name";
}
}
$mysqli->close();
?>
