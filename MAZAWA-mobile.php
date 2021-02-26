<!DOCTYPE html>
<html style="font-size: 16px;">
<?php
session_start();
if (isset($_SESSION['codeId'])) {
  $message = "Selamat Datang " . $_SESSION['name'];
  echo "<script type='text/javascript'>alert('$message');</script>";
} else {
  header("Location: system.php");
}

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Calon Kandidat KetuaHimpunan Mahasiswa Program StudiHukum Pidana Islam Fakultas Syariah">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>MAZAWA mobile</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="MAZAWA-mobile.css" media="screen">
  <link rel="stylesheet" href="all.css">
  <script type="text/javascript" src="proses.js"></script>
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.7.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">




  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "url": "index.html"
    }
  </script>
  <meta property="og:title" content="MAZAWA mobile">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#478ac9">
  <link rel="canonical" href="index.html">
  <meta property="og:url" content="index.html">
</head>

<body class="u-body u-overlap u-overlap-transparent u-stick-footer">
  <header class="u-align-left u-clearfix u-header u-header" id="sec-ba2f">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
  </header>
  <section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-section-1" id="sec-642a">
    <img src="images/Presentation1-removebg.png" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1277" data-image-height="193">
    <h2 class="u-align-center u-text u-text-1"><b style="">Calon Kandidat Ketua<br>Himpunan Mahasiswa&nbsp;</b>
      <br><b style="">Program Studi<br>Manajemen Zakan dan Wakaf&nbsp;</b>
      <br><b style="">Fakultas Syariah</b>
    </h2>
    <img src="images/Logo-iain.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2" data-image-width="400" data-image-height="432">
    <img src="images/logoKPUMFASYA.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-3" data-image-width="970" data-image-height="1600">
  </section>
  <section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-section-2" id="sec-74fa">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-border-4 u-border-grey-dark-1 u-container-style u-group u-radius-27 u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1 hvr" onclick="MAZAWAa()">
          <img src="images/MAZAWA1.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="269" data-image-height="273">
          <h2 class="u-align-center-xs u-text u-text-1"><b style="">Ihsan Sidiq Immadudin</b>
          </h2>
          <p class="u-align-left u-text u-text-2">Visi :<br>Menjadikan lembaga kemahasiswaan sebagai mitra pembangunan relasi dan ujung tombak akademisi serta menjunjung tinggi moralitas berdasarkan prinsip kekeluargaan<br>
            <br>Misi :
          </p>
          <p class="u-align-center-xl u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-3">Misi :</p>
          <ul class="u-align-left u-text u-text-4">
            <li>
              <span style="font-size: 0.625rem;">Menjadikan HMPS MAZAWA sebagai wadah dalam mewujudkan mahasiswa yang profesional dan memiliki jiwa saing yang tinggi</span>
            </li>
            <li>
              <span style="font-size: 0.625rem;">Menumbuhkan intelektual mahasiswa MAZAWA diranah filantropi islam</span>
            </li>
            <li>
              <span style="font-size: 0.625rem;">Optimalisasi kualitas kerjasama dengan instansi terkait dalam skala regional maupun nasional</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="u-border-4 u-border-grey-dark-1 u-container-style u-group u-radius-27 u-shape-round u-group-2">
        <div class="u-container-layout u-container-layout-2 hvr"  onclick="MAZAWAa()">
          <img src="images/kisspng-question-mark-person-sign-computer-icons-larry-smithampaposs-page-portal-community-5d373f020b33f4.3833359815639016980459.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2" data-image-width="512" data-image-height="512">
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-hidden-xs u-section-3" id="sec-c26d">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-custom-color-1 u-text-1">DON'T ACCESS ON LANDSCAPE MODE !</h1>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2515">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">System Generated By KHL</p>
    </div>
  </footer>
</body>

</html>