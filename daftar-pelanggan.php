<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kendaraan</title>
</head>
<body align=center bgcolor="yellow">
<img src="smk9logo.png" width="100" height="120" alt="smk"/>
    <h2>Tambah Data Kendaraan</h2>
    <form action="proses-pelanggan.php" method="post" enctype="multipart/form-data">
    <table  align=center  border="1" cellpadding="10">
        <tr>
        <td bgcolor="white">
            No: 
        </td>
        <td>
            <input type="text" name="id" required>
        </td>
        </tr>
        <tr>
        <td bgcolor="white">
        No Ktp: 
        </td>
        <td>
        <input type="text" name="no_ktp" required>
        </td>
        </tr>
        <tr>
        <td bgcolor="white">
        Nama Pelanggan: 
        </td>
        <td>
        <input type="text" name="nama_pelanggan" required>
        </td>
        </tr>
        <tr>
        <td bgcolor="white">
        Alamat: 
        </td>
        <td>
        <input type="text" name="alamat" required>
        </td>
        </tr>
        <tr>
        <td  bgcolor="white">
        Telepon: 
        </td>
        <td>
            <input type="text" name="telepon" required>
        </td>
        </tr>
        <tr>
        <td bgcolor="white">
        Foto: 
        </td>
        <td>
            <input type="file" name="foto" accept=".png" arequired>
        </td>
        </tr>
</table>
<br>
<input type="submit" value="tambah" name="tambahdp" >

</form>
</body>
</html>