<?php 
    include "header_petugas.php";
?>
<main role="main" class="container">
<h2 class="mt-5">Histori Transaksi</h2>

<table class="table table-hover table-striped">

    <thead>
        <th>NO</th>
        <th>Tanggal Transaksi</th>
        <th>Nama Pelanggan</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Status</th>
    </thead>

    <tbody>
        <?php 
        $id=$_SESSION['id_petugas'];
        $sql="SELECT * FROM `transaksi` WHERE `id_petugas`='$id' ORDER BY id_transaksi DESC";
        $qry_histori=mysqli_query($conn,$sql);
        $no=0;

        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan produk yang dibeli

            $produk_dibeli="<ol>";
            $jumlah="<ul>";
            $total=0;
            $id_transaksi=$dt_histori['id_transaksi'];
            $produk="SELECT * FROM detail_transaksi INNER JOIN produk ON produk.id_produk=detail_transaksi.id_produk WHERE detail_transaksi.id_transaksi = '$id_transaksi'";
            $qry_produk=mysqli_query($conn,$produk);

            while($dt_produk=mysqli_fetch_array($qry_produk)){
                $produk_dibeli.="<li>".$dt_produk['nama_produk']."</li>";
                $jumlah.="<li>".$dt_produk['qty']."</li>";
                $total += $dt_produk['subtotal'];
            }

            $produk_dibeli.="</ol>";
            $jumlah.="</ol>";
            $total2 = number_format($total, 2);

            $nama="SELECT * FROM transaksi INNER JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan WHERE transaksi.id_transaksi = '$id_transaksi'";
            $qry_nama=mysqli_query($conn,$nama);
            $dt_nama=mysqli_fetch_array($qry_nama);
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td><?=$dt_nama['nama']?></td>
                <td><?=$produk_dibeli?></td>
                <td><?=$jumlah?></td>
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
    include "footer_petugas.php";
?>