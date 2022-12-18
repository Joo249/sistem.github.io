<?php

$servername = "localhost";
$database = "Aku";
$username ="root";
$pass = "";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername,$username,$pass,$database) or die('koneksi gagal');
// mengecek koneksi
?>