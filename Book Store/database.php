<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your MySQL password if necessary
$dbname = "bookstore"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and provide a more descriptive error message
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Optionally log successful connection (for debugging purposes)
    // error_log("Successfully connected to the database.");
}
?>
