<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body align=center bgcolor="yellow">
    <h2>Update Data Pelanggan</h2>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM pelanggantbl WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<form action='proses-edit-pelanggan.php?id=" . $_GET['id'] . "' method='post' enctype='multipart/form-data'>
                <table align=center border='1' cellpadding='10'>
                    <tr>
                        <td>No:</td>
                        <td><input type='text' name='id' value='" . $row['id'] . "' required></td>
                    </tr>
                    <tr>
                        <td>No Ktp:</td>
                        <td><input type='text' name='no_ktp' value='" . $row['no_ktp'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Nama Pelanggan:</td>
                        <td><input type='text' name='nama_pelanggan' value='" . $row['nama_pelanggan'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Alamat:</td>
                        <td><input type='text' name='alamat' value='" . $row['alamat'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Telepon:</td>
                        <td><input type='text' name='telepon' value='" . $row['telepon'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Foto:</td>
                        <td><input type='file' name='foto'></td>
                    </tr>
                </table>
                <br>
                <input type='submit' value='Update Data'>
              </form>";
    } else {
        echo "Data tidak ditemukan.";
    }

    $conn->close();
    ?>
</body>
</html>
