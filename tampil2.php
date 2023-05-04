<?php
include("koneksi.php");
$sql="select * from mahasiswa";
$proses =mysqli_query($koneksi, $sql);
while ($isi = mysqli_fetch_assoc($proses)){
    echo "nim                   : ".$isi['nim'] . "<br>";
    echo "Nama                  : ".$isi['nama'] . "<br>";
    echo "Jenis KElamin         : ".$isi['jenkel'] . "<br>";
    echo "Tempat Tanggal lahir  : ".$isi['lahir'] . "<br>";
    echo "Nomor HP              : ".$isi['hp'] . "<br><br>";
}
?>