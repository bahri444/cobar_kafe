<?php
include_once 'koneksi.php';
?>
<html>

<head>
    <title>
        Form Registrasi
    </title>
</head>

<body>
    <h1>Formulir Registrasi User</h1>
    <br>
    <form action="simpan_registrasi.php" method="post">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><input type="text" name="level" placeholder="kasir atau menejer"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <td colspan="4" style="text-align: center">
                <input type="submit" name="simpan" value="Simpan">
            </td>
        </table>
    </form>
</body>

</html>