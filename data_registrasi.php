<html>

<head>
    <title> Data Registrasi</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid;
    }
</style>
<?php
// koneksi databse
require_once "koneksi.php";
// penomoran data
$no = 1;
//query untuk eksekusi perintah sql
$query = mysqli_query($conn, "SELECT * FROM user");

?>

<body>
    <h4><a href="frm_registrasi.php"> Form Registrasi</a></h4>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Level</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
        //funsgi manampilkan data berupa array
        while ($row = mysqli_fetch_array($query)) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_lengkap']; ?></td>
                <td><?= $row['level']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['password']; ?></td>
                <td><a href="frm_ubah_registrasi.php?id=<?= $row['id_user']; ?>"> Ubah</a>
                    <a href="hapus_registrasi.php?id=<?= $row['id_user']; ?>"> Hapus</a>
                </td>
            </tr>
        <?php $no++; // increment 
        endwhile; // akhir perulangan 
        ?>
    </table>
</body>

</html>