<?php
if (isset($_POST['Submit'])) {
   $IdPetugas = $_POST['IdPetugas'];
   $NamaPetugas = $_POST['NamaPetugas'];
   $GantiPassword = $_POST['GantiPassword'];
   $PasswordLama = md5($_POST['PasswordLama']);
   $PasswordBaru = md5($_POST['PasswordBaru']);
   $ConfirmPassword = md5($_POST['ConfirmPassword']);
   $Level = $_POST['Level'];

   include("../koneksi.php");
   if ($GantiPassword = 'true') {
      $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$IdPetugas' ");
      $data = mysqli_fetch_array($query_mysql);
      if ($PasswordLama = $data['password']) {
         if ($PasswordBaru = $ConfirmPassword) {
            $result = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$NamaPetugas',level='$Level',password='$PasswordBaru' WHERE id_petugas='$IdPetugas' ");
            if ($result) {
               echo "<script>alert('Data Petugas berhasil diupdate'); window.location.href='read.php'</script>";
            } else {
               echo "<script>alert('Data Petugas gagal diupdate'); window.location.href='read.php'</script>";
            }
         } else {
            echo "<script>alert('Password Baru dan Confirm Password Tidak Sama. !'); window.location.href='read.php'</script>";
         }
      } else {
         echo "<script>alert('Password Lama Tidak Sesuai.!'); window.location.href='read.php'</script>";
      }

      # code...
   } else {
      $result = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$NamaPetugas',level='$Level' WHERE id_petugas='$IdPetugas' ");

      if ($result) {
         echo "<script>alert('Data Petugas berhasil diupdate'); window.location.href='read.php'</script>";
      } else {
         echo "<script>alert('Data Petugas gagal diupdate'); window.location.href='read.php'</script>";
      }
      # code...
   }
}
