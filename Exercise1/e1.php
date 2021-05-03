<?php
echo "<body style='background-color: gray;'>";


$mysqli = new mysqli("mysql.eecs.ku.edu", "bradenlockwood", "the3eiY4",
"bradenlockwood");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
else{
    echo "Connect success";
}




$mysqli->close();
echo "</body>"
?>
