<?php
$host = "localhost";
$user = "root";        // Or whatever username you use in Workbench
$password = "amishmysql";        // Enter your MySQL password if you have one
$database = "student_db";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

