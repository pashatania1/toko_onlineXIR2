<?php 
    include "header.php";
    include "../koneksi.php";
?>
<main role="main" class="container">
<h2 class="mt-5">Daftar Produk</h2>

<div class="row">
    <?php 
    $sql="SELECT * FROM `produk`";
    $qry=mysqli_query($conn,$sql);

    while($dt=mysqli_fetch_array($qry)){?>
        <div class="col-md-3">
            <div class="card" >
              <img src="../images/produk/<?=$dt['foto_produk']?>" alt="$dt['nama_produk']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt['deskripsi'], 0,20)?></p>
                <a href="beli.php?id_buku=<?=$dt['id_produk']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</main>
<?php 
    include "footer.php";
?>