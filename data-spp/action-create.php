<?php
 if(isset($_POST['Submit'])) {
     $IdSpp = $_POST['IdSpp'];
     $Nominal = $_POST['Nominal'];
     $Tahun = $_POST['Tahun'];
     $Keterangan = $_POST['Keterangan'];

     include("../koneksi.php");
     $result = mysqli_query($koneksi, "INSERT INTO spp(id_spp,nominal,tahun,keterangan) VALUES('$IdSpp','$Nominal','$Tahun','$Keterangan')");
     
     if ($result) {
        echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data SPP gagal ditambahkan'); window.location.href='read.php'</script>";
     }
     
 }
 ?>