<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DariTutor </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/wolfhead-10.png" rel="icon">
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/nonnavbarandfooter.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <div class="content-container">
    <?php
    require_once '../template/navbardashboard.php';
    $navbar = new navbardashboard();
    ?>

    <div id="flex-container" class="d-flex bd-highlight border">
      <div id="user-info" class="p-2 bd-highlight">
        <img id="user-photo" class=".img-fluid rounded-circle" src="img/cat.png" alt="kucing">
        <h3 id="username">AzharDhiaulhaq</h3>
        <h4 id="tryout-result">Psichotest Result</h4>
        <button id="tryout-button" type="button" class="btn btn-primary">Start Psichotest</button>
      </div>

      <div id="tryout-info" class="p-2 flex-grow-1 bd-highlight">
        <div class="saintek-container">
          <p id="saintek-title">Tryout Saintek : </p>
          <div class="tryout-card-flex d-flex bd-highlight">
            <div id="1" class="card" style="width: 14rem;">
              <img id="card-img-top" src="img/math-banner.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Try Out Saintek 1</h5>
                <p class="card-text">Jumlah Soal : 120 <br>Waktu : 120 menit</p>
                <a href="#" class="btn btn-primary">Start TryOut</a>
              </div>
            </div>
            <div id="2" class="card" style="width: 14rem;">
              <img id="card-img-top" src="img/math-banner.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Try Out Saintek 2</h5>
                <p class="card-text">Jumlah Soal : 120 <br>Waktu : 120 menit</p>
                <a href="#" class="btn btn-primary">Start TryOut</a>
              </div>
            </div>
            <div id="3" class="card" style="width: 14rem;">
              <img id="card-img-top" src="img/math-banner.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Try Out Saintek 3</h5>
                <p class="card-text">Jumlah Soal : 120 <br>Waktu : 120 menit</p>
                <a href="#" class="btn btn-primary">Start TryOut</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Untuk SOSHUM -->
        <div class="soshum-container">
          <p id="saintek-title">Tryout Soshum : </p>
          <div class="tryout-card-flex d-flex bd-highlight">
            <div id="1" class="card" style="width: 14rem;">
              <img id="card-img-top" src="img/math-banner.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Try Out Soshum 1</h5>
                <p class="card-text">Jumlah Soal : 120 <br>Waktu : 120 menit</p>
                <a href="#" class="btn btn-primary">Start TryOut</a>
              </div>
            </div>
            <div id="2" class="card" style="width: 14rem;">
              <img id="card-img-top" src="img/math-banner.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Try Out Soshum 2</h5>
                <p class="card-text">Jumlah Soal : 120 <br>Waktu : 120 menit</p>
                <a href="#" class="btn btn-primary">Start TryOut</a>
              </div>
            </div>
            <div id="3" class="card" style="width: 14rem;">
              <img id="card-img-top" src="img/math-banner.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Try Out Soshum 3</h5>
                <p class="card-text">Jumlah Soal : 120 <br>Waktu : 120 menit</p>
                <a href="#" class="btn btn-primary">Start TryOut</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php
  require_once '../template/aboutus.php';
  $aboutus = new aboutus();
  ?>
  </footer>
  </div>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>