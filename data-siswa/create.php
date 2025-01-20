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
            <h1>Tambah Data Siswa </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Input Data Siswa</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="NISN" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="NISN" name="NISN">
                                </div>
                                <div class="mb-3">
                                    <label for="NIS" class="form-label">NIS</label>
                                    <input type="text" class="form-control" id="NIS" name="NIS">
                                </div>
                                <div class="mb-3">
                                    <label for="NamaSiswa" class="form-label">Nama Siswa</label>
                                    <input type="text" class="form-control" id="NamaSiswa" name="NamaSiswa">
                                </div>
                                <div class="mb-3">
                                    <label for="Kelas" class="form-label">Kelas</label>
                                    <select class="form-control" aria-label="select" name="Kelas" id="Kelas">
                                        <option selected>Pilih Kelas</option>
                                        <?php 
                                            include "../koneksi.php";
                                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas ");
                                            $nomor = 1;
                                            while($kelas = mysqli_fetch_array($query_mysql)) { ?>
                                        <option value="<?php echo $kelas['id_kelas']; ?>">
                                            <?php echo $kelas['nama_kelas']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat" name="Alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="NoTelp" class="form-label">No Telpone</label>
                                    <input type="text" class="form-control" id="NoTelp" name="NoTelp">
                                </div>
                                <div class="mb-3">
                                    <label for="Spp" class="form-label">Nominal SPP</label>
                                    <select class="form-control" aria-label="select" name="Spp" id="Spp">
                                        <option selected>Pilih Nominal SPP</option>
                                        <?php 
                                            include "../koneksi.php";
                                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp ");
                                            $nomor = 1;
                                            while($Spp = mysqli_fetch_array($query_mysql)) { ?>
                                        <option value="<?php echo $Spp['id_spp']; ?>"><?php echo $Spp['nominal']; ?>
                                        </option>
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

<?php require('../tamplate/footer.php'); ?>