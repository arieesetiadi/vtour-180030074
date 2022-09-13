<?php
include_once 'global.php';

// Prepare data
$id = $_POST['id'];
$title = $_POST['title'];
$updatedAt = date('Y-m-d H:i:s');
$sql = "";

// Jika ada gambar, upload gambar
if ($_FILES['image']['name'] != "") {
    $image = $_FILES['image'];
    $imageName = str_replace(' ', '', strtolower(uniqid() . '-' . $image['name']));

    // Upload file ke lokal storage
    $from = $image['tmp_name'];
    $to = realpath('../img/galleries') . '/' . $imageName;
    move_uploaded_file($from, $to);

    $sql = "UPDATE galleries SET 
        title = '$title', 
        image_name = '$imageName', 
        updated_at = '$updatedAt' 
        WHERE id = $id";
} else {
    $sql = "UPDATE galleries SET
        title = '$title',
        updated_at = '$updatedAt'
        WHERE id = $id";
}

// update data ke database
$result = $conn->query($sql);

// Tampilkan pesan error jika insert gagal
if (!$result) {
    dd('Error: ', $conn->error);
}

// Redirect ke halaman utama Gallery
$_SESSION['success'] = 'Berhasil mengubah gallery';
redirectTo('/admin/gallery.php');
