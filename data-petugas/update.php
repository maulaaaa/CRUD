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
            <h1>Update Data Petugas </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Petugas</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdPetugas = $_GET['id_petugas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas=$IdPetugas");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                            <form action="action-update.php" method="post">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="IdPetugas" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="IdPetugas" name="IdPetugas" value="<?php echo $data['id_petugas']; ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="NamaPetugas" class="form-label">Nama Petugas</label>
                                        <input type="NamaPetugas" class="form-control" id="NamaPetugas" name="NamaPetugas" value="<?php echo $data['nama_petugas']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <input type="checkbox" name="GantiPassword" value="true"> Ceklis jika ingin mengubah
                                        Password<br>
                                    </div>
                                    <div class="mb-3">
                                        <label for="PasswordLama" class="form-label">Password Lama</label>
                                        <input type="Password" class="form-control" id="PasswordLama" name="PasswordLama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="PasswordBaru" class="form-label">Password Baru</label>
                                        <input type="Password" class="form-control" id="PasswordBaru" name="PasswordBaru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ConfirmPassword" class="form-label">Confirm Password Baru</label>
                                        <input type="Password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
                                    </div>

                                    <div class="mb-3">
                                        <label for="Level" class="form-label">Level</label>
                                        <select class="form-control" aria-label="select" name="Level" id="Level">
                                            <option selected value="<?php echo $data['level']; ?>">
                                                <?php echo $data['level']; ?>
                                                <hr />
                                            </option>
                                            <option value="admin">admin
                                            </option>
                                            <option value="petugas">petugas</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary" type="submit" name="Submit">Simpan</button>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require('../tamplate/footer.php'); ?>