
<?php
include 'footer.php';
?>

<style>
h3{
    text-align: center;
    font-size: 50px;
    font-family: algerian;
}
</style>
<h3>INPUT DATA KATEGORI</h3>

<div class="container">

            <form action="simpan-kategori.php" method="post">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NAMA KATEGORI</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kategori" placeholder="Masukan Nama Kategori" class="form-control">
                    </div>
                </div>

     
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">DESKRIPSI</label>
                    <div class="col-sm-10">
                        <input type="text" name="deskripsi" placeholder="Masukan Deskripsi" class="form-control">
                    </div>
                </div>
       

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger">Simpan Data</button>
                        <a href="kategori.php" class="btn btn-primary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
        </div>


</body>
</html>