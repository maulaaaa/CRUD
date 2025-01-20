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
            <h1>Update Data SPP </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data SPP</p>
                        </div>
                        <?php 
                        include "../koneksi.php";
                        $IdSpp = $_GET['id_spp'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp=$IdSpp");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                        <form action="action-update.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdSpp" class="form-label">ID SPP</label>
                                    <input type="text" class="form-control" id="IdSpp" name="IdSpp"
                                        value="<?php echo $data['id_spp']; ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Nominal" class="form-label">Nominal</label>
                                    <input type="text" class="form-control" id="Nominal" name="Nominal"
                                        value="<?php echo $data['nominal']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="Tahun" class="form-label">Tahun</label>
                                    <input type="text" class="form-control" id="Tahun" name="Tahun"
                                        value="<?php echo $data['tahun']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="Keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="Keterangan" name="Keterangan"
                                        value="<?php echo $data['keterangan']; ?>">
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