<?php
include 'db.php';

$email = $_POST['email'];
password_verify($password, $row['password']);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login Successful";
} else {
    echo "Invalid Credentials";
}
?>