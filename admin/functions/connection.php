<?php
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pura_griya_sakti';

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal : " . $conn->connect_error);
}
