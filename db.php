<?php
$conn = new mysqli("localhost", "root", "", "userdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>