<?php 
	session_start();
	if($_SESSION['level']==""){
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
            <h1>Tambah Data Spp </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Input Data SPP</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdSpp" class="form-label">ID SPP</label>
                                    <input type="text" class="form-control" id="IdSpp" name="IdSpp">
                                </div>
                                <div class="mb-3">
                                    <label for="Nominal" class="form-label">Nominal</label>
                                    <input type="text" class="form-control" id="Nominal" name="Nominal">
                                </div>
                                <div class="mb-3">
                                    <label for="Tahun" class="form-label">Tahun</label>
                                    <input type="text" class="form-control" id="Tahun" name="Tahun">
                                </div>
                                <div class="mb-3">
                                    <label for="Keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="Keterangan" name="Keterangan">
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