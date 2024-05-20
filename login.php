<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
    /* Form container */
    .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 1250px; /* Increased width for the container */
        text-align: center;
        margin-top: 50px; /* Adjust spacing from navigation */
    }

    /* Form title */
    .form-container h1 {
        margin-bottom: 20px;
        font-size: 24px;
    }

    /* Form input fields */
    .form-input {
        margin-bottom: 15px;
    }

    /* Input fields */
    .form-input input[type="text"],
    .form-input input[type="password"],
    .form-input input[type="submit"] {
        width: 100%; /* Increased width for input fields */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    /* Submit button styling */
    .form-input input[type="submit"] {
        background-color: #e81817;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-input input[type="submit"]{
        background-color: #45a049;
    }
    </style>
</head>
<body>
<!-- Include navigation -->
<?php include 'navbar.php'?>

<!-- Main Content -->
<div class="form-container">
    <h1>Login</h1>
    <form action="process_login.php" method="post">

        <div class="form-input">
            <input type="text" name="username" placeholder="Enter username" required>
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Enter password" required>
        </div>
        <div class="form-input">
            <input type="submit" value="Login">
        </div>
    </form>
</div>
</body>
</html>