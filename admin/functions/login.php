<?php
include_once 'connection.php';
include_once 'global.php';

// Ambil username dan password dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Cek username dan password ke database
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Jika login berhasil, redirect ke halaman Dashboard
if ($result->num_rows > 0) {
    $_SESSION['user'] = $result->fetch_assoc();
    redirectTo('/admin/dashboard.php');
} else {
    $_SESSION['login_error'] = 'Username atau password tidak valid';
    redirectTo('/admin/login.php');
}
