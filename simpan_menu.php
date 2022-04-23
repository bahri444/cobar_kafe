<?php
require_once "koneksi.php";
$jenis_menu     = $_POST['id_jenis_menu'];
$nama_menu      = $_POST['nama_menu'];
$stok           = $_POST['stok'];
$harga          = $_POST['harga'];

$query = "INSERT INTO menu (id_menu,id_jenis_menu,nama_menu,stok,harga)
          values(NULL,'$jenis_menu','$nama_menu','$stok','$harga')";
$sql = mysqli_query($conn, $query);

//cek apakah query berhasil atau gagal
if ($sql) {
    // echo "berhasil";
    echo "<script> alert('Data Berhasil Disimpan');
    window.location.href='data_menu.php'</script>";
} else {
    // echo "Gagal Di simpan : " . mysqli_error($conn);
    echo "<script> alert('Data Gagal Disimpan');
    window.location.href='data_menu.php'</script>";
}


// view data yang di insert
// edit data 
// delete data
