<?php
include 'connection.php';
$sql = "SELECT name,ASCII(name) AS NumCodeOfFirstChar from usertbl";
$result = $conn->query($sql);

echo "<h3> OUTPUT for ASCII() Function </h3>";

while($row = $result->fetch_assoc()){
    echo $row ['NumCodeOfFirstChar'] . "<br>";
}

?>