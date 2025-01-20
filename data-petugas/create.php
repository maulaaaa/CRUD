<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:atuh-login-petugas.php?pesan=gagal");
}
?>

<?php require('../tamplate/header.php'); ?>

<?php require('../tamplate/nav.php'); ?>

<?php require('../tamplate/sidebar.php'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>BUAT AKUN </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">MASUKAN DATA</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdPetugas" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="IdPetugas" name="IdPetugas">
                                </div>
                                <div class="mb-3">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="Password" name="Password">
                                </div>
                                <div class="mb-3">
                                    <label for="NamaPetugas" class="form-label">Nama Petugas</label>
                                    <input type="text" class="form-control" id="NamaPetugas" name="NamaPetugas">
                                </div>
                                <div class="mb-3">
                                    <label for="Level" class="form-label">Level</label>
                                    <select class="form-control" aria-label="select" name="Level" id="Level">
                                        <option selected>Pilih Level</option>
                                        <option value="admin">admin</option>
                                        <option value="petugas">petugas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="Submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require('../tamplate/footer.php'); ?>