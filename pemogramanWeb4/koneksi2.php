<?php
$mysqli = new mysqli("localhost","root","","pertemuan4");

if ($mysqli->connect_error){
    die("Koneksi gagal: " . $mysqli->connect_eror);
}else{
    echo "Koneksi ke database berhasil.";
}