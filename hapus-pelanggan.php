<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM pelanggantbl WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("location: pelanggan.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>