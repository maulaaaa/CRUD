<?php
if (isset($_POST['Submit'])) {
   $OdpName = $_POST['OdpName'];
   $Tikor = $_POST['Tikor'];
   $Maps = $_POST['Maps'];


   include("../koneksi.php");
   $result = mysqli_query($koneksi, "UPDATE tikor_odp SET tikor='$Tikor',maps='$Maps' WHERE odp_name='$OdpName'");

   if ($result) {
      echo "<script>alert('Data Kelas berhasil diupdate'); window.location.href='read.php'</script>";
   } else {
      echo "<script>alert('Data Kelas gagal diupdate'); window.location.href='read.php'</script>";
   }
}
