<?php

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$lahir=$_POST['lahir'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pasien(kode,nama,jenis_kelamin,lahir,hp,alamat) 
        values ('$kode', '$nama', '$jenis_kelamin', '$lahir', '$hp', '$alamat')");

if($simpan==true){

    header("location:tampilan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>