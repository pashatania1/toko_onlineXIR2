<?php 
    include "header_petugas.php";
?>
<main role="main" class="container">
    <h3 class="mt-5">Daftar Produk</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Foto Produk</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $qry=mysqli_query($conn,"SELECT * FROM `produk`");
            $no=0;
            while($data=mysqli_fetch_array($qry)) {
                $no++;
                $harga=$data['harga']; 
                $harga2=number_format($harga, 2);?>

            <tr>              
                <td><?=$no?></td>
                <td><?=$data['nama_produk']?></td> 
                <td><?=$data['deskripsi']?></td> 
                <td><?php echo("Rp. " .$harga2);?></td>
                <td><img src="../images/produk/<?=$data['foto_produk']?>" alt="$data['nama_produk']?>" style="width:200px;height:200px;"></td>
                <td><a href="u_produk.php?id_produk=<?=$data['id_produk']?>" class="btn btn-success">Ubah</a> | <a href="h_produk.php?id_produk=<?=$data['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="t_produk.php" class="btn btn-info btn-lg btn-block active" role="button" aria-pressed="true">Tambah Produk</a>
</main>
<?php 
    include "footer_petugas.php";
?>