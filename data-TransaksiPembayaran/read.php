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
            <h1>Data Siswa </h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="create.php" class="btn btn-success">Tambah Data Siswa</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>NISN</th>
                                        <th>NIS</th>
                                        <th>NAMA Siswa</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>No Telfon</th>
                                        <th>Nominal SPP</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php 
                                    include "../koneksi.php";
                                    // $query_mysql = mysqli_query($koneksi, "SELECT siswa.nisn FROM siswa,spp,kelas Where siswa.id_spp=spp.id_spp AND siswa.id_kelas=kelas.id_kelas ");
                                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN spp ON siswa.id_spp = spp.id_spp INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
                                    $nomor = 1;
                                    
                                    // while ($data = mysqli_fetch_array($query_mysql))
                                    foreach ($query_mysql as $data) : 
                                         ?>
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td><?php echo $data['nisn']; ?></td>
                                        <td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['nama_kelas']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['no_telp']; ?></td>
                                        <td><?php echo $data['nominal']; ?></td>
                                        <td style="width: 20%;">
                                            <a href="update.php?nisn=<?php echo $data['nisn']; ?>"
                                                class="btn btn-warning my-1">Update</a>
                                            <a href="action-delete.php?nisn=<?php echo $data['nisn']; ?>"
                                                class="btn btn-danger my-1">Delete</a>
                                            <a href="#" class="btn btn-info my-1">Detail</a>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>

                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require('../template/footer.php'); ?>