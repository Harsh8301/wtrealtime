<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO users (name, email, password, mobile)
        VALUES ('$name', '$email', '$password', '$mobile')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successful";
} else {
    echo "Error: " . $conn->error;
}
?>
