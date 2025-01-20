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
            <h1>Update Data ODP </h1>
        </div>
        <div class="section-body ">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data ODP</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $OdpName = $_GET['odp_name'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM tikor_odp WHERE odp_name='$OdpName'");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                            <form action="action-update.php" method="post">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="OdpName" class="form-label">ODP NAME</label>
                                        <input type="text" class="form-control" id="OdpName" name="OdpName" value="<?php echo $data['odp_name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Maps" class="form-label">TIKOR</label>
                                        <input type="text" class="form-control" id="Tikor" name="Tikor" value="<?php echo $data['tikor']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Maps" class="form-label">MAPS</label>
                                        <input type="text" class="form-control" id="Maps" name="Maps" value="<?php echo $data['maps']; ?>">
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