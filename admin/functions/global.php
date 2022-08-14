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
