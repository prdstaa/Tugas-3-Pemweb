<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "tugas_pemweb";

$koneksi = mysqli_connect($server, $user, $password, $database);
if (!$koneksi){
    die("koneksi gagal: ".mysqli_connect_error());
}
?>