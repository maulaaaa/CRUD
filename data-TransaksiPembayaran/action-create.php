<?php
 if(isset($_POST['Submit'])) {
     $IdPetugas = $_POST['IdPetugas'];
     $NISN = $_POST['NISN'];
     $TanggalBayar = $_POST['TanggalBayar'];
     $BulanBayar = $_POST['BulanBayar'];
     $TahunBayar = $_POST['TahunBayar'];
     $SPP = $_POST['SPP'];

     include("../koneksi.php");
     $result = mysqli_query($koneksi, "INSERT INTO pembayaran VALUES(' ','$IdPetugas','$NISN','$TanggalBayar','$BulanBayar','$TahunBayar','$SPP')");
     
     if ($result) {
        echo "<script>alert('Data Transaksi berhasil ditambahkan'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data Transaksi gagal ditambahkan'); window.location.href='read.php'</script>";
     }
     
 }
 ?>