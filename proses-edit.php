<?php

include "koneksi.php";

$id=$_POST['pasien_id'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$lahir=$_POST['lahir'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update pasien set kode='$kode', nama='$nama', jenis_kelamin='$jenis_kelamin', lahir='$lahir', hp='$hp', alamat='$alamat' where pasien_id='$id'");

if($ubah==true){

    header("location:tampilan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>