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
    <br>
    <table border="1" width="100%" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Tgl</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Harga Rp.</th>
                <th>Qty</th>
                <th>Jlh Harga</th>
                <th>Rabat (%)</th>
                <th>Rabat Rp.</th>
                <th>Cara Bayar</th>
                <th>Adm Rp.</th>
                <th>Total Rp.</th>
            </tr>
        </thead>
    </table>
</body>
</html>

<?php
$sql = "SELECT * FROM pertemuan11";
$query = mysqli_query($db, $sql);

while($laporan = mysqli_fetch_array($query)){
    echo "<tr>";

    echo "<td>".$laporan['']
}


?>