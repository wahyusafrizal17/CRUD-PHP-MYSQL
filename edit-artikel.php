
<?php
include 'footer.php';
include 'koneksi.php';
?>

<style>
h3{
    text-align: center;
    font-size: 50px;
    font-family: calimbri;
}
</style>


<?php
include 'footer.php';
$id = $_GET['id'];
$artikel = mysqli_query($konek, "select * from artikel where id='$id'");
$row = mysqli_fetch_array($artikel);
?>
<h3>EDIT DATA KATEGORI</h3>

<div class="container">

            <form action="update-artikel.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" placeholder="Masukan Judul" class="form-control" readonly="">
            

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">JUDUL</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" value="<?php echo $row['judul'] ?>" placeholder="Masukan Judul" class="form-control">
                    </div>
                </div>

     
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TANGGAL</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal" value="<?php echo $row['tanggal'] ?>" class="form-control">
                    </div>
                </div>

              
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PENULIS</label>
                    <div class="col-sm-10">
                        <input type="text" name="penulis" value="<?php echo $row['penulis'] ?>" placeholder="penulis" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ISI BERITA</label>
                    <div class="col-sm-10">
                        <textarea name="isi_berita"  placeholder="Masukan berita" class="form-control"><?php echo $row['isi_berita'] ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">GAMBAR</label>
                    <div class="col-sm-10">
                        <input type="file" name="gambar" value="<?php echo $row['gambar'] ?>"   class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">KATEGORI</label>
                    <div class="col-sm-10">
                        <select name="id_kategori" value="<?php echo['id_kategori'] ?>" class="form-control">
                            <option value="">-- PILIH KATEGORI --</option>
                            <?php
                              $sql = "select * from kategori";
                              $tampil = mysqli_query($konek, $sql);
                              while( $row = mysqli_fetch_array($tampil)){
                                  echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                              }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger">Update Data</button>
                        <a href="artikel.php" class="btn btn-primary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
        </div>
        <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>

        <script>

                        CKEDITOR.replace( 'isi_berita' );
                </script>
</body>

</html>