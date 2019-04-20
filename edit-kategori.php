
<?php
include 'koneksi.php';
?>

<?php
include 'footer.php';
$id_kategori = $_GET['id_kategori'];
$kategori = mysqli_query($konek, "select * from kategori where id_kategori='$id_kategori'");
$row = mysqli_fetch_array($kategori);
?>
<style>
h3{
    text-align: center;
    font-size: 50px;
    font-family: algerian;
}
</style>
<h3>EDIT DATA KATEGORI</h3>
<div class="container">

            <form action="update-kategori.php" method="post">

            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID KATEGORI</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_kategori"  value="<?php echo $row['id_kategori'] ?>" placeholder="Masukan Nama Kategori" readonly="" class="form-control">
                    </div>
                </div>



                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NAMA KATEGORI</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kategori"  value="<?php echo $row['nama_kategori'] ?>" placeholder="Masukan Nama Kategori" class="form-control">
                    </div>
                </div>

     
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">DESKRIPSI</label>
                    <div class="col-sm-10">
                        <input type="text" name="deskripsi"  value="<?php echo $row['deskripsi'] ?>" placeholder="Masukan Deskripsi" class="form-control">
                    </div>
                </div>
       

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger">Update Data</button>
                        <a href="kategori.php" class="btn btn-primary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
        </div>


</body>
</html>