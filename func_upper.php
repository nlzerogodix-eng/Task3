<?php
include 'connection.php';
$sql = "SELECT UPPER(name) AS UpperName FROM usertbl";
$result = $conn->query($sql);

echo "<h3>Output for UPPER() Function</h3>";
while($row = $result->fetch_assoc()) {
    echo $row['UpperName'] . "<br>";
}
?>