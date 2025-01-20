<?php
session_start();
if ($_SESSION['level'] == "") {
    header("locatiion:atuh-login-petugas.php?pesan=gagal");
}
?>

<?php require('../tamplate/header.php'); ?>

<?php require('../tamplate/nav.php'); ?>

<?php require('../tamplate/sidebar.php'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data ODP </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Input Data ODP</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="OdpName" class="form-label">ODP NAME</label>
                                    <input type="OdpName" class="form-control" id="OdpName" name="OdpName">
                                </div>
                                <div class="mb-3">
                                    <label for="Tikor" class="form-label">TIKOR</label>
                                    <input type="Tikor" class="form-control" id="Tikor" name="Tikor">
                                </div>
                                <div class="mb-3">
                                    <label for="Maps" class="form-label">MAPS</label>
                                    <input type="Maps" class="form-control" id="Maps" name="Maps">
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