<?php
include 'footer.php';
include 'koneksi.php';

$judul         = $_POST['judul'];
$tanggal       = $_POST['tanggal'];
$id_kategori   = $_POST['id_kategori'];
$penulis       = $_POST['penulis'];
$isi_berita    = $_POST['isi_berita'];
$temp        = $_FILES['gambar']['tmp_name'];
$name       = $_FILES['gambar']['name'];
$size        = $_FILES['gambar']['size'];
$type         = $_FILES['gambar']['type'];
$folder = "product/";

if ($size < 1024000 and $type =='image/jpeg') {
    // upload Process
    move_uploaded_file($temp, $folder . $name);
    
    
    // menampikan informasi file yang di upload
    echo "Nama File : <b>" . $name;
    echo "</b><br>";
    echo "Ukuran File : <b>" . $size;
    echo "</b> Byte<br>";
    echo "Type File : <b>" . $type;
    echo "</b>";
}else{
    echo "Gagal Upload File";
}







$sql = "insert into artikel SET judul='$judul', tanggal='$tanggal', id_kategori='$id_kategori', penulis='$penulis', isi_berita='$isi_berita', gambar='$name'";
$insert = mysqli_query($konek, $sql);


header("location:artikel.php");

    
 ?> 