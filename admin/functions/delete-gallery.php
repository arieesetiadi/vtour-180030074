<?php
include_once 'global.php';

$id = $_GET['id'];
$imageName = $_GET['image_name'];

// Hapus gambar dari direktori
$imagePath = realpath('../img/galleries') . '/' . $imageName;
if (file_exists($imagePath)) {
    unlink($imagePath);
}

// Hapus data di database
$sql = "DELETE FROM galleries WHERE id = $id";
$result = $conn->query($sql);

// Tampilkan pesan error jika proses delete gagal
if (!$result) {
    dd('Error: ', $conn->error);
}

// Redirect ke halaman utama Gallery
$_SESSION['success'] = 'Berhasil menghapus gallery';
redirectTo('/admin/gallery.php');
