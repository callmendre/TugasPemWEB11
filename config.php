<?php

$server = "localhost";
$username = "root";
$password = "";
$nama_database = "web-pertemuan11";

$db = mysqli_connect($server, $username, $password, $nama_database);

if(!$db){
    die("Gagal terhubung ke database : ". mysqli_connect_error());
}

?>