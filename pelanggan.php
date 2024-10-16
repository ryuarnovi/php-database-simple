


<?php 
include 'config.php';

$sql = "SELECT COUNT(*) as total_kendaraan FROM kendaraantbl";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    $total_kendaraan = $row['total_kendaraan'];
}else {
    $total_kendaraan = 0;
}
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: yellow;
            text-align: center;
        }
        h3{
            margin: 3px;
        }
        .bg-table{
            margin-top: 150px;
            background-color: rgb(0, 255, 0);
            padding-top: 15px;
            margin-bottom: 10px;
        }
        .menu{
            padding-top: 10px;
            background-color: #d3d3d3;
        }
        th{
            background-color: blue;
        }
        p{
            text-align: left;
        }
        .head{
            font-size: 16px;
            font-weight: bolder;
            text-align: center;
        }
        table{
            width: 100%;
        }
        .total{
            background-color: white;
        }
        .copy{
            text-align: center;
            font-size: 15px;
            font-weight: bolder;
            background-color: white;
        }
        .tambah{
            padding-left: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>

    <div class="bg-table">
        <h3>NINE RENTAL</h3>
        <h3>RENTAL MOBIL SEGALA MEREK</h3>
        <h3>JL PETERONGAN NO 2 SEMARANG</h3>
        <br>
        <div class="menu">
        <p class="head">DATA PELANGGAN</p>
        <hr>
        <p><a href="dashboard.php">◀</a><a href="daftar-pelanggan.php" class="tambah">⨦</a></p>
        
        <table border="1" align=center>
        <tr  class="biru">
            <th >ID</th>
            <th>NO KTP</th>
            <th >NAMA PELANGGAN</th>
            <th >ALAMAT</th>
            <th >TELEPON</th>
            <th >FOTO</th>
            <th >AKSI</th>
        </tr>

    
        </tr>
        <?php
        include 'config.php';

        $sql = "SELECT * FROM pelanggantbl";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $foto_path = $row['foto']; // Simpan path foto ke variabel
            if(file_exists($foto_path)) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['no_ktp'] . "</td>
                        <td>" . $row['nama_pelanggan'] . "</td>
                        <td>" . $row['alamat'] . "</td>
                        <td>" . $row['telepon'] . "</td>
                        <td><img src='" . $foto_path . "' alt='Foto' width='100' height='100'></td>
                        <td><a href='edit-pelanggan.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus-pelanggan.php?id=" . $row['id'] . "'>Hapus</a></td>
                      </tr>";
            } 
        }
      }

        $conn->close();
        ?>
        </table>
    <p class="total">Total: <?php echo $total_kendaraan; ?></p>
    <p class="copy">COPYRIGHT @ SMK NEGERI 9 SEMARANG</p>
    </div>
    </div>
</body>
</html>