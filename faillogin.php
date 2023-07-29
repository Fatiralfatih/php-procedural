<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: admin/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login | Lelang Universe</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="http://localhost/webme/asset/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/webme/asset/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="http://localhost/webme/asset/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="http://localhost/webme/asset/css/style.css">
    <link rel="stylesheet" href="http://localhost/webme/asset/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <h4>lelang Universe <sup>666</sup></h4>
                        </div>

                        <?php
                        if (isset($_GET['info'])) {
                            if ($_GET['info'] == "gagal") { ?>
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-exclamation-triangle"></i> Mohon Maaf</h5>
                                    Login gagal! username dan password salah!
                                </div>
                            <?php } else if ($_GET['info'] == "logout") { ?>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Terima Kasih</h5>
                                    Anda telah berhasil logout
                                </div>
                            <?php } else if ($_GET['info'] == "login") { ?>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-info"></i> Mohon Maaf</h5>
                                    Anda harus login terlebih dahulu
                                </div>
                            <?php } else if ($_GET['info'] == "daftar") { ?>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5>Daftar Berhasil Silahkan Login</h5>
                                </div>
                        <?php }
                        } ?>

                        <div class="card card-primary">
                            <div class="card-header justify-content-center">
                                <h4>Login | Lelang Universe </h4>
                            </div>

                            <div class="card-body">
                                <form method="post" action="proses-login-admin.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="nama_lengkap">Username</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your username
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <!-- <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div> -->
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login Masyarakat
                                        </button>
                                        <a href="login.php" class="btn btn-info btn-block btn-block">Login Admin</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Belum punya akun? <a href="register.php">Daftar Disini</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Lelang Universe 2023
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="http://localhost/webme/asset/modules/jquery.min.js"></script>
    <script src="http://localhost/webme/asset/modules/popper.js"></script>
    <script src="http://localhost/webme/asset/modules/tooltip.js"></script>
    <script src="http://localhost/webme/asset/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/webme/asset/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="http://localhost/webme/asset/modules/moment.min.js"></script>
    <script src="http://localhost/webme/asset/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="http://localhost/webme/asset/js/scripts.js"></script>
    <script src="http://localhost/webme/asset/js/custom.js"></script>
</body>

</html>