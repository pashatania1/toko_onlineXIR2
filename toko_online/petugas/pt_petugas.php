<?php
include "../koneksi.php";

if(isset($_POST["submit"])) {
    $nama=$_POST['nm_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password);;

    if(empty($nama)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='t_petugas.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username petugas tidak boleh kosong');location.href='t_petugas.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password petugas tidak boleh kosong');location.href='t_petugas.php';</script>"; 
    } elseif(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "<script>alert('Password harus setidaknya 8 karakter dan harus mencakup satu huruf besar, satu angka, dan satu karakter khusus.');location.href='t_petugas.php';</script>";   
    } elseif(empty($level)){
        echo "<script>alert('level petugas tidak boleh kosong');location.href='t_petugas.php';</script>"; 
    } else {
        
        $p = md5($password);      
        $sql = "INSERT INTO `petugas` (`nama_petugas`, `username`, `password`, `level`) VALUES ('$nama', '$username', '$p', '$level')";
                
        $insert=mysqli_query($conn, $sql);

        if($insert) {
             echo "<script>alert('Sukses menambahkan petugas');location.href='tam_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='t_petugas.php';</script>";
        }
    }
}
?>