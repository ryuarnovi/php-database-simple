<?php 
include 'config.php';

$sql = "SELECT COUNT(*) as total_sewa FROM sewatbl";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    $total_sewa = $row['total_sewa'];
}else {
    $total_sewa = 0;
}
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
<div class="bg-table">
        <h3>NINE RENTAL</h3>
        <h3>RENTAL MOBIL SEGALA MEREK</h3>
        <h3>JL PETERONGAN NO 2 SEMARANG</h3>
        <br>
        <div class="menu">
        <p class="head">DATA SEWA</p>
        <hr>
        <p><a href="dashboard.php">◀</a><a href="daftar-sewa.php" class="tambah">⨦</a></p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>No Sewa</th>
            <th>No KTP</th>
            <th>No Polisi</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Biaya</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include 'config.php';

        $sql = "SELECT * FROM sewatbl";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['tanggal'] . "</td>";
                echo "<td>" . $row['no_sewa'] . "</td>";
                echo "<td>" . $row['No_ktp'] . "</td>";
                echo "<td>" . $row['no_polisi'] . "</td>";
                echo "<td>" . $row['tgl_sewa'] . "</td>";
                echo "<td>" . $row['tgl_kembali'] . "</td>";
                echo "<td>" . number_format($row["biaya"], 3, ",", ".") . "</td>";                echo "<td>" . $row['catatan'] . "</td>";
                echo "<td><a href='edit-sewa.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus-sewa.php?id=" . $row['id'] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        }
        
        ?>
    </table>
    <p class="total">Total: <?php echo $total_sewa; ?></p>
    <p class="copy">COPYRIGHT @ SMK NEGERI 9 SEMARANG</p>
    </div>
    </div></body>
</html>