<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include_once 'database-connect.php'; // Make sure the path is correct

$query = "SELECT id, username, email FROM sign_up";
$result = $db_connect->query($query);

if ($result) {
    $sign_up = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($sign_up);
} else {
    echo json_encode([]);
}
?>