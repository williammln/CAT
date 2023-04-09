<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Sign Up</h1>
    <div class="container">
        <div class="content">
            <div class="photo-left">
                <img src="image.jpg" alt="Example Image" class="side-image">
            </div>
            <div class="form-container"> <!-- Add this div -->
                <form action="register.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" required>
                    <input type="submit" value="Sign Up">
                </form>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>
