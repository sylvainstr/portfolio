<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $absoluteUrl ?>assets/css/style.css">

  
   <!-- Font style -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;300;400;700;900&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

  <title>Portfolio</title>
</head>
<body>
  <header>
    <nav id="scroll-nav">
      <div class="main-nav">
        <ul>
          <li class="nav-item">
            <a class="nav-linked active" aria-current="page" href="<?php $absoluteUrl ?>">accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="#skills">compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="#experience">expérience</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="#formations">formations</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="#projects">réalisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-linked" aria-current="page" href="#presentation">à propos</a>
          </li>
          <li class="nav-item" id="contact-button">
            <a class="nav-linked" aria-current="page" href="#contact">contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>