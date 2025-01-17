<?php
session_start(); 
include "database.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $checkLoginSql = "SELECT * FROM student WHERE email = '$email' AND password = '$password'";
    $checkLoginResult = mysqli_query($conn, $checkLoginSql);

    if (mysqli_num_rows($checkLoginResult) > 0) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $login_status = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-form-container">    
        <form action="login.php" method="POST">
            <h3>Login</h3>
            <span>Email</span>
            <input type="email" name="email" class="box" placeholder="Enter your email" required>
            <span>Password</span>
            <input type="password" name="password" class="box" placeholder="Enter your password" required>
            <button type="submit" class="btn">Login</button>
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
        
        <?php if (isset($login_status)): ?>
            <p style="color: red;"><?php echo $login_status; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
