<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
require_once 'config.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>User Profile</h1>
    <div class="container">
        <div class="profile-picture">
            <img src="https://via.placeholder.com/150" alt="Profile picture">
        </div>
        <div class="profile-details">
            <h2><?php echo $user['fullname']; ?></h2>
            <p><?php echo $user['email']; ?></p>
        </div>
        <div class="profile">
        <form action="update_profile.php" method="post">
            <label>Username:</label><br>
            <input type="text" name="username" value="<?php echo $user['username']; ?>" required><br>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
            <label>Full Name:</label><br>
            <input type="text" name="fullname" value="<?php echo $user['fullname']; ?>" required><br><br>
            <input type="submit" value="Update">
        </form>
        </div>
        <br>
        <p style="text-align:center;"><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
