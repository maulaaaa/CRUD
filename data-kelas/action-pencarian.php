<?php
$koneksi = mysqli_connect('localhost', 'root', '');
$link = mysqli_select_db($koneksi, "database_odp") or die(mysqli_error());

if ($query_mysql) {
    echo "<script>alert('Data Petugas berhasil dihapus'); window.location.href='pencarian.php'</script>";
} else {
    echo "<script>alert('Data Petugas gagal dihapus'); window.location.href='pencarian.php'</script>";
}
