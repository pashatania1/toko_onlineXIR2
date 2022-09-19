<?php 
    include "header_petugas.php";

    $id = $_GET['id_petugas'];
    $sql = "SELECT * FROM `petugas` WHERE `id_petugas` = $id";
    $qry_get_petugas=mysqli_query($conn, $sql);

    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    $level = $dt_petugas['level'];
?>

<main role="main" class="container">
    <h3 class="mt-5">Ubah Petugas</h3>
    <form action="pu_petugas.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">

        Nama :
        <input type="text" name="nm_petugas" value="<?=$dt_petugas['nama_petugas']?>" class="form-control">

        Username :
        <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control">

        Level :
        <select name="level" class="form-control">
            <option disabled selected></option>
            <option value="Admin" <?php if($level=="Admin") echo 'selected="selected"'; ?>>Admin</option>
            <option value="Manajer" <?php if($level=="Manajer") echo 'selected="selected"'; ?>>Manajer</option>
            <option value="Petugas" <?php if($level=="Petugas") echo 'selected="selected"'; ?>>Petugas</option>
        </select> 

        <br>
        <input type="submit" name="submit" value="Ubah Petugas" class="btn btn-primary">
    </form>
</main>
<?php 
    include "footer_petugas.php";
?>