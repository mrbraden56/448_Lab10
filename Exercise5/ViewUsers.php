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

$query = "SELECT user_id from Users";
$result = $mysqli->query($query);

echo '<table style="border:1px solid black;text-align:center; width:100%">';
echo '<tr>';
echo '<th>Users!!!!</th>';
echo '</tr>';

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["user_id"]."</td>";
    echo "</tr>";
  }
}

echo "</table>";

echo "</body>";
?>
