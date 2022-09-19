<?php 
    include "header_petugas.php";
?>

<main role="main" class="container">
    <h3 class="mt-5">Tambah Petugas</h3>
    <form action="pt_petugas.php" method="post" enctype="multipart/form-data">
        Nama :
        <input type="text" name="nm_petugas" value="" class="form-control">

        Username :
        <input type="text" name="username" value="" class="form-control">

        Password :
        <input type="password" name="password" value="" class="form-control">

        Level :
        <select name="level" class="form-control">
            <option value=""></option>
            <option value="Admin">Admin</option>
            <option value="Manajer">Manajer</option>
            <option value="Petugas">Petugas</option>
        </select> 

        <br>
        <input type="submit" name="submit" value="Tambah Petugas" class="btn btn-primary">
    </form>
</main>
<?php 
    include "footer_petugas.php";
?>