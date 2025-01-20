<?php 
    include "../koneksi.php";
    $NISN = $_GET['nisn'];
    $query_mysql = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn=$NISN");
    if ($query_mysql) {
        echo "<script>alert('Data Siswa berhasil dihapus'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data Siswa gagal dihapus'); window.location.href='read.php'</script>";
     }
?>