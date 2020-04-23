<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/train.ico">
    <title>Pemesanan Tiket Kereta Online</title>
    <style media="screen">
      .pesan-nama {
        display: none;
        color: black;
        margin: 10px;
      }
      body {
          background-image: url('img/stat.jpg');
          background-repeat: no-repeat;
          background-size: cover;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" height="700" width="500" class="d-block w-100" alt="satu">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" height="700" width="500" class="d-block w-100" alt="dua">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" height="700" width="500" class="d-block w-100" alt="tiga">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container pt-3">
      <div class="card text-white min-mt">
        <!--  -->
        <div class="card-header bg-dark">
          <h5>Pemesanan Tiket Kereta</h5>
        </div>
        <!--  -->
        <div class="card-body text-dark" style="background-image: url('img/stat.jpg')">
          <form action="" method="POST" class="needs-validation" novalidate>
            <div class="form-col">
              <div class="form-group">
                <label class="text-light">Dari</label>
                <select class="form-control" name="dari_mana">
                  <option selected value="" disabled>Kota / Stasiun</option>
                  <option value="jakarta">Jakarta</option>
                  <option value="bandung">Bandung</option>
                  <option value="yogyakarta">Yogyakarta</option>
                  <option value="surabaya">Surabaya</option>
                </select>
              </div>
              <div class="form-group">
                <label class="text-light">Pilih Tujuan</label>
                <select class="form-control" name="ke_mana">
                  <option selected value="" disabled>Mau Kemana ?</option>
                  <option value="jakarta">Jakarta</option>
                  <option value="bandung">Bandung</option>
                  <option value="yogyakarta">Yogyakarta</option>
                  <option value="surabaya">Surabaya</option>
                </select>
              </div>
              <div class="form-group">
                <label class="text-light">Jumlah Tiket</label>
                <input type="text" name="jml_tiket" class="form-control" id="jml_tiket" placeholder="Minimal 1" required>
                <div class="invalid-feedback">Minimal 1 tiket !</div>
              </div>
            </div>
            <button type="submit" class="btn-custom float-right col-2" name="submit"><i class="fas fa-search"></i>Cari</button>
          </form>
        </div>
      </div>
    </div>
    <div class="container pt-3">
      <?php
        include "proses.php";
      ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
