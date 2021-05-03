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

$user=$_POST["users"];
$query = "SELECT content from Posts WHERE author_id='$user' ";
$result = $mysqli->query($query);

echo "<h1 style='font:bold;'>User: ".$user."</h1><br>";

echo "<table style='text-align:center; width: 100%'>";
  if ($result->num_rows > 0){
   while ($row = $result->fetch_assoc()){
   echo "<tr>";
   echo "<td>".$row["content"]."</td>";
   echo "</tr>";
  }
}
echo "</table>";

/* close connection */
$mysqli->close();

echo "</body>";



?>
