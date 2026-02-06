<?php
include 'connection.php';
$sql = "SELECT SUM(points) AS TotalPoints FROM user_points";
$result = $conn->query($sql);


echo "<h3>Output for SUM() Function</h3>";

while($row = $result->fetch_assoc()) {
    echo "TotalPoints: ". $row['TotalPoints'] . "<br>";
}


?>