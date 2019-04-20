<h2>Contoh Upload Gambar</h2>
<form action="" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
  <p>Judul Gambar :
    <input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" />
</p>
  <p>File Gambar :
    <input name="nama_file" type="file" id="nama_file" size="30" />
</p>
  <p><input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" /></p>
</form>

<?php
$namafolder="product/"; //tempat menyimpan file
include 'koneksi.php';
if (!empty($_FILES["nama_file"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['nama_file']['type'];
    $judul_gambar=$_POST['judul_gambar'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {           
        $gambar = $namafolder . basename($_FILES['nama_file']['name']);       
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
            echo "Gambar berhasil dikirim ".$gambar;
            $sql="insert into gambar (judul_gambar,nama_file) values ('$judul_gambar','$gambar')";
            $res=mysql_query($sql) or die (mysql_error());
        } else {
           echo "Gambar gagal dikirim";
        }
   } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
    echo "Anda belum memilih gambar";
}
?>