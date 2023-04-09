<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Login</h1>
    <div class="container">
        <div class="content">
            <div class="photo-left">
                <img src="image2.jpg" alt="Example Image" class="side-image">
            </div>
            <div class="form-container"> <!-- Add this div -->
                <form action="authenticate.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Login">
                </form>
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </div>
        </div>
    </div>
</body>

</html>
