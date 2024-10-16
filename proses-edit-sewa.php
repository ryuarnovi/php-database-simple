<?php
include 'config.php';

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$no_sewa = $_POST['no_sewa'];
$no_ktp = $_POST['no_ktp'];
$no_polisi = $_POST['no_polisi'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];
$biaya = $_POST['biaya'];
$catatan = $_POST['catatan'];

// Validasi nilai ID
$cek_id = mysqli_query($conn, "SELECT id FROM sewatbl WHERE id='$id'");
if (mysqli_num_rows($cek_id) > 0) {
    echo "ID sudah ada.";
    exit;
}

// Ubah nilai ID
$id = 12345;
$biaya = filter_var($_POST["biaya"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
if (!is_numeric($biaya)) {
    echo "Biaya harus berupa angka.";
    exit;
}

$sql = "UPDATE sewatbl SET 
        id='$id',
        tanggal='$tanggal',
        no_sewa='$no_sewa',
        no_ktp='$no_ktp',
        no_polisi='$no_polisi',
        tgl_sewa='$tgl_sewa',
        tgl_kembali='$tgl_kembali',
        biaya='$biaya',
        catatan='$catatan'";



if ($conn->query($sql) === TRUE) {
    header("location: sewa.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$biaya_string = strval($biaya);
echo "<br>Harga total: " . number_format($biaya_string, 3, ",", ".");
?>
