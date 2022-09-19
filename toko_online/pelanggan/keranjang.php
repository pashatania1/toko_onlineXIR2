<?php 
    include "header.php";
?>
<main role="main" class="container">
<h2 class="mt-5">Daftar Produk di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
            $harga=$val_produk['subtotal'];
            $harga2=number_format($harga, 2);
        ?>
            <tr>
                <td><?=($key_produk+1)?></td>
                <td><?=$val_produk['nama_produk']?></td>
                <td><?=$val_produk['qty']?></td>
                <td><?php echo("Rp. " .$harga2);?></td>
                <td><a href="hapus.php?id=<?=$key_produk?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<a href="checkout.php" class="btn btn-primary">Checkout</a>
</main>
<?php 
    include "footer.php";
?>