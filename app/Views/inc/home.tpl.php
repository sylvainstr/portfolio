
<div class="wrapper">  
  <section class="intro" id="introduction">
    <div class="introduction">
      <p class="intro-p">Hello, je suis</p>
      <h1>Sylvain Sainte Romane</h1>
        <h2>Développeur Web</h2>
        <p class="intro-txt">
          Fraîchement sorti d'une reconversion professionnelle, <br>étant passionné d'informatique,
          <br>j'ai soif d'apprendre et j'aime résoudre des problèmes.
        </p>    
    </div>  

    <div class="intro-img intro-hide">
      <img src="<?= $absoluteUrl ?>assets/images/intro.jpg" alt="image d'une personne sur un ordinateur">
    </div>
  </section>

<?php
require __DIR__ . '/skills.tpl.php';
require __DIR__ . '/experience.tpl.php';
require __DIR__ . '/formations.tpl.php';
require __DIR__ . '/project.tpl.php';
require __DIR__ . '/presentation.tpl.php';
require __DIR__ . '/contact.tpl.php';

?>