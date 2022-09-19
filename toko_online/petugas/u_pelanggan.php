<?php 
    include "header_petugas.php";

    $id = $_GET['id_pelanggan'];
    $sql = "SELECT * FROM `pelanggan` WHERE `id_pelanggan` = $id";
    $qry_get_pelanggan=mysqli_query($conn, $sql);

    $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
?>

<main role="main" class="container">
    <h3 class="mt-5">Ubah Pelanggan</h3>
    <form action="pu_pelanggan.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pelanggan" value="<?=$dt_pelanggan['id_pelanggan']?>">

        Nama :
        <input type="text" name="nm_pelanggan" value="<?=$dt_pelanggan['nama']?>" class="form-control">

        Username :
        <input type="text" name="username" value="<?=$dt_pelanggan['username']?>" class="form-control">
        
        Alamat :
        <textarea name="alamat" cols = 147 class = "form-control"><?=$dt_pelanggan['alamat']?></textarea>

        Telepon :
        <input type="text" name="telp" value="<?=$dt_pelanggan['telp']?>" class="form-control">

        Foto :
        <br>
        <img src="../images/pelanggan/<?=$dt_pelanggan['foto']?>" alt="$dt_pelanggan['nama']?>" style="width:200px;height:200px;">
        <br>
        <input type="file" name="foto" class="form-control">
        <input type="hidden" name="foto1" value="<?=$dt_pelanggan['foto']?>">

        <br>
        <input type="submit" name="submit" value="Ubah Pelanggan" class="btn btn-primary">
    </form>
</main>
<?php 
    include "footer_petugas.php";
?>