<?php
include 'koneksi.php';

$id            = $_POST['id'];
$judul         = $_POST['judul'];
$tanggal       = $_POST['tanggal'];
$id_kategori   = $_POST['id_kategori'];
$penulis       = $_POST['penulis'];
$isi_berita    = $_POST['isi_berita'];


$temp        = $_FILES['gambar']['tmp_name'];
$name       = $_FILES['gambar']['name'];
$folder = "product/";

if($name != null){
    move_uploaded_file($temp, $folder . $name);
    $sql = "UPDATE artikel SET judul='$judul', tanggal='$tanggal', id_kategori='$id_kategori', penulis='$penulis', isi_berita='$isi_berita', gambar='$name' where id='$id'";

}else{
    $sql = "UPDATE artikel SET judul='$judul', tanggal='$tanggal', id_kategori='$id_kategori', penulis='$penulis', isi_berita='$isi_berita' where id='$id'";

}






$update = mysqli_query($konek, $sql);




header("location:artikel.php");

 ?> 