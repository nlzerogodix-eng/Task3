<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqlfunctions";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("DB Connection failed: " . mysqli_connect_error());
}
?>