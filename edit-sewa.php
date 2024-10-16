<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body align=center bgcolor="yellow">
    <h2>Update Data Sewa</h2>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM sewatbl";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<form action='proses-edit-sewa.php' method='post'>
                <table align=center border='1' cellpadding='10'>
                    <tr>
                        <td>No:</td>
                        <td><input type='text' name='id' value='" . $row['id'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Tanggal:</td>
                        <td><input type='date' name='tanggal' value='" . $row['tanggal'] . "' required></td>
                    </tr>
                    <tr>
                        <td>No Sewa:</td>
                        <td><input type='text' name='no_sewa' value='" . $row['no_sewa'] . "' required></td>
                    </tr>
                    <tr>
                        <td>No Ktp:</td>
                        <td><input type='text' name='no_ktp' value='" . $row['No_ktp'] . "' required></td>
                    </tr>
                    <tr>
                        <td>No POlisi:</td>
                        <td><input type='text' name='no_polisi' value='" . $row['no_polisi'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Sewa:</td>
                        <td><input type='date' name='tgl_sewa' value='" . $row['tgl_sewa'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kembali:</td>
                        <td><input type='date' name='tgl_kembali' value='" . $row['tgl_kembali'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Biaya:</td>
                        <td><input type='text' name='biaya' value='" . $row['biaya'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Catatan:</td>
                        <td><input type='text' name='catatan' value='" . $row['catatan'] . "' required></td>
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
