<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from pasien where pasien_id='$id'");

if($hapus==true){

    header("location:tampilan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>