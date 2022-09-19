<?php 
    include "header.php";
?>
<main role="main" class="container">
<h2 class="mt-5">Histori Pembelian Produk</h2>

<table class="table table-hover table-striped">

    <thead>
        <th>NO</th>
        <th>Tanggal Transaksi</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Subtotal</th>
        <th>Total</th>
        <th>Status</th>
    </thead>

    <tbody>
        <?php 

        $qry_histori=mysqli_query($conn,"select * from transaksi where id_pelanggan='".$_SESSION['id_pelanggan']."' order by id_transaksi desc");
        $no=0;

        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan produk yang dibeli

            $produk_dibeli="<ol>";
            $jumlah="<ul>";
            $subtotal="<ul>";
            $total=0;
            $qry_produk=mysqli_query($conn,"select * from  detail_transaksi join produk on produk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");

            while($dt_produk=mysqli_fetch_array($qry_produk)){
                $produk_dibeli.="<li>".$dt_produk['nama_produk']."</li>";
                $jumlah.="<li>".$dt_produk['qty']."</li>";
                $sub=number_format($dt_produk['subtotal'], 2);
                $subtotal.="<li>Rp. ".$sub."</li>";
                $total += $dt_produk['subtotal'];
            }

            $produk_dibeli.="</ol>";
            $jumlah.="</ol>";
            $subtotal.="<ul>";
            $total2 = number_format($total, 2);
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td><?=$produk_dibeli?></td>
                <td><?=$jumlah?></td>
                <td><?=$subtotal?></td>
                <td><?php echo("Rp. ".$total2); ?></td>
                <td><?php echo("Diproses"); ?></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>
</main>
<?php 
    include "footer.php";
?>