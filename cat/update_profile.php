<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
require_once 'config.php';

$user_id = $_SESSION['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];

$sql = "UPDATE users SET username = ?, email = ?, fullname = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $username, $email, $fullname, $user_id);

if ($stmt->execute()) {
    $_SESSION['username'] = $username;
    header("Location: profile.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
