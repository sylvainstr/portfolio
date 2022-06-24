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

        <a class="contact-infos-item" href="https://www.google.fr/maps/place/31620+Cepet/@43.7461161,1.4190849,14z/data=!4m5!3m4!1s0x12aea725068b67b1:0xc17de600a6905c0b!8m2!3d43.750797!4d1.4322" target="_blank" rel="noreferrer">
          <div class="contact-img">
            <img src="<?= $absoluteUrl ?>assets/images/adress.png" alt="image d'une adresse">
          </div>
          <div class="contact-value">
            31620 Cépet
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
        <form action="/#contact" method="post">
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
      </div>

    </div>

</section>
