<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mptravels";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
