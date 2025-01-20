<?php
 if(isset($_POST['Submit'])) {
     $IdSpp = $_POST['IdSpp'];
     $Nominal = $_POST['Nominal'];
     $Tahun = $_POST['Tahun'];
     $Keterangan = $_POST['Keterangan'];

     include("../koneksi.php");
     $result = mysqli_query($koneksi, "UPDATE spp SET nominal='$Nominal',tahun='$Tahun',keterangan='$Keterangan' WHERE id_spp='$IdSpp' ");
     
     if ($result) {
        echo "<script>alert('Data SPP berhasil diupdate'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data SPP gagal diupdate'); window.location.href='read.php'</script>";
     }
     
 }
 ?>