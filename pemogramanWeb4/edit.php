<?php
include "koneksi.php";
$query = "SELECT * FROM biodata where id=$_GET[id";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>From Edit Mahasiswa</title>
</head>
<body>
    <form action="<? 'update.php?id='.$_GET['id'];?>" method="post">
        <label for="npm">NPM</label>
        <input type="text" name="npm" value="<?= $row['npm'];?>" /><br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $row['nama'];?>" /><br>
        <label for="prodi">Prodi</label>
        <select name="prodi">
            <option value="Sistem Informasi (S1)">Sistem Informasi (S1)</option>
            <option value="Teknik Informatika (S1)">Teknik Informatika (S1)</option>
            <option value="Manajemen Informatika (D3)">Sistem Informatika (D3)</option>
</select>
<br>
<input type="submit" value="Update" />
</from>
</body>
</html>