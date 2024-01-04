<?php
$db_host = "localhost"; // e.g., "localhost"
$db_user = "root";
$db_password = "";
$db_name = "parking_system";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
