<?php 
    include "header_petugas.php";
?>

<main role="main" class="container">
    <h3 class="mt-5">Tambah Pelanggan</h3>
    <form action="pt_pelanggan.php" method="post" enctype="multipart/form-data">
        Nama :
        <input type="text" name="nm_pelanggan" value="" class="form-control">

        Username :
        <input type="text" name="username" value="" class="form-control">

        Password :
        <input type="password" name="password" value="" class="form-control">
        
        Alamat :
        <textarea name="alamat" cols = 147 class = "form-control"></textarea>

        Telepon :
        <input type="text" name="telp" value="" class="form-control">

        Foto :
        <input type="file" name="foto" class="form-control">

        <br>
        <input type="submit" name="submit" value="Tambah Pelanggan" class="btn btn-primary">
    </form>
</main>
<?php 
    include "footer_petugas.php";
?>