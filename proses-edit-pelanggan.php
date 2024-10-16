<?php
include 'config.php';

// Get data from form
$id = $_POST['id'];
$no_ktp = $_POST['no_ktp'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$foto = $_FILES['foto']['name'];

// Upload foto
if (isset($foto)) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto);

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
        // Foto berhasil diunggah

        // Update path foto di database
        $sql = "UPDATE pelanggantbl SET foto='$target_file' WHERE id=$id";
        $conn->query($sql);
    } else {
        // Foto gagal diunggah
        echo "Terjadi kesalahan saat mengunggah foto.";
    }
}

// Update data to database
$sql = "UPDATE pelanggantbl SET no_ktp='$no_ktp', nama_pelanggan='$nama_pelanggan', alamat='$alamat', telepon='$telepon' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // Success
    header('Location: pelanggan.php');
} else {
    // Error
    echo 'Error: ' . $conn->error;
}

$conn->close();
?>
