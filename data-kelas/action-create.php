<?php
if (isset($_POST['Submit'])) {
   $OdpName = $_POST['OdpName'];
   $Tikor = $_POST['Tikor'];
   $Maps = $_POST['Maps'];

   include("../koneksi.php");
   $result = mysqli_query($koneksi, "INSERT INTO tikor_odp VALUES('$OdpName','$Tikor','$Maps')");

   if ($result) {
      echo "<script>alert('Data ODP berhasil diupdate'); window.location.href='read.php'</script>";
   } else {
      echo "<script>alert('Data ODP gagal diupdate'); window.location.href='read.php'</script>";
   }
}
