<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body align=center bgcolor="yellow">
    <img src="smk9logo.png" width="100" height="120" alt="smk"/>
    <h2>Update Data Kendaraan</h2>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM kendaraantbl";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<form action='proses-edit-kendaraan.php' method='post'>
                <table align=center border='1' cellpadding='10'>
                    <tr>
                        <td>No:</td>
                        <td><input type='text' name='id' value='" . $row['id'] . "' required></td>
                    </tr>
                    <tr>
                        <td>No Polisi:</td>
                        <td><input type='text' name='no_polisi' value='" . $row['no_polisi'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Nama kendaraan:</td>
                        <td><input type='text' name='nama_kendaraan' value='" . $row['nama_kendaraan'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Tipe:</td>
                        <td><input type='text' name='tipe' value='" . $row['tipe'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Warna:</td>
                        <td><input type='text' name='warna' value='" . $row['warna'] . "' required></td>
                    </tr>
                    <tr>
                        <td>No Rangka:</td>
                        <td><input type='text' name='no_rangka' value='" . $row['no_rangka'] . "' required></td>
                    </tr>
                    <tr>
                        <td>No Mesin:</td>
                        <td><input type='text' name='no_mesin' value='" . $row['no_mesin'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Bahan Bakar:</td>
                        <td><input type='text' name='bahan_bakar' value='" . $row['bahan_bakar'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Tahun Kendaraan:</td>
                        <td><input type='text' name='thn_kendaraan' value='" . $row['thn_kendaraan'] . "' required></td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td><input type='text' name='stat' value='" . $row['stat'] . "' required></td>
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
