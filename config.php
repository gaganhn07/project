<?php
$host = getenv("b0q3l3x3ifkzthd0tx0o-mysql.services.clever-cloud.com");
$user = getenv("unbow6ec9xkeozcw");
$pass = getenv("sIqVfhb2Hwg03hoKirXk");
$db   = getenv("b0q3l3x3ifkzthd0tx0o");

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
