<?php //tag pembuka
$host       = "localhost";
$username   = "root";
$password   = "bahri";
$database   = 'cobar_kafe';

$conn = mysqli_connect($host, $username, $password, $database);


if (!$conn) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
}
