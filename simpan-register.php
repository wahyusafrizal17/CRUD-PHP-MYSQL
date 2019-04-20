<?php

include 'koneksi.php';

$username    = $_POST['username'];
$email       = $_POST['email'];
$password    = $_POST['password'];


$sql = "insert into user SET username='$username', email='$email', password='$password'";
$insert = mysqli_query($konek, $sql);


header("location:login.php");

 ?> 