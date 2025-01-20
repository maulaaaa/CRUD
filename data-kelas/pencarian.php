<input type="text" name="cari">
<input type="submit" value="Cari">
<?php
// Konfigurasi koneksi ke database
$host = 'localhost';  // Ganti dengan host database Anda
$dbname = 'tikor_odp';  // Nama database

try {
   // Buat koneksi PDO
   $pdo = new PDO("mysql:host=$host;dbname=$dbname");
   // Set mode error menjadi exception
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // Mendapatkan kata kunci pencarian dari form atau input lainnya
   $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

   // Query pencarian
   $sql = "SELECT * FROM tikor_odp WHERE tikor LIKE :keyword OR maps LIKE :keyword";
   $stmt = $pdo->prepare($sql);
   // Bind parameter kata kunci
   $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
   // Eksekusi query
   $stmt->execute();

   // Ambil hasil query
   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

   // Output hasil pencarian
   if (count($results) > 0) {
      echo "<h2>Hasil Pencarian:</h2>";
      echo "<ul>";
      foreach ($results as $row) {
         echo "<li>Tikor: " . htmlspecialchars($row['tikot']) . ", Maps: " . $row['maps'] . "</li>";
      }
      echo "</ul>";
   } else {
      echo "Tidak ada hasil yang ditemukan.";
   }
} catch (PDOException $e) {
   // Tangani kesalahan koneksi atau query
   die("Error: " . $e->getMessage());
}
?>