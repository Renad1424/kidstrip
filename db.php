<?php
// File: db.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kids_trips";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
