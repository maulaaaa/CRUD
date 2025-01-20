<?php
include "../koneksi.php";
$OdpName = $_GET['odp_name'];
$query_mysql = mysqli_query($koneksi, "DELETE  FROM tikor_odp WHERE odp_name='$OdpName'");
if ($query_mysql) {
    echo "<script>alert('Data Petugas berhasil dihapus'); window.location.href='read.php'</script>";
} else {
    echo "<script>alert('Data Petugas gagal dihapus'); window.location.href='read.php'</script>";
}
