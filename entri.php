<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pertemuan-11</title>
</head>
<body>
<h1>Tugas Pemrograman Web Pertemuan 11</h1>
    <div class="container1">
        <div class="container2">
            <ul>
                <a href="index.php">Home</a>
                <a href="entri.php">Entri</a>
                <a href="update.php">Update</a>
                <a href="laporan.php">Laporan</a>
            </ul>
        </div>
    </div>
<form action="" method="post">
    <table>
        <tr>
            <td width="150">Tanggal transaksi : </td>
            <td>:<input type="date" name="tanggal_transaksi" id=""></td>
        </tr>
        <tr>
            <td>Kode  </td>
            <td>:<input type="text" name="kode" id=""></td>
        </tr>
        <tr>
            <td>Nama barang  </td>
            <td>:<input type="text" name="nama_barang" id=""></td>
        </tr>
        <tr>
            <td>Harga jual Rp.</td>
            <td>:<input type="number" name="harga_jual" id=""></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:<input type="number" name="jumlah" id=""></td>
        </tr>
        <tr>
            <td>Jumlah harga Rp.</td>
            <td>:<span name="jumlah_harga"></span></td>
        </tr>
        <tr>
            <td>Rabat (%)</td>
            <td>:<input type="number" name="rabat" id=""></td>
        </tr>
        <tr>
            <td>Besar Rabat Rp.</td>
            <td>: <span name="besar_rabat"></span></td>
        </tr>
        <tr>
            <td>Cara bayar</td>
            <td>:
            </td>
        </tr>
        <tr>
            <td>Administrasi Rp.</td>
            <td>:<span name="administrasi"></span></td>
        </tr>
        <tr>
            <td>Total Rp.</td>
            <td>:<span name="total"></span></td>
        </tr>
        <tr>
            <td>Dibayar Rp.</td>
            <td>:<input type="number" name="dibayar" id=""></td>
        </tr>
        <tr>
            <td>Kembalian Rp.</td>
            <td>: <span name="kembalian"></span></td>
        </tr>
        <tr>
            <td><input type="submit" name="selesai" value="Selesai" id=""></td>
            <td><input type="submit" name="simpan" value="Simpan" id=""></td>
        </tr>
    </table>
</form>
</body>
</html>


<?php
include "config.php";

if(isset($_POST['simpan'])){
    mysqli_query($db,"insert into tugas11 set
    kode = '$_POST[kode]',
    nama_barang = $_POST[nama_barang]',
    harga_jual = $_POST[harga_jual]',
    jumlah = $_POST[jumlah]',
    rabat = $_POST[rabat]',
    dibayar = $_POST[dibayar]'");

    echo '<script type ="text/JavaScript">';  
    echo 'alert("Codekey")';  
    echo '</script>';  
}

?>