<?php
  session_start();
  include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/header.php');
?>

          <!-- //////////////// INDEX.PHP META ////////////////// -->
    <!-- Open Graph data -->
    <meta property="og:title" content="ADN Contact"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://adn.thais-kevin.club/pages/contact.php"/>
    <meta property="og:description" content="Voici notre page de contact avec nos coordonnées téléphoniques et électroniques alors n'hésitez pas à nous appeler ou bien remplir notre formulaire de contact!"/>
    <!-- end Open Graph data -->

          <!-- //////////////// end INDEX.PHP META ////////////////// -->

    <title>ADN Contactez-nous!</title>

</head>
  <?php include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/nav.php');?>
  <div class="banner-box"><!-- BANNER -->
    <div class="banner banner-contact"></div>
  </div><!-- end BANNER -->
</header>

<section id="contact"><!-- //////////////////////////// CONTACT SECTION //////////////////////////////////-->

    <div class="form-error">
      <?php if(isset($_SESSION['formNotValid'])) echo $_SESSION['formNotValid'] ?>
    </div>
    <h1 class="contact-welcome-title title">Contactez-moi!</h1>
    <p class="contact-welcome-p">
      Remplissez le formumaire ci-dessous pour me contacter. Je vous répondrai dans les plus brefs délais!
    </p>

    <div class="form-box"><!-- FORM-BOX -->

      <form action="http://adn.thais-kevin.club/fram/contact.php" method="post">
        <div class="form-head">
          <h2 class="form-title title">Formulaire de contact</h2>
          <p>Un message de confirmation vous sera adressé après réception de celui-ci.</p>

        </div>

        <div class="field-form-box"><!-- FIELD-FORM-BOX -->

          <div class="form-group field-form">
            <label for="first-name">Votre prénom</label>
            <div class="errors">
              <?php if (isset($_SESSION['firstNameEmpty'])) echo $_SESSION['firstNameEmpty'] ?>
            </div>
            <input type="text" class="form-control" value="<?php if (isset($_SESSION['firstName'])) echo $_SESSION['firstName'] ?>" name="firstName" id="first-name" placeholder="Ex: Jean" required="required">
          </div>

          <div class="form-group field-form">
            <label for="last-name">Votre nom</label>
            <div class="errors">
              <?php if (isset($_SESSION['lastNameEmpty'])) echo $_SESSION['lastNameEmpty'] ?>
            </div>
            <input type="text" class="form-control" value="<?php if (isset($_SESSION['lastName'])) echo $_SESSION['lastName'] ?>" name="lastName" id="last-name" placeholder="Ex: Dupont" required="required">
          </div>

        </div><!-- end FIELD-FORM-BOX -->

        <div class="field-form-box"><!-- FIELD-FORM-BOX -->

          <div class="form-group field-form">
            <label for="mail">Votre adresse électronique</label>
            <div class="errors">
              <?php if (isset($_SESSION['mailIsNot'])) echo $_SESSION['mailIsNot'] ?>
            </div>
            <input type="email" class="form-control" value="<?php if (isset($_SESSION['mail'])) echo $_SESSION['mail'] ?>" name="email" id="mail" placeholder="Ex: nom-prenom@mail.com" required="required">
          </div>

          <div class="form-group field-form">
            <label for="telephone">Votre numéro de téléphone</label>
            <div class="errors">
              <?php if (isset($_SESSION['telIsNot'])) echo $_SESSION['telIsNot'] ?>
            </div>
            <input type="text" class="form-control" name="tel" id="telephone" value="<?php if (isset($_SESSION['tel'])) echo $_SESSION['tel'] ?>" placeholder="Ex: 0600000000" required="required">
          </div>

        </div><!-- end FIELD-FORM-BOX -->

        <div class="form-group">
          <label for="message">Votre message</label>
          <div class="errors">
            <?php if (isset($_SESSION['messageEmpty'])) echo $_SESSION['messageEmpty'] ?>
          </div>
          <textarea class="form-control" id="message" name="message" rows="3" placeholder="Ex: Je vous contacte pour solliciter vos services! ^^" required="required"><?php if (isset($_SESSION['message'])) echo $_SESSION['message'] ?></textarea>
        </div>

        <div class="form-group">
          <label >Anti-spam</label>
          <div class="errors">
            <?php if (isset($_SESSION['captchaFail'])) echo $_SESSION['captchaFail'] ?>
          </div>
          <div class="g-recaptcha" data-sitekey="6Ld0e4wUAAAAAL_sEyeitendOM1GXa5b8xZjBYZd"></div>
        </div>

        <button type="submit" name="submitForm" id="mailForm" class="btn contact-btn contact-btn-form">Envoyer</button>

      </form>


    </div><!-- end FORM-BOX -->

</section><!-- //////////////////////////// end CONTACT SECTION //////////////////////////////////-->
<?php include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/footer.php');?>
