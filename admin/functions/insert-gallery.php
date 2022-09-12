<?php
include_once 'global.php';

// Fungsi insert gallery
$title = $_POST['title'];
$image = $_FILES['image'];
$imageName = str_replace(' ', '', strtolower(uniqid() . '-' . $image['name']));
$createdAt = date('Y-m-d H:i:s');

// Upload file ke lokal storage
$from = $image['tmp_name'];
$to = realpath('../img/galleries') . '/' . $imageName;
move_uploaded_file($from, $to);

// Insert data ke database
$sql = "INSERT INTO galleries VALUES (0, '$title', '$imageName', '$createdAt', null)";
$result = $conn->query($sql);

// Tampilkan pesan error jika insert gagal
if (!$result) {
    dd('Error: ', $conn->error);
}

// Redirect ke halaman utama Gallery
$_SESSION['success'] = 'Berhasil menambah gallery';
redirectTo('/admin/gallery.php');
