<?php
  session_start();
  include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/header.php');
?>

          <!-- //////////////// INDEX.PHP META ////////////////// -->

    <!-- Open Graph data -->
    <meta property="og:title" content="ADN Artisan Développeur du Net"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://adn.thais-kevin.club/index.php"/>
    <meta property="og:description" content="ADN => L'Artisan Développeur du Net crée pour vous un site web personnalisé et adapté à vos besoins professionnels ou personnels! Sites vitrines, blogs, applications Web, etc... N'attendez plus et contactes-nous pour un devis!"/>
    <!-- end Open Graph data -->
          <!-- //////////////// end INDEX.PHP META ////////////////// -->

    <title>ADN Artisan Développeur du Net</title>

</head>

<?php include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/nav.php');?>

<div class="banner-box"><!-- BANNER -->
  <div class="banner banner-home"></div>
</div><!-- end BANNER -->
</header>
      <!-- /////////////////////////// HOME SECTION ////////////////////////////// -->
      <section id="home">

        <div class="mail-valid-text"><!-- Success mail message -->
          <p><?php if (isset($_SESSION['mailValid'])){echo $_SESSION['mailValid'];session_destroy();}?></p>
        </div><!-- end Success mail message -->

        <div id="title-box"><!-- TITLE -->
          <!-- LOGO -->
          <div id="logo-welcome">
            <img src="http://adn.thais-kevin.club/images/logo-welcome.png" alt="logo ADN">
          </div><!-- end LOGO -->
           <h1 id="accueil-title" class="title">L'Artisan Développeur du Net</h1>
           <p class="welcome">Un site internet est devenu aujourd'hui indispensable à tout professionnel qui souhaite
             que son entreprise ait une croissance pérenne. Avec <span class="adn">ADN</span>, développeur web freelance sur le grand Rodez (12), tout est à votre portée!</p>
        </div><!-- end TITLE -->

        <div class="skills-box row"><!-- SKILLS-BOX -->

          <div class="skills col-md-5 col-sm-5"><!-- LEFT SKILL -->

            <h2 class="skills-title title">Créations</h2>
            <ul>
              <li class="skill">Le site statique/vitrine</li>
              <li class="skill">Le site dynamique</li>
              <li class="skill">L'application Web</li>
              <li class="skill">Le blog</li>
            </ul>

          </div><!-- end LEFT SKILL -->

          <div class="skills col-md-offset-2 col-sm-offset-2 col-md-5 col-sm-5"><!-- RIGHT SKILL -->

            <h2 class="skills-title title">Refontes</h2>
            <ul>
              <li class="skill">Nouveau design</li>
              <li class="skill">Nouvelles fonctionnalités</li>
              <li class="skill">Nouvelle sécurité</li>
              <li class="skill">Refontes de A à Z</li>
            </ul>

          </div><!-- end RIGHT SKILL -->

        </div><!-- end SKILLS-BOX -->
        <?php include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/contact-btn.php');?>
      </section><!-- /////////////////////// end HOME SECTION ////////////////////////// -->

      <section id="creations"><!-- ////////////// CREATION SECTION //////////////////// -->

        <div id="creation-welcome"><!-- /////////////////////// CREATION WELCOME ////////////////////////// -->

          <h2 class="creation-welcome-title">Les créations possibles</h2>
          <p class="creation-welcome-p">
            <span class="adn">ADN</span>
             peut créer pour vous un site web personnalisé et adapté à vos besoins
             quels qu'ils soient pour vous permettre d'augmenter votre notoriété,
             votre clientèle et VOTRE CHIFFRE D'AFFAIRES !
          </p>
          <div class="btn"><!-- REALISATIONS-BTN -->
            <div class="btn-box">
              <a class="contact-btn " href="http://ADN.thais-kevin.club/pages/realisations.php" title="Lien vers la page réalisations">Mes réalisations</a>
            </div>
          </div><!-- end REALISATIONS-BTN -->

        </div><!-- /////////////////////// end CREATION WELCOME ////////////////////////// -->

        <div class="creation-red-block" id="creation-box-vitrine"><!-- RED BLOCK -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <div class="creation-block-title-box">
              <h3 class="creation-red-block-title">Le site statique/vitrine</h3>
            </div>

            <div class="creationImg-box">
              <div class="creationImg creationImg-vitrine"></div>
            </div>

          </div><!-- end CREATION-BOX -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <p class="creation-red-block-p">
              <span class="creation-red-block-span-bold">Augmentez l'affluence de votre clientèle
                grâce à votre site vitrine.<br></span>
                Il est rapide à réaliser, facile d'utilisation, demande peu de maintenance et il est peu coûteux.
            </p>

          </div><!-- end CREATION-BOX -->

        </div><!-- end RED BLOCK -->

        <div class="creation-black-block" id="creation-box-application"><!-- BLACK BLOCK -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <div class="creation-block-title-box">
              <h3 class="creation-black-block-title">L'application Web</h3>
            </div>

            <div class="creationImg-box">
              <div class="creationImg creationImg-application"></div>
            </div>

          </div><!-- end CREATION-BOX -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <p class="creation-black-block-p">
              <span class="creation-black-block-span-bold">Votre entreprise compte sur le Web pour booster son chiffre d'affaires ?<br></span>
                  Bases de données, Interactivité, Administration, Sécurité etc...
                  <span class="adn">ADN</span> peut mettre à votre disposition toute une panoplie d'outils pour votre expansion.
            </p>

          </div><!-- end CREATION-BOX -->

        </div><!-- end BLACK BLOCK -->

        <div class="creation-red-block" id="creation-box-dynamique"><!-- RED BLOCK -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <div class="creation-block-title-box">
              <h3 class="creation-red-block-title">Le site dynamique</h3>
            </div>

            <div class="creationImg-box">
              <div class="creationImg creationImg-dynamique"></div>
            </div>

          </div><!-- end CREATION-BOX -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <p class="creation-red-block-p">
              <span class="creation-red-block-span-bold">Offrez de l'interactivité à vos internauntes
                grâce à votre site dynamique.<br></span>
                Faites évoluer votre entreprise avec des contacts via votre site.
            </p>

          </div><!-- end CREATION-BOX -->

        </div><!-- end RED BLOCK -->

        <div class="creation-black-block" id="creation-box-blog"><!-- BLACK BLOCK -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <div class="creation-block-title-box">
              <h3 class="creation-black-block-title">le Blog</h3>
            </div>

            <div class="creationImg-box">
              <div class="creationImg creationImg-blog"></div>
            </div>

          </div><!-- end CREATION-BOX -->

          <div class="creation-box"><!-- CREATION-BOX -->

            <p class="creation-black-block-p">
              <span class="creation-black-block-span-bold">Partagez ce que bon vous semble avec la terre entière grâce à votre blog!</span><br>
              Des images, de la musique, des vidéos, des opinions etc... Partagez et demandez au monde ce qu'il en pense.
            </p>

          </div><!-- end CREATION-BOX -->

        </div><!-- end BLACK BLOCK -->

        <div id="refonte-welcome"><!-- REFONTES-WELCOME -->

          <h2 class="refonte-welcome-title">Les refontes</h2>
          <p class="refonte-welcome-p">
            <span class="adn">ADN</span>
             peut modifier partiellement, ou bien en totalité, un site web déjà existant en conservant (ou non) votre nom de domaine.
          </p>
          <!-- COMPETENCES-BTN -->
          <div class="btn">
            <div class="btn-box">
              <a class="contact-btn " href="http://ADN.thais-kevin.club/pages/competences.php" title="Lien vers la page compétences">Mes compétences</a>
            </div>
          </div><!-- end COMPETENCES-BTN -->

        </div><!-- end REFONTES-WELCOME -->

      </section><!-- /////////////////// end CREATIONS SECTION //////////////////////// -->

      <section id="refontes" class="row"><!-- /////////////////// REFONTES SECTION //////////////////////// -->

        <div class="col-lg-6" ><!-- REFONTES ROW -->

          <div class="refonte-box" id="refonte-box-design"><!-- REFONTES BOX-->

            <div class="refonte-img-box"><!-- DESIGN IMAGE -->
              <div class="refonte-img refonte-img-design"></div>
            </div><!-- end DESIGN IMAGE -->
            <!-- DESIGN TEXT -->
            <h3 class="refonte-title title">Nouveau design</h3>
            <p class="refonte-p">
              <span class="refonte-span-bold">Il est au coeur de votre réussite!<br> </span>
                Les standards visuels du Web évoluent en permanence et votre site se doit d'être
                agréable et ergonomique tout au long de son existence.
            </p>
            <!-- end DESIGN TEXT -->
          </div><!-- end REFONTES BOX-->

          <div class="refonte-box" id="refonte-box-functions"><!-- REFONTES BOX-->

            <div class="refonte-img-box"><!-- FUNCTIONS IMAGE -->
              <div class="refonte-img refonte-img-fonctionnalites"></div>
            </div><!-- end FUNCTIONS IMAGE -->
            <!-- FUNCTIONS TEX -->
            <h3 class="refonte-title title">Nouvelles fonctionnalités</h3>
            <p class="refonte-p">
              <span class="refonte-span-bold">Votre site évolue avec votre entreprise!<br></span>
                Il est possible d'ajouter/modifier/supprimer des fonctionnalités sans pour autant tout reprendre à zéro.
            </p>
            <!-- end FUNCTIONS TEXT -->
          </div><!-- end REFONTES BOX-->

        </div><!-- end REFONTES ROW -->

        <div class="col-lg-6"><!-- REFONTES ROW-->

          <div class="refonte-box" id="refonte-box-securite"><!-- REFONTES BOX-->

            <div class="refonte-img-box"><!-- SECURITY IMAGE -->
              <div class="refonte-img refonte-img-securite"></div>
            </div><!-- end SECURITY IMAGE -->
            <!-- SECURITY TEXT -->
            <h3 class="refonte-title title">Nouvelle sécurité</h3>
            <p class="refonte-p">
              <span class="refonte-span-bold">Préservez vos infos et vos données!<br></span>
                  Protégez vous et vos internautes contre le hacking, le spam et l'espionnage industriel en mettant à jour les critères de sécurité de votre site.
            </p>
            <!-- end SECURITY TEXT -->
          </div><!-- end REFONTES BOX-->

          <div class="refonte-box" id="refonte-box-az"><!-- REFONTES BOX-->

            <div class="refonte-img-box"><!-- AZ IMAGE -->
              <div class="refonte-img refonte-img-az"></div>
            </div><!-- end AZ IMAGE -->
            <!-- AZ TEX -->
            <h3 class="refonte-title title">Refontes de A à Z</h3>
            <p class="refonte-p">
              <span class="refonte-span-bold">Donnez du renouveau à votre entreprise!</span><br>
              Parfois il est préférable de laisser de côté son vieux site obsolète pour repartir sur une architecture plus propre et plus appropriée.
            </p>
            <!-- end AZ TEXT -->
          </div><!-- end REFONTES BOX-->

        </div><!-- end REFONTES ROW -->

      </section><!-- /////////////////// end REFONTES SECTION //////////////////////// -->
      <!-- JavaScript -->
      <script src="http://adn.thais-kevin.club/js/index.js"></script>
      <!-- end JavaScript -->
      <?php
        include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/contact-btn.php');
        include('/kunden/homepages/41/d720813473/htdocs/ADN/templates/footer.php');
      ?>
