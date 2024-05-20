<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
   
    $password = $_POST['password'];

    // Include database connection
    include 'database-connect.php';

    // Query to retrieve hashed password for the provided username and email
    $sql = "SELECT * FROM sign_up WHERE username='$username' ";
    $result = $db_connect->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the row
        $row = $result->fetch_assoc();
        // Verify the provided password with the stored hashed password
        if (password_verify($password, $row['password'])) {
            // Successful login
            $_SESSION['username'] = $username; // Store username in session for future use
            echo "<script>alert('Login successful'); window.location.href = 'dashboard.php';</script>";
            exit;
        } else {
            // Login error
            echo "<script>alert('Login failed. Please check your credentials.');</script>";
        }
    } else {
        // Login error
        echo "<script>alert('Login failed. Please check your credentials.');</script>";
    }
}
?>