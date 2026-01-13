<?php
$conn = new mysqli("localhost", "root", "", "myDb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>