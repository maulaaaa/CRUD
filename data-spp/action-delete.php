<?php 
    include "../koneksi.php";
    $IdSpp = $_GET['id_spp'];
    $query_mysql = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp=$IdSpp");
    if ($query_mysql) {
        echo "<script>alert('Data SPP berhasil dihapus'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data SPP gagal dihapus'); window.location.href='read.php'</script>";
     }
?>