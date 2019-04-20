<?php
 $email    = $_POST['email'];
 $pass = $_POST['password'];

 include 'koneksi.php';

 $sql = "select * from user where email='$email' and password='$pass'";
 $user = mysqli_query($konek, $sql);


 if(mysqli_num_rows($user)>0){
     session_start();
     $userData = mysqli_fetch_array($user);
     $_SESSION['status_login']="sudah login";
     $_SESSION['nama_user'] = $userData['username'];
     header("location:index.php");
 }else{
     header("location:login.php");
 }
 

?>