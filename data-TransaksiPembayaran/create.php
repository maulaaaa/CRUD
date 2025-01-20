<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:atuh-login-petugas.php?pesan=gagal");
	}
?>

<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Transaksi Pembayaran </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Transaksi Pembayaran</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <?php 
                                $petugas=$_SESSION['nama'];
                                include "../koneksi.php";
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas where nama_petugas='$petugas' ");
                                while($result = mysqli_fetch_array($query_mysql)) {
                                ?>
                                    <label for="IdPetugas" class="form-label">Id Petugas</label>
                                    <input type="text" class="form-control" id="IdPetugas" name="IdPetugas"
                                        value="<?php echo $result['id_petugas']; ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="mb-3">
                                    <label for="NISN" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="NISN" name="NISN">
                                </div>
                                <div class="mb-3">
                                    <label for="TanggalBayar" class="form-label">Tanggal Bayar</label>
                                    <input type="date" class="form-control" id="TanggalBayar" name="TanggalBayar">
                                </div>
                                <div class="mb-3">
                                    <label for="BulanBayar" class="form-label">Bulan di Bayar</label>
                                    <select name="BulanBayar" id="BulanBayar" class="form-control">
                                        <option selected>Pilih Bulan
                                            <hr />
                                        </option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="TahunBayar" class="form-label">Tahun di Bayar</label>
                                    <input type="text" class="form-control" id="TahunBayar" name="TahunBayar">
                                </div>

                                <div class="mb-3">
                                    <label for="SPP" class="form-label">SPP</label>
                                    <select class="form-control" aria-label="select" name="SPP" id="SPP">
                                        <option selected>Pilih Nominal SPP</option>
                                        <?php 
                                            include "../koneksi.php";
                                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp ");
                                            $nomor = 1;
                                            while($spp = mysqli_fetch_array($query_mysql)) { ?>
                                        <option value="<?php echo $spp['id_spp']; ?>">
                                            <?php echo $spp['nominal']; ?></option>
                                        <?php } ?>
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

<?php require('../template/footer.php'); ?>