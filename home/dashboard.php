<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:atuh-login-petugas.php?pesan=gagal");
	}
?>

<?php require('../tamplate/header.php'); ?>

<?php require('../tamplate/nav.php'); ?>

<?php require('../tamplate/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard </h1>
        </div>
        <div class="row">
            <div class="col">
                <p class="display-1">Selamat datang <?php echo $_SESSION['nama']; ?></p>
            </div>
        </div>
    </section>
</div>

<?php require('../tamplate/footer.php'); ?>