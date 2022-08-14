<?php
include_once 'functions/global.php';

// Redirect ke halaman dashboard jika sudah login
if (isset($_SESSION['user'])) {
    redirectTo('/admin/dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - <?= $pageTitle ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutAuthentication" class="pt-5">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Form Login -->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body py-4">
                                    <!-- Tampilkan pesan error jika login gagal -->
                                    <?php if (isset($_SESSION['login_error'])) { ?>
                                        <span class="d-block mb-2 text-danger"><?= $_SESSION['login_error'] ?></span>
                                        <?php unset($_SESSION['login_error']) ?>
                                    <?php } ?>

                                    <form action="functions/login.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <!-- Input Username -->
                                            <input name="username" class="form-control" id="username" type="text" placeholder="Username" required />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <!-- Input Password -->
                                            <input name="password" class="form-control" id="password" type="password" placeholder="Password" required />
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <!-- Tombol Login -->
                                            <button name="login" type="submit" class="btn btn-primary w-100">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
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
</body>

</html>