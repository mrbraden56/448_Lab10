<?php

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
$query = "SELECT post_id, content, author_id from Posts";
$result = $mysqli->query($query);
if ($result->num_rows > 0){
 while ($row = $result->fetch_assoc()){
 $select = $_POST[$row["post_id"]];
  if ($select == "on"){
   $query = "DELETE FROM Posts WHERE post_id='".$row["post_id"]."'";
   $mysqli->query($query);
   echo "Post ".$row["post_id"]." was deleted.<br>";
  }
 }
}

/* close connection */
$mysqli->close();

echo "</body>";



?>

