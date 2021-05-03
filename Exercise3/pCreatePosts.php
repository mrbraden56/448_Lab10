<?php
$user=$_POST["user"];
$post=$_POST["post"];
echo "<body style='background-color:grey; text-align:center;'>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "bradenlockwood", "the3eiY4",
        "bradenlockwood");

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
else{
        echo "Connect Success";
        echo "<br>";
}

$sql_u = "SELECT * FROM Users WHERE user_id='$user'";
$res_u = mysqli_query($mysqli, $sql_u);
if (mysqli_num_rows($res_u) > 0 && $post!="") {
	$query = "INSERT INTO Posts (content, author_id) VALUES ('" . $post . "', '" . $user .  "')";
	if ($mysqli->query($query) && $post!=""){
        echo "Post being published...";
	}
}
else{
	echo "Username does not exist or post has been left empty";
}


/* close connection */
$mysqli->close();

echo "</body>";

?>

