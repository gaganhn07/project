<?php
// dbconnect.php

$host = $_ENV['MYSQL_ADDON_HOST'] ?? 'b0q3l3x3ifkzthd0tx0o-mysql.services.clever-cloud.com';
$port = $_ENV['MYSQL_ADDON_PORT'] ?? '3306';
$dbname = $_ENV['MYSQL_ADDON_DB'] ?? 'b0q3l3x3ifkzthd0tx0o';
$username = $_ENV['MYSQL_ADDON_USER'] ?? 'unbow6ec9xkeozcw';
$password = $_ENV['MYSQL_ADDON_PASSWORD'] ?? 'sIqVfhb2Hwg03hoKirXk';

$conn = null; // Initialize connection

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// You might have a function to get the connection
function getDatabaseConnection() {
    global $conn;
    return $conn;
}
?>
