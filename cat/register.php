<?php
require_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, email, fullname) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $hashed_password, $email, $fullname);

if ($stmt->execute()) {
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
