<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Using prepared statements to prevent SQL injection
$stmt = $koneksi->prepare("SELECT * FROM admin WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // User not found
    // Redirect with an error message
    header("Location: index.php?error=1");
    exit();
} else {
    $data = $result->fetch_assoc();
    // Verify the password
    if (md5($password) === $data['password']) {
        if ($data['level'] == 'admin') {
            header("Location: dashboard_admin.php");
        } else if ($data['level'] == 'user') {
            header("Location: dashboard_user.php");
        } else if ($data['level'] == 'seniman') {
            header("Location: dashboard.php"); // Make sure this is correct
        }
        exit();
    } else {
        // Redirect with an error message
        header("Location: index.php?error=2");
        exit();
    }
}

$stmt->close();
$koneksi->close();
?>
