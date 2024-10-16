// Edit-kendaraan.php

<?php
include 'config.php';

$id = $_POST['id'];
$no_polisi = $_POST['no_polisi'];
$nama_kendaraan = $_POST['nama_kendaraan'];
$tipe = $_POST['tipe'];
$warna = $_POST['warna'];
$no_rangka = $_POST['no_rangka'];
$no_mesin = $_POST['no_mesin'];
$bahan_bakar = $_POST['bahan_bakar'];
$thn_kendaraan = $_POST['thn_kendaraan'];
$stat = $_POST['stat'];

if ($stat == '') {
    $stat = 'Tersedia';
}

$sql = "UPDATE kendaraantbl SET 
        id='$id',
        no_polisi='$no_polisi',
        nama_kendaraan='$nama_kendaraan',
        tipe='$tipe',
        warna='$warna',
        no_rangka='$no_rangka',
        no_mesin='$no_mesin',
        bahan_bakar='$bahan_bakar',
        thn_kendaraan='$thn_kendaraan',
        stat='$stat'";

if ($conn->query($sql) === TRUE) {
    header("location: kendaraan.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
