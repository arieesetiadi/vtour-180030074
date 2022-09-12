<?php
include_once 'functions/global.php';

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['user'])) {
    redirectTo('/admin/login.php');
}

// Ambil semua data gallery dari database
$galleries = [];
$sql = "SELECT * FROM galleries";
$result = $conn->query($sql);

while ($data = $result->fetch_assoc()) {
    $galleries[] = $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kelola Gallery - <?= $pageTitle ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="dashboard.php">Administrator</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link" title="Logout">
                    <?= $_SESSION['user']['name'] ?>
                </a>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link">
                    <i class="fas fa-user fa-fw"></i>
                </span>
            </li>

            <!-- Tombol logout -->
            <li class="nav-item dropdown">
                <form action="functions/logout.php" method="POST">
                    <button name="logout" type="submit" class="btn nav-link" title="Logout">
                        <i class="fa-solid fa-power-off"></i>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Main</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Kelola</div>
                        <a class="nav-link" href="gallery.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Kelola Gallery
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <!-- Tampilkan pesan sukses -->
                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success mt-4" role="alert">
                            <?= $_SESSION['success'] ?>
                        </div>
                        <?php unset($_SESSION['success']) ?>
                    <?php } ?>

                    <h1 class="my-4">Kelola Gallery</h1>

                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="card" style="height: 65vh;">
                                <div class="card-header">
                                    <span class="gallery-form-title">Form tambah gallery</span>
                                </div>
                                <div class="card-body">
                                    <form action="functions/insert-gallery.php" method="POST" enctype="multipart/form-data">
                                        <!-- Input Judul Gambar -->
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Judul Gambar</label>
                                            <input name="title" type="text" class="form-control" id="title" placeholder="Judul gambar" required>
                                        </div>

                                        <!-- Upload Gambar -->
                                        <div class="mb-3">
                                            <span class="d-block mb-2">Pilih Gambar</span>
                                            <input name="image" type="file" class="d-block form-control" required>
                                        </div>

                                        <button name="insert_gallery" type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="card" style="height: 65vh;">
                                <div class="card-header">
                                    <span>Daftar gallery</span>
                                </div>
                                <div class="card-body" style="overflow-y: scroll;">
                                    <table class="table">
                                        <?php if (count($galleries) > 0) { ?>
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <center>#</center>
                                                    </th>
                                                    <th>
                                                        <center>Judul</center>
                                                    </th>
                                                    <th>
                                                        <center>Gambar</center>
                                                    </th>
                                                    <th>
                                                        <center>Aksi</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($galleries as $i => $gallery) { ?>
                                                    <tr>
                                                        <td class="pt-2">
                                                            <center><?= $i + 1 ?></center>
                                                        </td>
                                                        <td class="pt-2">
                                                            <center><?= $gallery['title'] ?></center>
                                                        </td>
                                                        <td>
                                                            <center>
                                                                <img src="img/galleries/<?= $gallery['image_name'] ?>" alt="<?= $gallery['title'] ?>" style="max-height: 120px;">
                                                            </center>
                                                        </td>
                                                        <td class="pt-2">
                                                            <center>
                                                                <!-- Tombol ubah -->
                                                                <a href="#" title="Ubah" class="d-inline-block mx-1">
                                                                    <i class="fa-solid fa-pencil text-dark"></i>
                                                                </a>
                                                                <!-- Tombol hapus -->
                                                                <a href="functions/delete-gallery.php?id=<?= $gallery['id'] ?>&image_name=<?= $gallery['image_name'] ?>" title="Hapus" class="d-inline-block mx-1">
                                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                                </a>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        <?php } else { ?>
                                            <h6 class="mt-2">Data gallery tidak tersedia</h6>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center small">
                        <div class="text-muted">Copyright &copy; <?= $pageTitle ?> 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <script>
        console.log('Gallery');
    </script>
</body>

</html>