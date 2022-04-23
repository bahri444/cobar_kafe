<?php
require_once "koneksi.php";
$jenisMenu      = $_POST['id_jenis_menu'];
$namaMenu       = $_POST['nama_menu'];
$stok           = $_POST['stok'];
$harga          = $_POST['harga'];
$idMenu         = $_POST['id_menu'];

// lagukan query update data
$query = mysqli_query($conn, "Update menu set id_jenis_menu='$jenisMenu',nama_menu='$namaMenu',
        stok='$stok',harga='$harga' where id_menu='$idMenu' ");

//cek apakah query berhasil atau gagal
if ($query) {
    echo "<script> alert('Data Berhasil Di Ubah');
    window.location.href='data_menu.php'</script>";
} else {
    // echo "Gagal Di simpan : " . mysqli_error($conn);
    echo "<script> alert('Data Gagal Di Ubah');
    window.location.href='data_menu.php'</script>";
}


// view data yang di insert
// edit data 
// delete data
