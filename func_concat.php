<?php
include 'connection.php';
$sql = "SELECT CONCAT(name, ' - Email: ', email) AS UserInfo FROM usertbl";
$result = $conn->query($sql);

echo "<h3>Output for CONCAT() Function</h3>";
while($row = $result->fetch_assoc()) {
    echo $row['UserInfo'] . "<br>";
}
?>