<?php
 if(isset($_POST['Submit'])) {
     $NISN = $_POST['NISN'];
     $NIS = $_POST['NIS'];
     $NamaSiswa = $_POST['NamaSiswa'];
     $Kelas = $_POST['Kelas'];
     $Alamat = $_POST['Alamat'];
     $NoTelp = $_POST['NoTelp'];
     $Spp = $_POST['Spp'];

     include("../koneksi.php");
     $result = mysqli_query($koneksi, "INSERT INTO siswa VALUES('$NISN','$NIS','$NamaSiswa','$Kelas','$Alamat','$NoTelp','$Spp')");
     
     if ($result) {
        echo "<script>alert('Data Siswa berhasil ditambahkan'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data Siswa gagal ditambahkan'); window.location.href='read.php'</script>";
     }
     
 }
 ?>