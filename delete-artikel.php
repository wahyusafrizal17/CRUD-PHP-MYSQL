<?php
include 'koneksi.php';

$id    = $_GET['id'];

$delete = mysqli_query($konek, "DELETE FROM artikel WHERE id='$id'");


header("location:artikel.php");

 ?> 