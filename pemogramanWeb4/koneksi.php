<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=pertemuan4","root","");
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Koneksi ke database berhasil.";
}catch (PDOException $e){
echo "Koneksi gagal:  " . $e->getMessage();
}



