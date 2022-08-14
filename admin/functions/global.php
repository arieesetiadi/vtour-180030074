<?php
include_once 'connection.php';

$pageTitle = 'Pura Griya Sakti Manuaba';

function dd($data)
{
    var_dump($data);
    die();
}

// Fungsi untuk redirect
function redirectTo($path)
{
    header('Location: ' . $path);
    die();
}

// Function untuk mengambil seluruh data gallery dari database
function getGalleries()
{
    global $conn;
    $sql = "SELECT * FROM galleries";
    $result = $conn->query($sql);

    while ($data = $result->fetch_assoc()) {
        $galleries[] = $data;
    }

    return $galleries;
}
