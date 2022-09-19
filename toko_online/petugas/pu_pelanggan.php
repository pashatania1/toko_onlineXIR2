<?php
include "../koneksi.php";

if(isset($_POST["submit"])) {
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nm_pelanggan'];
    $username=$_POST['username'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];

    $foto=basename($_FILES["foto"]["name"]);
    $target_dir = "../images/pelanggan/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='t_pelanggan.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username pelanggan tidak boleh kosong');location.href='t_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat pelanggan tidak boleh kosong');location.href='t_pelanggan.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('no telepon pelanggan tidak boleh kosong');location.href='t_produk.php';</script>"; 
    } else {
        if(empty($foto)) {
                
            $query = "UPDATE `pelanggan` SET `nama`='$nama',`username`='$username',`alamat`='$alamat',`telp`='$telp' WHERE `id_pelanggan`='$id_pelanggan'";
                
            $insert=mysqli_query($conn, $query);

            if($insert) {
                echo "<script>alert('Sukses mengubah pelanggan');location.href='tam_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal mengubah pelanggan');location.href='tam_pelanggan.php';</script>";
            }
        }
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check == false) {
            echo "<script>alert('File yang dipilih bukan foto.');location.href='t_pelanggan.php';</script>";
            $uploadOk = 0;
        } else {
            $uploadOk = 1;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<script>alert('File foto sudah ada.');location.href='t_pelanggan.php';</script>";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto"]["size"] > 500000) {
            echo "<script>alert('File foto terlalu besar');location.href='t_pelanggan.php';</script>";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='t_pelanggan.php';</script>";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('File foto tidak terupload');location.href='t_pelanggan.php';</script>";  
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {

                $sql = "UPDATE `pelanggan` SET `nama`='$nama',`username`='$username',`alamat`='$alamat',`telp`='$telp',`foto`='$foto' WHERE `id_pelanggan`='$id_pelanggan'";
                
                $insert=mysqli_query($conn, $sql);

                if($insert) {
                    echo "<script>alert('Sukses mengubah pelanggan');location.href='tam_pelanggan.php';</script>";
                } else {
                    echo "<script>alert('Gagal mengubah pelanggan');location.href='t_pelanggan.php';</script>";
                }
            } else {
                echo "<script>alert('Error saat upload file foto');location.href='t_pelanggan.php';</script>";
            }
        }

    }
}
?>