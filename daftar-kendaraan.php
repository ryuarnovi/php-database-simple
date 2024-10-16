<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: yellow;
        }
        table{
            margin-left: 480px;
            border: 1px;
            border-style: dashed;
            margin-top: 10px;
        }
        .head{
            text-align: center;
            padding-top: 100px;
        }
        
    </style>
    <title>Document</title>
</head>
<body>
       
    <form action="proses-kendaraan.php" method="POST" enctype="multipart/form-data">
        <table>
        <div class="head">
            <h3>Daftar Kendaraan</h3>
        </div>
            <tr>
                <td><label for="id">ID :</label></td>
                <td><input type="text" name="id" require></td>
            </tr>
            <tr>
                <td><label for="no_polisi">No Polisi :</label></td>
                <td><input type="text" name="no_polisi" require></td>
            </tr>
            <tr>
                <td><label for="nama_kendaraan">Nama Kendaraan :</label></td>
                <td><input type="text" name="nama_kendaraan" require></td>
            </tr>
            <tr>
                <td><label for="tipe">Tipe :</label></td>
                <td><input type="text" name="tipe" require></td>
            </tr>
            <tr>
                <td><label for="warna">Warna :</label></td>
                <td><input type="text" name="warna" require></td>
            </tr>
            <tr>
                <td><label for="no_mesin">No Mesin :</label></td>
                <td><input type="text" name="no_mesin" require></td>
            </tr>
            <tr>
                <td><label for="no_rangka">No Rangka :</label></td>
                <td><input type="text" name="no_rangka" require></td>
            </tr>
            <tr>
                <td><label for="bahan_bakar">Bahan Bakar :</label></td>
                <td><input type="text" name="bahan_bakar" require></td>
            </tr>
            <tr>
                <td><label for="thn_kendaraan">Tahun Kendaraan :</label></td>
                <td><input type="text" name="thn_kendaraan" require></td>
            </tr>
            <tr>
                <td><label for="statuus">Status :</label></td>
                <td><input type="text" name="stat" require></td>
            </tr>
            <tr>
                <td><input type="submit" value="daftar"></td>
            </tr>
        </table>
    </form>


</body>
</html>
