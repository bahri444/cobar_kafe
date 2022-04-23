<?php
require_once "koneksi.php";
$namaLengkap = $_POST['nama_lengkap'];
$level       = $_POST['level'];
$username    = $_POST['username'];
$password    = md5($_POST['password']);

$query = "INSERT INTO user (id_user,nama_lengkap,level,username,password)
          values(NULL,'$namaLengkap','$level','$username','$password')";
$sql = mysqli_query($conn, $query);

//cek apakah query berhasil atau gagal
if ($sql) {
    echo "<script> alert('Data Berhasil Disimpan');
    window.location.href='data_registrasi.php'</script>";
} else {
    // echo "Gagal Di simpan : " . mysqli_error($conn);
    echo "<script> alert('Data Gagal Disimpan');
    window.location.href='frm_registrasi.php'</script>";
}


// view data yang di insert
// edit data 
// delete data
