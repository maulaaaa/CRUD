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
     $result = mysqli_query($koneksi, "UPDATE siswa SET nis='$NIS',nama='$NamaSiswa',id_kelas='$Kelas',alamat='$Alamat', no_telp='$NoTelp',id_spp='$Spp' WHERE nisn='$NISN' ");
     
     if ($result) {
        echo "<script>alert('Data Siswa berhasil diupdate'); window.location.href='read.php'</script>";
     }else{
        echo "<script>alert('Data Siswa gagal diupdate'); window.location.href='read.php'</script>";
     }
     
 }
 ?>