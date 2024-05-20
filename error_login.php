<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha256-2TnSHycBDAm2wpZmgdi0z81kykGPJAkiUY+Wf97RbvY=" crossorigin="anonymous">
    <title>Error</title>
</head>
<body>
    <div class="bg-light p-4 m-5 rounded text-center">
        <h3>The username/password is invalid.</h3>
        <form action="login.php">
            <button type="submit" class="btn btn-danger m-3 p-2 px-5">Go back to login</button>
        </form>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Style for the alert */
        .alert-message {
            position: fixed;
            top: 20px;
            right: 20px; /* Adjust the distance from the right side */
            background-color: #f8d7da; /* Red for failed login */
            color: #721c24; /* Text color */
            padding: 10px 20px; /* Padding */
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
            z-index: 1000;
        }

        /* Style for the button */
        .btn {
            display: inline-block;
            background-color: #dc3545; /* Red color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove default button underline */
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        /* Container style */
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
<?php if (isset($_GET['login_status'])): ?>
        <?php if ($_GET['login_status'] === 'success'): ?>
            <div class="alert-message">
                Login successful! Welcome to your dashboard.
            </div>
        <?php elseif ($_GET['login_status'] === 'failed'): ?>
            <div class="alert-message">
                The username/password is invalid.
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="container">
        <form action="login.php">
            <button type="submit" class="btn">Go back to login</button>
        </form>
    </div>

    <script>
        // Automatically remove the alert message after 5 seconds
        setTimeout(function() {
            document.querySelector('.alert-message').remove();
        }, 5000);
    </script>
</body>
</html>