<?php
require_once "koneksi.php";
$namaLengkap = $_POST['nama_lengkap'];
$level       = $_POST['level'];
$username    = $_POST['username'];
$password    = md5($_POST['password']);
$idUser = $_POST['id_user'];

// lagukan query update data
$query = mysqli_query($conn, "Update user set nama_lengkap='$namaLengkap',level='$level',
        username='$username',password='$password' where id_user='$idUser'  ");

//cek apakah query berhasil atau gagal
if ($query) {
    echo "<script> alert('Data Berhasil Di Ubah');
    window.location.href='data_registrasi.php'</script>";
} else {
    // echo "Gagal Di simpan : " . mysqli_error($conn);
    echo "<script> alert('Data Gagal Di Ubah');
    window.location.href='frm_ubah_registrasi.php?id=$idUser'</script>";
}


// view data yang di insert
// edit data 
// delete data
