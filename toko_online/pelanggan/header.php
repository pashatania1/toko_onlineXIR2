<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login_petugas.php');
    }
    include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pelanggan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../custom.css" rel="stylesheet">
    <style>
    ul {
      display: block;
      list-style-type: none;
    }
    </style>
  </head>

<body>

  <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Toko XIR2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
          
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="histori.php">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
            </li>

          </ul>
        </div>
    </nav>
  </header>