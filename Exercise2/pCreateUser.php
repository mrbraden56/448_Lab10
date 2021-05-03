<?php
$user=$_POST["user"];
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

$query = "INSERT INTO Users (user_id) VALUES ('$user')";

if($user!=""){
if ($mysqli->query($query) && $user!=""){
echo "User ".$user." created<br>";
}
else{
echo "User ".$user." already exists";
}
}
else{
echo "Must enter a username!";
}

/* close connection */
$mysqli->close();

echo "</body>";

?>
