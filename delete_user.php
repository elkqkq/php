<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include_once 'database-connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id = ?";
    $stmt = $db_connect->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    header('Location: dashboard.php');
    exit();
}
?>