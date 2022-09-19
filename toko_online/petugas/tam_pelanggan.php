<?php 
    include "header_petugas.php";
?>

<main role="main" class="container">
    <h3 class="mt-5">Daftar Pelanggan</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Pelanggan</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Foto Pelanggan</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $qry=mysqli_query($conn,"SELECT * FROM `pelanggan`");
            $no=0;
            while($data=mysqli_fetch_array($qry)) {
                $no++;?>

            <tr>              
                <td><?=$no?></td>
                <td><?=$data['nama']?></td> 
                <td><?=$data['username']?></td>
                <td><?=$data['alamat']?></td> 
                <td><?=$data['telp']?></td>
                <td><img src="../images/pelanggan/<?=$data['foto']?>" alt="$data['nama']?>" style="width:200px;height:200px;"></td>
                <td><a href="u_pelanggan.php?id_pelanggan=<?=$data['id_pelanggan']?>" class="btn btn-success">Ubah Data</a> | <a href="up_pelanggan.php?id_pelanggan=<?=$data['id_pelanggan']?>" class="btn btn-warning">Ubah Password</a> | <a href="h_pelanggan.php?id_pelanggan=<?=$data['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="t_pelanggan.php" class="btn btn-info btn-lg btn-block active" role="button" aria-pressed="true">Tambah Pelanggan</a>
</main>
<?php 
    include "footer_petugas.php";
?>