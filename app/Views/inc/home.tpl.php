  <section class="intro" id="introduction" data-name="introduction">
    <div class="introduction">
      <p class="intro-p">Hello, je suis</p>
      <h1>Sylvain Sainte Romane</h1>
      <h2>Développeur Web</h2>
      <p class="intro-txt">
        Depuis 2021,
        <br>je donne vie à vos idées en réalisant des projets sur mesure.
        <br>Des prestations adaptées à vos besoins.
      </p>
    </div>

    <div class="intro-img intro-hide">
      <img src="<?= $absoluteUrl ?>assets/images/intro.jpg" alt="image d'une personne sur un ordinateur">
    </div>
  </section>

  <?php
  require __DIR__ . '/job.tpl.php';
  require __DIR__ . '/project.tpl.php';
  require __DIR__ . '/contact.tpl.php';
  require __DIR__ . '/presentation.tpl.php';
  ?>