<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"/>
	  <script type="text/javascript" src="js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <title>INSERT DATA</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('data/insertData')?>">Input Data</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
      margin-top: 58px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">WELCOME TO HARSYA FEBRYDIAS PAGE</h1>
          <h4 class="mb-3">WEB UNTUK INPUT DATA MAHASISWA CHUAKZZZ</h4>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
<div class="container">		
<h1>INI HALAMAN UNTUK INSERT DATA CHUAKZ</h1>

<p>MASUKKAN DATA DENGAN BENAR</p>
    
    <form action="<?php echo base_url('Data/saveData')?>" method="post" form class="pure-form pure-form-aligned">
    
    <fieldset>
        <div class="pure-control-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" placeholder="" />
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>
        <div class="pure-control-group">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" placeholder="" />
        </div>
        <div class="pure-control-group">
                <label for="fakultas">FAKULTAS</label>
                <select id="multi-state" name="fakultas"class="pure-input-u-1-4">
                    <option>TI</option>
                    <option>TE</option>
                </select>
            </div>
        <div class="pure-control-group">
            <label for="alamat">ALAMAT</label>
            <input type="text" name ="alamat" textarea class="pure-input-1-4" placeholder=""></textarea>
        </div> 
        <div class="pure-control-group">
        <button type="submit" class="btn btn-success btn-rounded">SUBMIT</button>
        <button type="reset" class="btn btn-danger btn-rounded">RESET</button>    
        </div>
    </fieldset>        
    </form>
    
</div>
<footer class="bg-primary text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">About Writter</h5>

        <p>
          Saya Harsya Febrydias NIM 12001007
          Mahasiswa Universitas Cendekia Abditama
          Website ini sebagai tugas Pemrograman Web
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">About This Page</h5>

        <p>
          Web ini berisi tabel data mahasiswa
          Form input data mahasiswa
          Form Edit data mahasiswa
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <div class="text-white">
    © 2023 Copyright:
    <a class="text-dark" href="081513087967">Whatsapp Contact</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>