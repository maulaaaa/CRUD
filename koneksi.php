<?php
$koneksi = mysqli_connect("localhost", "root", "", "database_odp");
if (mysqli_connect_errno()) {
    echo "koneksi databse gagal : " . mysqli_connect_error();
}
