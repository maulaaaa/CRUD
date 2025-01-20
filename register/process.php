

<?php
// Pastikan form dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Proses unggah foto profil
    $targetDir = "uploads/"; // Direktori tempat menyimpan foto
    $targetFile = $targetDir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check apakah file gambar valid
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File yang diunggah bukan file gambar.";
        $uploadOk = 0;
    }

    // Check jika file sudah ada
    if (file_exists($targetFile)) {
        echo "Maaf, file tersebut sudah ada.";
        $uploadOk = 0;
    }

    // Check ukuran file
    if ($_FILES["foto"]["size"] > 500000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Izinkan hanya format gambar tertentu
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Maaf, hanya file JPG, JPEG, PNG, & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Jika $uploadOk bernilai 0, file tidak diunggah
    if ($uploadOk == 0) {
        echo "Maaf, file tidak diunggah.";
        // Jika semua valid, coba untuk mengunggah file
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile)) {
            echo "File " . htmlspecialchars(basename($_FILES["foto"]["name"])) . " telah diunggah.";
            // Lakukan sesuatu dengan data yang telah diunggah, misalnya menyimpan ke database
            // Misalnya: simpan informasi ke database
            // $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");
            // $query = "INSERT INTO pengguna (nama, email, foto_profil) VALUES ('$nama', '$email', '$targetFile')";
            // mysqli_query($koneksi, $query);
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>

<?php
if (isset($_POST['Submit'])) {
    $IdPetugas = $_POST['IdPetugas'];
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $NamaPetugas = $_POST['NamaPetugas'];
    $Level = $_POST['Level'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO petugas VALUES('$IdPetugas','$Username','$Password','$NamaPetugas','$Level')");

    if ($result) {
        echo "<script>alert('Data Petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
    } else {
        echo "<script>alert('Data Petugas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
}
?>
