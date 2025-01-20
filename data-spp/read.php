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
            <h1>Data SPP </h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="create.php" class="btn btn-success">Tambah Data SPP</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>ID SPP</th>
                                        <th>Nominal</th>
                                        <th>Tahun</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php 
                                    include "../koneksi.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp ");
                                    $nomor = 1;
                                    while($data = mysqli_fetch_array($query_mysql)) { ?>
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td><?php echo $data['id_spp']; ?></td>
                                        <td><?php echo $data['nominal']; ?></td>
                                        <td><?php echo $data['tahun']; ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                        <td style="width: 20%;">
                                            <a href="update.php?id_spp=<?php echo $data['id_spp']; ?>"
                                                class="btn btn-warning my-1">Update</a>
                                            <a href="action-delete.php?id_spp=<?php echo $data['id_spp']; ?>"
                                                class="btn btn-danger my-1">Delete</a>
                                            <a href="#" class="btn btn-secondary my-1">Detail</a>
                                        </td>
                                    </tr>

                                    <?php } ?>
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

<?php require('../tamplate/footer.php'); ?>