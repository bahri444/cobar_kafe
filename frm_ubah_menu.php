<?php
require_once "koneksi.php";
// mengambil data dari variabel id yang dikirimlan melalu method GET
$id = $_GET['id'];
// query untuk menampilkan data berdasarkan id
$query = mysqli_query($conn, "SELECT menu.*,jenis_menu.jenis_menu FROM menu
        INNER JOIN jenis_menu ON menu.id_jenis_menu=jenis_menu.id_jenis_menu where menu.id_menu='$id'");
$row = mysqli_fetch_array($query);
// get jenis menu
$queryJenisMenu = mysqli_query($conn, "SELECT * FROM jenis_menu");
?>
<html>

<head>
    <title>
        Form Ubah Menu
    </title>
</head>

<body>
    <h1>Formulir Ubah Menu</h1>
    <br>
    <form action="simpan_ubah_menu.php" method="post">
        <table>
            <tr>
                <td>Jenis Menu</td>
                <td><select name="id_jenis_menu">
                        <option selected value="<?= $row['id_jenis_menu']; ?>"> <?= $row['jenis_menu']; ?> </option>
                        <?php while ($sql = mysqli_fetch_array($queryJenisMenu)) : ?>
                            <option value="<?= $sql['id_jenis_menu']; ?>"><?= $sql['jenis_menu']; ?> </option>
                        <?php endwhile; ?>
                    </select> </td>
                <input type="hidden" name="id_menu" value="<?= $row['id_menu']; ?>">
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td><input type="text" name="nama_menu" value="<?= $row['nama_menu']; ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?= $row['stok']; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?= $row['harga']; ?>"></td>
            </tr>
            <td colspan="4" style="text-align: center">
                <input type="submit" name="simpan" value="Simpan">
            </td>
        </table>
    </form>
</body>

</html>