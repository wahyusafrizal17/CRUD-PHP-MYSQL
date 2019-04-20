<?php
include 'header.php';
include 'koneksi.php';

$nama_kategori   = $_POST['nama_kategori'];
$deskripsi       = $_POST['deskripsi'];


$sql = "insert into kategori SET nama_kategori='$nama_kategori', deskripsi='$deskripsi'";
$insert = mysqli_query($konek, $sql);

if($insert){
    echo "Data Tersimpan" ;
}else{
    echo "Data Tidak Tersimpan";
}

header("location:kategori.php");

 ?> 