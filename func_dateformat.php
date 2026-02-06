<?php
include 'connection.php';

$sql = "SELECT name, DATE_FORMAT(created_at, '%M %e, %Y') AS joined_date FROM usertbl";
$result = $conn->query($sql);

echo "<h3>Function: DATE_FORMAT (Prettifying Dates)</h3>";
echo "<table border='1'><tr><th>User Name</th><th>Friendly Date</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['joined_date']}</td></tr>";
}
echo "</table>";
?>