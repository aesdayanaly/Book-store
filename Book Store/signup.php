<?php
include "database.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(mysqli_real_escape_string($conn, $_POST['name']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
    
    $checkEmailSql = "SELECT * FROM student WHERE email = ?";
    $stmt = mysqli_prepare($conn, $checkEmailSql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $checkEmailResult = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        $signup_status = "<span class='error'>This email is already registered.</span>";
    } else {
        $insertSql = "INSERT INTO student (name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insertSql);
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);

        if (mysqli_stmt_execute($stmt)) {
            $signup_status = "<span class='success'>Account created successfully. <a href='login.php'>Login</a></span>";
        } else {
            $signup_status = "<span class='error'>Error: " . mysqli_error($conn) . "</span>";
        }
    }
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-form-container">    
        <form action="signup.php" method="POST">
            <h3>Sign Up</h3>
            <span>Name</span>
            <input type="text" name="name" class="box" placeholder="Enter your name" required>
            <span>Email</span>
            <input type="email" name="email" class="box" placeholder="Enter your email" required>
            <span>Password</span>
            <input type="password" name="password" class="box" placeholder="Create a password" required>
            <button type="submit" class="btn">Sign Up</button>
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </form>
        <?php if (isset($signup_status)): ?>
            <p><?php echo $signup_status; ?></p>
        <?php endif; ?>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
