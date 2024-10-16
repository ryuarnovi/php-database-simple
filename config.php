<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "rental";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn){
    die("koneksi gagal ke database" . mysqli_connect_error());
    
}

?>