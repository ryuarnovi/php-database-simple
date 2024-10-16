<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $no_sewa = $_POST['no_sewa'];
    $No_ktp = $_POST['No_ktp'];
    $no_polisi = $_POST['no_polisi'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $biaya = $_POST['biaya'];
    $catatan = $_POST['catatan'];

    $sql = "INSERT INTO sewatbl (id, tanggal, no_sewa, No_ktp, no_polisi, tgl_sewa, tgl_kembali, biaya, catatan)
    VALUES ('$id', '$tanggal','$no_sewa','$No_ktp','$no_polisi','$tgl_sewa','$tgl_kembali','$biaya','$catatan')";

    if (mysqli_query($conn, $sql)){
        header("Location: sewa.php");
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} 

?>