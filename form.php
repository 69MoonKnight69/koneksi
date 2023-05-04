<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FORM TAMBAH MAHASISWA</h2>
    <form action="simpan.php" method="POST">
        nim : <br>
    <input type="text" name="txtnim"><br>
    Nama : <br>
    <input type="text" name="txtnama"><br>
    Jenis KElamin : <br>
    <select name ="txtjenkel">
        <option value="laki-laki">laki-laki</option>
        <option value="perempuan">perempuan</option>
</select><br>
Tempat Tanggal lahir : <br>
<input type="text" name="txtlahir"><br>
nomor hp : <br>
<input type="text" name="txthp"><br>
<button type="submit">simpan</button>
</form>

        

    
</body>
</html>