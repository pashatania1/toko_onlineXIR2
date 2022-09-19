<?php 
    include "header_petugas.php";

    $id = $_GET['id_produk'];
    $sql = "SELECT * FROM `produk` WHERE `id_produk` = $id";
    $qry_get_produk=mysqli_query($conn, $sql);

    $dt_produk=mysqli_fetch_array($qry_get_produk);
?>

<main role="main" class="container">
    <h3 class="mt-5">Ubah Produk</h3>
    <form action="pu_produk.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">

        Nama :
        <input type="text" name="nm_produk" value="<?=$dt_produk['nama_produk']?>" class="form-control">

        Deskripsi :
        <textarea name="deskripsi" cols = 147 class = "form-control"><?=$dt_produk['deskripsi']?></textarea>

        Harga :
        <input type="number" name="harga" value="<?=$dt_produk['harga']?>" class="form-control">

        Foto :
        <br>
        <img src="../images/produk/<?=$dt_produk['foto_produk']?>" alt="$dt_produk['nama_produk']?>" style="width:200px;height:200px;">
        <br>
        <input type="file" name="foto" class="form-control">
        
        <br>
        <input type="submit" name="submit" value="Ubah Produk" class="btn btn-primary">
    </form>
</main>
<?php 
    include "footer_petugas.php";
?>