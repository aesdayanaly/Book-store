<?php
// Include the database connection file
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare an SQL statement to insert the data
    $sql = "INSERT INTO student (fullName, email, password) VALUES (?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullName, $email, $password);

    // Execute the query and handle success or failure
    if ($stmt->execute()) {
        echo "Sign up successful! Welcome, " . htmlspecialchars($fullName) . ".";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
