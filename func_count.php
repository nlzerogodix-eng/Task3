<?php
include 'connection.php';
$sql = "SELECT COUNT(*) AS total FROM usertbl";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>Output for COUNT() Function</h3>";
echo "Total Users: " . $row['total'];
?>