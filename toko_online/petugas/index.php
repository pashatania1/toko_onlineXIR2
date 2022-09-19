<?php 
    include "header_petugas.php";
?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Selamat datang di website Toko XIR2.</h1>
      <p></p>
      <p class="lead">Anda login sebagai <?=$_SESSION['level']?> <?=$_SESSION['nama_petugas']?></p>
      <p></p>
    </main>

<?php
    include "footer_petugas.php";
?>