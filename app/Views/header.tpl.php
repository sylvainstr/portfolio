<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $absoluteUrl ?>assets/css/style.css?20220624">


  <!-- Font style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;300;400;700;900&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap -->

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $absoluteUrl ?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $absoluteUrl ?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $absoluteUrl ?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $absoluteUrl ?>/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo $absoluteUrl ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

  <!-- JS -->
  <script src="<?= $absoluteUrl ?>assets/js/app.js" defer='true'></script>
  <script src="<?= $absoluteUrl ?>assets/js/active-scroll.js" defer='true'></script>
  <script src="<?= $absoluteUrl ?>assets/js/animation.js" defer='true'></script>
  <script src="<?= $absoluteUrl ?>assets/js/skill-card.js" defer='true'></script>
  <script src="<?= $absoluteUrl ?>assets/js/burger-menu.js" defer='true'></script>
  <script src="<?= $absoluteUrl ?>assets/js/nav-close.js" defer='true'></script>

  <title>Portfolio</title>
</head>

<body>
  <header>
    <div class="wrapper">
      <nav id="scroll-nav">

        <div class="nav-mob">

          <button class="burger">
            <span class="bar"></span>
          </button>

          <div class="contact-nav contact-mob" id=" contact-button">
            <a class="nav-linked" aria-current="page" href="#contact">contact</a>
          </div>
        </div>

        <ul class="main-nav">
          <li class="nav-item">
            <a class="nav-linked active" aria-current="page" href="<?= $absoluteUrl ?>#introduction">accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="<?= $absoluteUrl ?>#job">prestations</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="<?= $absoluteUrl ?>#projects">réalisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="<?= $absoluteUrl ?>#presentation">à propos</a>
          </li>
          <a class="nav-linked" aria-current="page" href="<?= $absoluteUrl ?>#contact">
            <li class="nav-item hide-contact" id="contact-button">contact</li>
          </a>
        </ul>

      </nav>
    </div>
  </header>
  
  <div class="wrapper">