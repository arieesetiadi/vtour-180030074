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

// Ambil seluruh data galeri
function getGalleries()
{
    global $conn;

    $sql = "SELECT * FROM galleries";
    $result = mysqli_query($conn, $sql);

    while ($galeri = mysqli_fetch_assoc($result)) {
        $galleries[] = $galeri;
    }

    return array_reverse($galleries);
}

// Ambil gallery berdasarkan ID
function getGalleryById($id)
{
    global $conn;

    $sql = "SELECT * FROM galleries WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    return mysqli_fetch_assoc($result);
}
