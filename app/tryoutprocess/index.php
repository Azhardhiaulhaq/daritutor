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
  <link href="css/tryout.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <div class="content-container">
    <!-- NAVBAR SECTION -->
    <?php
    require_once '../template/navbardashboard.php';
    $navbar = new navbardashboard();
    ?>
    <!-- BODY SECTION -->
    <div id="info-tryout">
      <h3 id="tryout-title">Try Out Saintek 1</h3>
    </div>
    <div id="flex-container" class="d-flex bd-highlight border">
      <div id="tools" class="p-2 bd-highlight">
        <p id="counter"> 2h 20m 20s </p>
        <div class="soal-button">
          <div class="btn-group-container">
            <div id="button-soal" class="btn-group mr-2" role="group" aria-label="First group">
              <button id="1" type="button" class="btn btn-secondary">1</button>
              <button id="2" type="button" class="btn btn-secondary">2</button>
              <button id="3" type="button" class="btn btn-secondary">3</button>
              <button id="4" type="button" class="btn btn-secondary">4</button>
              <button id="5" type="button" class="btn btn-secondary">5</button>
            </div>
            <div id="button-soal" class="btn-group mr-2" role="group" aria-label="First group">
              <button id="1" type="button" class="btn btn-secondary">1</button>
              <button id="2" type="button" class="btn btn-secondary">2</button>
              <button id="3" type="button" class="btn btn-secondary">3</button>
              <button id="4" type="button" class="btn btn-secondary">4</button>
              <button id="5" type="button" class="btn btn-secondary">5</button>
            </div>
            <div id="button-soal" class="btn-group mr-2" role="group" aria-label="First group">
              <button id="1" type="button" class="btn btn-secondary">1</button>
              <button id="2" type="button" class="btn btn-secondary">2</button>
              <button id="3" type="button" class="btn btn-secondary">3</button>
              <button id="4" type="button" class="btn btn-secondary">4</button>
              <button id="5" type="button" class="btn btn-secondary">5</button>
            </div>
            <div id="button-soal" class="btn-group mr-2" role="group" aria-label="First group">
              <button id="1" type="button" class="btn btn-secondary">1</button>
              <button id="2" type="button" class="btn btn-secondary">2</button>
              <button id="3" type="button" class="btn btn-secondary">3</button>
              <button id="4" type="button" class="btn btn-secondary">4</button>
              <button id="5" type="button" class="btn btn-secondary">5</button>
            </div>
            <div id="button-soal" class="btn-group mr-2" role="group" aria-label="First group">
              <button id="1" type="button" class="btn btn-secondary">1</button>
              <button id="2" type="button" class="btn btn-secondary">2</button>
              <button id="3" type="button" class="btn btn-secondary">3</button>
              <button id="4" type="button" class="btn btn-secondary">4</button>
              <button id="5" type="button" class="btn btn-secondary">5</button>
            </div>
          </div>
        </div>
      </div>
      <div id="Soal" class="p-2 flex-grow-1 bd-highlight">
        <p id="question">Question</p>
        <p id="text-soal">1. Variabel manakah yang mendefinisikan kurva merah pada grafik di atas sebagai fungsi x? <p>
        <img src ="img/soal.png" id="gambar-soal" class="rounded mx-auto d-block" alt="">    
        <div class="Pilihan Jawaban">
              <button id="jawabanA" type="button" class="jawaban btn btn-outline-secondary">Secondary</button>
              <button id="jawabanB" type="button" class="jawaban btn btn-outline-secondary">Secondary</button>
              <button id="jawabanC" type="button" class="jawaban btn btn-outline-secondary">Secondary</button>
              <button id="jawabanD" type="button" class="jawaban btn btn-outline-secondary">Secondary</button>
              <button id="jawabanE" type="button" class="jawaban btn btn-outline-secondary">Secondary</button>
            </div>
            
      </div>
    </div>

    <!-- FOOTER SECTION -->
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