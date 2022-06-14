<section class="contact" id="contact">
  <h1 class="contact-title">Envie de me contacter ?</h1>
  <div class="line-md"></div>

    <div class="contact-group">
      <div class="contact-infos">

        <a class="contact-infos-item" href="tel:06 19 99 51 56">
          <div class="contact-img">
            <img src="<?= $absoluteUrl ?>assets/images/phone.png" alt="image d'un téléphone">
          </div>
          <div class="contact-value">
            <div>06 19 99 51 56</div>
          </div>
        </a>            

        <a class="contact-infos-item" href="mailto: sylvain.sainteromane@gmail.com">
          <div class="contact-img">
            <img src="<?= $absoluteUrl ?>assets/images/email.png" alt="image d'un email">
          </div>
          <div class="contact-value">
            sylvain.sainteromane@gmail.com
          </div>
        </a>

        <a class="contact-infos-item" href="https://www.google.fr/maps/place/65+Mesturel,+31620+Cepet/@43.7399015,1.4267281,17z/data=!3m1!4b1!4m5!3m4!1s0x12aea6deb4c29545:0x7daac8a146c8ef45!8m2!3d43.7399015!4d1.4289168" target="_blank" rel="noreferrer">
          <div class="contact-img">
            <img src="<?= $absoluteUrl ?>assets/images/adress.png" alt="image d'une adresse">
          </div>
          <div class="contact-value">
            65 impasse de Mesturel,<br>31620 Cépet
          </div>
        </a>

        <a class="contact-infos-item" href="https://www.linkedin.com/in/sylvain-sainte-romane/" target="_blank">
          <div class="contact-img">
            <img src="<?= $absoluteUrl ?>assets/images/linkedin.png" alt="image de linkedin">
          </div>
          <div class="contact-value">
            <div>https://www.linkedin.com/in/sylvain-sainte-romane/</div>
          </div>
        </a>

        <a class="contact-infos-item" href="https://github.com/sylvainstr" target="_blank">
          <div class="contact-img">
            <img src="<?= $absoluteUrl ?>assets/images/github.png" alt="image de github">
          </div>
          <div class="contact-value">
            <div>https://github.com/sylvainstr</div>
          </div>
        </a>

        <a class="contact-infos-item" href="<?= $absoluteUrl ?>assets/files/cv.pdf" target="_blank">
          <div class="contact-img">
            <img src="<?= $absoluteUrl ?>assets/images/cv.png" alt="image d'un cv">
          </div>
          <div class="contact-value">
            <div>Télécharger mon CV</div>
          </div>
        </a>

      </div>

      <div class="contact-form">
        <form action="mail.php" method="post">
          <div class="contact-group">
            <div class="contact-item-name">
              <label for="name">Nom et prénom</label>
              <input type="text" name="name" id="name" required="required" placeholder="Exemple: Marc Dupont">  
            </div>
            <div class="contact-item-company">
              <label for="company">Nom de l'entreprise</label>
              <input type="text" name="company" id="company" placeholder="Exemple : Google Company">  
            </div>
          </div>

          <div class="contact-item-mess">
            <label for="message">Votre message</label>
            <textarea type="text" name="message" id="message" required="required" placeholder="Tapez votre message..."></textarea>            
          </div>

          <div class="contact-button">
            <button type="submit" name="submit">envoyer</button>
          </div>
        </form> 
        
        <?php 
        
        if(isset($_POST['submit']))
          {
            if(isset($_POST['name']) && isset($_POST['message']))
            {
              if(!empty($_POST['name']) && !empty($_POST['message']))
              {
                $name = $_POST['name'];
                $message = $_POST['message'];

                  echo "Bonjour <b> $name </b>, votre message a bien été envoyé";
              }
            }
          }

        ?>

      </div>

    </div>

</section>
