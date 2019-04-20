<!DOCTYPE html>
<html lang="en">
<head>
    <title>BOLA</title>
    <style>
    body{
        background-image: url(gambar/darkness.png);
    }
    </style>
    
</head>
<body>


<?php
 include 'koneksi.php';
 include 'footer.php';
 include 'navbar.php';
?>
<style>
body{
    background-image: url(bg.png);
}
td{
    text-align: center;
}
tr{
    text-align: center;
}
h3{
    text-align: center;
    font-size: 50px;
    font-family: algerian;
}
</style>

<h3><b>DATA KATEGORI</b></h3>
  
    <table class="table table-hover">
    <tr>
        <th>ID</th><th>NAMA</th><th>DESKRIPSI</th><th>ACTION</th>
    </tr>
    <?php
     $sql = "select * from kategori";
     $kategori = mysqli_query($konek,$sql);
     while($row = mysqli_fetch_array($kategori)){
         echo "<tr>
                    <td>$row[id_kategori]</td>
                    <td>$row[nama_kategori]</td>
                    <td>$row[deskripsi]</td>
                    <td><a href='edit-kategori.php?id_kategori=$row[id_kategori]' class='btn btn-success' >Edit</a> 
                    <a href='delete-kategori.php?id_kategori=$row[id_kategori]' class='btn btn-danger'>Delete</a></td>
               </tr>";
     }
    ?>
    </table>
    <a href="input-kategori.php" class="btn btn-primary">INPUT KATEGORI</a>
</body>
</html>