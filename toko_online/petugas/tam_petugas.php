<?php 
    include "header_petugas.php";
?>

<main role="main" class="container">
    <h3 class="mt-5">Daftar Petugas</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Pelanggan</th>
                <th>Username</th>
                <th>Level</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $qry=mysqli_query($conn,"SELECT * FROM `petugas`");
            $no=0;
            while($data=mysqli_fetch_array($qry)) {
                $no++;?>

            <tr>              
                <td><?=$no?></td>
                <td><?=$data['nama_petugas']?></td> 
                <td><?=$data['username']?></td> 
                <td><?=$data['level']?></td>
                <td><a href="u_petugas.php?id_petugas=<?=$data['id_petugas']?>" class="btn btn-success">Ubah Data</a> | <a href="up_petugas.php?id_petugas=<?=$data['id_petugas']?>" class="btn btn-warning">Ubah Password</a> | <a href="h_petugas.php?id_petugas=<?=$data['id_petugas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="t_petugas.php" class="btn btn-info btn-lg btn-block active" role="button" aria-pressed="true">Tambah Petugas</a>
</main>
<?php 
    include "footer_petugas.php";
?>