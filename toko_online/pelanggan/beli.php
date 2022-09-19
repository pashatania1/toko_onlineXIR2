<?php 
    include "header.php";
    include "../koneksi.php";
    $id=$_GET['id_buku'];
    $sql="SELECT * FROM `produk` WHERE `id_produk`='$id'";
    $qry=mysqli_query($conn,$sql);
    $dt=mysqli_fetch_array($qry);

    $harga=$dt['harga']; 
    $harga2=number_format($harga, 2);
?>
<main role="main" class="container">
<h2 class="mt-5">Pembelian Produk</h2>

<div class="row">
    <div class="col-md-4">
        <img src="../images/produk/<?=$dt['foto_produk']?>" class="card-img-top">
    </div>

    <div class="col-md-8">
        <form action="masuk.php?id_produk=<?=$dt['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Produk</td>
                        <td><?=$dt['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?=$dt['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><?php echo("Rp. " .$harga2);?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td>
                        <td><input type="number" name="jumlah" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Beli"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
</main>
<?php 
    include "footer.php";
?>