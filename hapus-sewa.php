<?php 
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM sewatbl WHERE id='$id'";

if (mysqli_query($conn, $sql)){
    header("Location: sewa.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>