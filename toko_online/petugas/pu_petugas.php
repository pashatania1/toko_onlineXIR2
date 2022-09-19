<?php
include "../koneksi.php";

if(isset($_POST["submit"])) {
    $id_petugas=$_POST['id_petugas'];
    $nama=$_POST['nm_petugas'];
    $username=$_POST['username'];
    $level=$_POST['level'];

    if(empty($nama)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='t_petugas.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username petugas tidak boleh kosong');location.href='t_petugas.php';</script>";
    } elseif(empty($level)){
        echo "<script>alert('level petugas tidak boleh kosong');location.href='t_petugas.php';</script>"; 
    } else {
             
        $sql = "UPDATE `petugas` SET `nama_petugas`='$nama',`username`='$username',`level`='$level' WHERE `id_petugas`= '$id_petugas'";
                
        $insert=mysqli_query($conn, $sql);

        if($insert) {
             echo "<script>alert('Sukses mengubah petugas');location.href='tam_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah petugas');location.href='t_petugas.php';</script>";
        }
    }
}
?>