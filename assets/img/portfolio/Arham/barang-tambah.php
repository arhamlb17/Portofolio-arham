<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>tambah barang</h3>
    <form action="" method="POST">
    <table>
        <tr>
            <td width="130">Kode Barang
            <td><input type="text" name="kode_barang" value=""></td>
        </tr>
        <tr>
            <td width="130">Nama Barang
            <td><input type="text" name="nama_barang" value=""></td>
        </tr>
        <tr>
            <td width="130">Harga Barang
            <td><input type="text" name="harga_barang" value=""></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"INSERT INTO barang SET
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]'");
    echo "data berhasil ditambahkan";      
}
?>











