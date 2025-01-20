<?php 
    include "../koneksi.php";
    $IdPetugas = $_GET['id_petugas'];
    $query_mysql = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas=$IdPetugas");
    if ($query_mysql) {
        echo "<script>alert('Data Petugas berhasil dihapus'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data Petugas gagal dihapus'); window.location.href='read.php'</script>";
     }
?>