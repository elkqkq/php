<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            height: 880px;
        }

        .sidebar h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px 0;
            width: 100%;
            text-align: center;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            
        }

        .content {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
            margin-left : 250px;
        }

        .logout-button, .manage-users-button {
            margin-top: 20px;
            background-color: #e81817;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .action-buttons a {
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #e81817;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .action-buttons a:hover {
            background-color: #c41515;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="#" id="show-profile">User Profile</a>
    <a href="#" id="manage-users">Manage Users</a>
    <a href="logout.php" class="logout-button">Logout</a>
</div>
<div class="main-content">
    <div class="content" id="profile-content">
        <h2>User Profile</h2>
        <p>Username: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    </div>
    <div class="content" id="users-content" style="display:none;">
        <h2>Manage Users</h2>
        <table id="users-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Users will be populated here via JavaScript -->
            </tbody>
        </table>
    </div>
</div>

<script>
document.getElementById('manage-users').addEventListener('click', function() {
    document.getElementById('profile-content').style.display = 'none';
    document.getElementById('users-content').style.display = 'block';
    fetchUsers();
});

document.getElementById('show-profile').addEventListener('click', function() {
    document.getElementById('users-content').style.display = 'none';
    document.getElementById('profile-content').style.display = 'block';
});

function fetchUsers() {
    fetch('get_users.php')
        .then(response => response.json())
        .then(data => {
            const usersTable = document.getElementById('users-table');
            const tbody = usersTable.querySelector('tbody');
            tbody.innerHTML = '';

            data.forEach(user => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${user.username}</td>
                    <td>${user.email}</td>
                    <td class="action-buttons">
                        <a href="edit_user.php?id=${user.id}">Edit</a>
                        <a href="delete_user.php?id=${user.id}">Delete</a>
                    </td>
                `;
                tbody.appendChild(row);
            });

            usersTable.style.display = 'table';
        })
        .catch(error => console.error('Error fetching users:', error));
}
</script>
</body>
</html>