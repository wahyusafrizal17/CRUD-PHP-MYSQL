<?php
include 'koneksi.php';

$id_kategori    = $_GET['id_kategori'];

$delete = mysqli_query($konek, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");


header("location:kategori.php");

 ?> 