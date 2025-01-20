<?php
session_start();
if ($_SESSION['level'] == "") {
    header("locatiion:auth-login-petugas.php?pesan=gagal");
}
?>


<?php require('../tamplate/header.php'); ?>
<?php require('../tamplate/nav.php'); ?>
<?php require('../tamplate/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data ODP </h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="create.php" class="btn btn-success">Tambah Data ODP</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>ODP NAME</th>
                                        <th>TIKOR</th>
                                        <th>MAPS</th>
                                    </tr>
                                    <?php
                                    include "../koneksi.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM tikor_odp");
                                    $nomor = 1;
                                    while ($data = mysqli_fetch_array($query_mysql)) { ?>
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td><?php echo $data['odp_name']; ?></td>
                                            <td><?php echo $data['tikor']; ?></td>
                                            <td><?php echo $data['maps']; ?></td>
                                            <td style="width: 20%;">
                                                <a href="update.php?odp_name=<?php echo $data['odp_name']; ?>" class="btn btn-warning my-1">Update</a>
                                                <a href="action-delete.php?odp_name=<?php echo $data['odp_name']; ?>" class="btn btn-danger my-1">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>