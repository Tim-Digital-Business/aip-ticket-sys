<?php
include_once('tickets/modal-create-ticket.php');
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Special import coz smothscrolling is picky -->
  <title>AIP Plus</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
  </noscript>
  <link rel="preload" as="style" href="assets/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
</head>

<body>

  <section data-bs-version="5.1" class="menu menu1 cid-sRc7rtfrMl" once="menu" id="menu1-k">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
      <div class="container">
        <div class="navbar-brand">

          <span class="animate__animated animate__slideInDown navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="https://www.aip.swiss">AIP Plus Pratteln</a></span>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
            <li class="nav-item"><a class="animate__animated animate__slideInDown nav-link link text-white display-4" href="../auth/login.php">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <section data-bs-version="5.1" class="header13 cid-sRc7vFQ6FN mbr-fullscreen mbr-parallax-background" id="header13-l">
    <div class="align-center container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <h1 style='text-shadow: 0 0 3px #000000 ; font-family:sans-serif' class="animate__animated animate__slideInLeft text-white mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Digital Business</strong></h1>
          <button class="button-28 animate__animated animate__fadeInBottomLeft" data-toggle="modal" data-target="#myModal" type="button">Ticket erfassen</button>
        </div>
      </div>
    </div>


    <section data-bs-version="5.1" class="animate__animated animate__slideInRight content17 cid-sRc7CKH74t" id="content17-n">
      <div class="container" style='width:780px'>

        <div class="row justify-content-center">
          <div class="col-12 col-md-10">
            <div class="section-head align-center mb-4">
              <h3 style='text-shadow: 0 0 3px #000000;padding-right:300px' class="text-white mbr-section-title mb-0 mbr-fonts-style display-2"><strong>FAQ</strong>
              </h3>
            </div>

            <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
              <div class="card mb-3">
                <div class="card-header" role="tab" id="headingOne">
                  <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_2" aria-expanded="true" aria-controls="collapse1">
                    <h6 style='text-shadow: 0 0 3px #000000' class="text-white panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Wie wird ein Ticket erstellt?</strong>
                    </h6>
                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                  </a>
                </div>
                <div id="collapse1_2" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p style='text-shadow: 0 0 3px #000000;background-color: #00000075;border-radius: 10px;padding-left: 10px;' class="text-white mbr-fonts-style panel-text display-7">Klick auf den Knopf "Ticket erfassen" und gib die erforderlichen Daten ein. Danach klick auf "Erstellen" und schon ist es erstellt.</p>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header" role="tab" id="headingTwo">
                  <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_2" aria-expanded="false" aria-controls="collapse2">
                    <h6 style='text-shadow: 0 0 3px #000000' class="text-white panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Wie lange dauert es bis ich eine Antwort bekomme?</strong>
                    </h6>
                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                  </a>

                </div>
                <div id="collapse2_2" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <p style='text-shadow: 0 0 3px #000000;background-color: #00000075;border-radius: 10px;padding-left: 10px;' class="text-white mbr-fonts-style panel-text display-7">Wir werden dich so schnell wie möglich Kontaktieren und eine Lösung für dein Problem finden. Gerne kannst du auch in unsere Abteilung vorbeischauen.</p>
                  </div>
                </div>
              </div>
              <!-- <div class="card mb-3">
                <div class="card-header" role="tab" id="headingThree">
                  <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_2" aria-expanded="false" aria-controls="collapse3">
                    <h6 style='text-shadow: 0 0 3px #000000' class="text-white panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Can I create sites for commerical projects?</strong>
                    </h6>
                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                  </a>
                </div>
                <div id="collapse3_2" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p style='text-shadow: 0 0 3px #000000' class="text-white mbr-fonts-style panel-text display-7">Yes, Mobirise is free for both non-profit and commercial sites.</p>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header" role="tab" id="headingThree">
                  <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_2" aria-expanded="false" aria-controls="collapse4">
                    <h6 style='text-shadow: 0 0 3px #000000' class="text-white panel-title-edit mbr-fonts-style mb-0 display-7"><strong>What is Code Editor?</strong>
                    </h6>
                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                  </a>
                </div>
                <div id="collapse4_2" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p style='text-shadow: 0 0 3px #000000' class="text-white mbr-fonts-style panel-text display-7">
                      This extension allows editing the code of block in the app. Also, it's possible to add code to the head and body parts of pages.</p>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header" role="tab" id="headingThree">
                  <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_2" aria-expanded="false" aria-controls="collapse5">
                    <h6 style='text-shadow: 0 0 3px #000000' class="text-white panel-title-edit mbr-fonts-style mb-0 display-7"><strong>What is Mobirise Kit?</strong></h6>
                    <span class="mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                  </a>
                </div>
                <div id="collapse5_2" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p style='text-shadow: 0 0 3px #000000' class="text-white mbr-fonts-style panel-text display-7">
                      Mobirise Kit is a service that provides the access to all current and new themes/extensions developed by Mobirise. New themes/extensions are released every month and will be available in your account during your plan period, without any additional charge.</p>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header" role="tab" id="headingThree">
                  <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse6_2" aria-expanded="false" aria-controls="collapse6">
                    <h6 style='text-shadow: 0 0 3px #000000' class="text-white panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Can I create sites for commerical projects?</strong></h6>
                    <span class="mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                  </a>
                </div>
                <div id="collapse6_2" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p style='text-shadow: 0 0 3px #000000' class="text-white mbr-fonts-style panel-text display-7">
                      Yes, Mobirise is free for both non-profit and commercial sites.</p>
                  </div> -->
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
  </section>
  <footer class="animate__animated animate__slideInUp text-center fixed-bottom">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0);">
      © 2022 Copyright -
      <a class="text-white" href="https://www.jsw.swiss">Jugendsozialwerk Pratteln™ </a>
    </div>
    <!-- Copyright -->
  </footer>
  <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
    <a href="https://mobirise.site/" style="visibility: hidden;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">
      <a href="" style="color:#aaa;"></a>
    </p>


    <!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="assets/parallax/jarallax.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
    <script src="assets/theme/js/script.js"></script>
  </section>
</body>

</html>