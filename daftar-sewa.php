<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
</head>
<body>
    
    <form action="proses-sewa.php" method="POST">
        <table>
        <div class="head">
            <h3>Daftar Sewa</h3>
        </div>
            <tr>
                <td><label for="id">ID :</label></td>
                <td><input type="text" name="id" require></td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal:</label></td>
                <td><input type="date" name="tanggal" require></td>
            </tr>
            <tr>
                <td><label for="no_sewa">No Sewa :</label></td>
                <td><input type="text" name="no_sewa" require></td>
            </tr>
            <tr>
                <td><label for="No_ktp">No KTP :</label></td>
                <td><input type="text" name="No_ktp" require></td>
            </tr>
            <tr>
                <td><label for="no_polisi">No Polisi :</label></td>
                <td><input type="text" name="no_polisi" require></td>
            </tr>
            <tr>
                <td><label for="tgl_sewa">Tanggal Sewa :</label></td>
                <td><input type="date" name="tgl_sewa" require></td>
            </tr>
            <tr>
                <td><label for="tgl_kembali">Tanggal Kembali :</label></td>
                <td><input type="date" name="tgl_kembali" require></td>
            </tr>
            <tr>
                <td><label for="biaya">Biaya :</label></td>
                <input type="text" name="biaya" value="<?php echo number_format($data['biaya'], 2, ",", "."); ?>"><br>
            </tr>
            <tr>
                <td><label for="catatan">Catatan:</label></td>
                <td><input type="text" name="catatan" require></td>
            </tr>
            <tr>
                <td><input type="submit" value="daftar"></td>
            </tr>
        </table>
    </form>


</body>
</html>