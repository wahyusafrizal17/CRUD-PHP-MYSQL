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
include 'navbar.php';
include 'footer.php';
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
.gm{
    border-radius: 15px;
    width: 80px;
    height: 60px;
}

</style>

<h3><b>DATA ARTIKEL</b></h3>
  
    <table class="table table-hover">
    <tr>
        <th>NO</th><th>JUDUL</th><th>TANGGAL</th><th>KATEGORI</th><th>PENULIS</th><th>ISI BERITA</th><th>GAMBAR</th><th>ACTION</th>
    </tr>
    <?php
     $sql = "SELECT a.id,a.judul,a.tanggal,k.nama_kategori,a.penulis,a.isi_berita,a.gambar FROM artikel as a, kategori as k WHERE a.id_kategori=k.id_kategori";                                                                                                                                                                                                                                                                                                                              
     $artikel = mysqli_query($konek,$sql);
     $i = 1;
     while($row = mysqli_fetch_array($artikel)){
         echo "<tr>
                    <td>$i</td>
                    <td>$row[judul]</td>
                    <td>$row[tanggal]</td>
                    <td>$row[nama_kategori]</td>
                    <td>$row[penulis]</td>
                    <td>$row[isi_berita]</td>
                    <td><img class='gm' src='product/$row[gambar]'></td>
                    <td><a href='edit-artikel.php?id=$row[id]' class='btn btn-success' >Edit</a> 
                    <a href='delete-artikel.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
               </tr>";
               $i++;
     }
    ?>
    </table>
    <a href="input-artikel.php" class="btn btn-primary">INPUT ARTIKEL</a>
</body>
</html>