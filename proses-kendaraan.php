<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $no_polisi = $_POST['no_polisi'];
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $no_mesin = $_POST['no_mesin'];
    $no_rangka = $_POST['no_rangka'];
    $bahan_bakar = $_POST['bahan_bakar'];
    $thn_kendaraan = $_POST['thn_kendaraan'];
    $stat = $_POST['stat'];

    
    $sql = "INSERT INTO kendaraantbl (id, no_polisi, nama_kendaraan, tipe, warna, no_mesin, no_rangka, bahan_bakar, thn_kendaraan, stat)
    VALUES ('$id', '$no_polisi','$nama_kendaraan','$tipe','$warna','$no_mesin','$no_rangka','$bahan_bakar','$thn_kendaraan','$stat')";

    if (mysqli_query($conn, $sql)){
        header("Location: kendaraan.php");
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} 

?>

