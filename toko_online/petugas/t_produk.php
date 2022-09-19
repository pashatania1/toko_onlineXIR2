<?php 
    include "header_petugas.php";
?>
<main role="main" class="container">
    <h3 class="mt-5">Tambah Produk</h3>
    <form action="pt_produk.php" method="post" enctype="multipart/form-data">
        Nama :
        <input type="text" name="nm_produk" value="" class="form-control">

        Deskripsi :
        <textarea name="deskripsi" cols = 147 class = "form-control"></textarea>

        Harga :
        <input type="number" name="harga" value="" class="form-control">

        Foto :
        <input type="file" name="foto" class="form-control">

        <br>
        <input type="submit" name="submit" value="Tambah Produk" class="btn btn-primary">
    </form>
</main>
<?php 
    include "footer_petugas.php";
?>