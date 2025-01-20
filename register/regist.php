<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>Login &mdash; Pembayaran SPP</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/modules/bootstrap-social/bootstrap-social.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/components.css" />
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
                            <img src="../assets/img/Logo_PPLG.png" alt="logo" width="100" class="shadow-light rounded-circle" />
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Buat Akun </h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="cek-login-petugas.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="id">NIK</label>
                                        <input id="id" type="id" class="form-control" name="id_petugas" tabindex="1" required autofocus />
                                        <div class="invalid-feedback">Masukan NIK</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required />
                                        <div class="invalid-feedback">Masukkan Password</div>
                                    </div>

                                    <label for="foto">Foto Profil:</label>
                                    <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

                                    <div class="mb-3">
                                        <label for="Level" class="form-label">Level</label>
                                        <select class="form-control" aria-label="select" name="Level" id="Level">
                                            <option selected>Pilih Level</option>
                                            <option value="admin">admin</option>
                                            <option value="petugas">petugas</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <button type="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Buat</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">Copyright &copy; Stisla 2018</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>

<input type="file" id="foto" name="foto" accept="image/*" required><br><br>