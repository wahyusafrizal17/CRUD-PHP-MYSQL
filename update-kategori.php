<?php
include 'koneksi.php';

$id_kategori      = $_POST['id_kategori'];
$nama_kategori    = $_POST['nama_kategori'];
$deskripsi        = $_POST['deskripsi'];


$sql = "UPDATE kategori SET nama_kategori='$nama_kategori', deskripsi='$deskripsi' where id_kategori='$id_kategori'";

$update = mysqli_query($konek, $sql);




header("location:kategori.php");

 ?> 