<?php

include 'footer.php';

SESSION_START();
if(empty($_SESSION['status_login'])){
    header("location:login.php");
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="gambar/logo.png" width="300" height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php">KATEGORI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.php">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="date.php">DATE</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li  class="nav-item">
                        <a href="" class="nav-link" ><?php echo $_SESSION['nama_user'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link" ><b>Logout</b></a>
                    </li>
                </ul>
            </div>
        </nav>