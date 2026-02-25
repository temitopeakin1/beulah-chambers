<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dr. Bamisaye Olutola | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link
      rel="shortcut icon"
      href="../assets/images/favicon.ico"
      type="image/x-icon"
    />
  </head>

<body>
    <header class="l-header">
        <nav class="nav bd-grid">
          <div class="logo">
            <a href="../index.php"
              ><img src="../assets/images/logo2.png" alt="Logo"
            /></a>
          </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="../index.php" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="../about.php" class="nav__link">About</a></li>
                      <li class="nav__item">
            <a href="#" class="nav__link"
              >Practice Areas
              <i class="fas fa-chevron-down" style="font-size: 0.8em" ;></i
            ></a>
            <ul>
              <li><a href="../practice-areas/labour-law.php">Labour Law</a></li>
              <li><a href="../practice-areas/human-rights.php">Human Rights</a></li>
              <li><a href="../practice-areas/commercial-law.php">Commercial Law</a></li>
              <li><a href="../practice-areas/arbitration.php">Arbitration</a></li>
              <li>
                <a href="../practice-areas/intellectual-property.php"
                  >Intellectual Property Law</a
                >
              </li>
              <li><a href="../practice-areas/family-law.php">Family Law</a></li>
              <li><a href="../practice-areas/election-petitions.php">Election Petitions</a></li>
              <li><a href="../practice-areas/criminal-law.php">Criminal Law</a></li>
              <li>
                <a href="../practice-areas/banking-and-debt-recovery.php"
                  >Banking & Debt Recovery</a
                >
              </li>
            </ul>
          </li>
                    <li class="nav__item"><a href="../articles.php" class="nav__link">Articles</a></li>
                    <li class="nav__item"><a href="../team.php" class="nav__link">Team</a></li>
                    <li class="nav__item"><a href="../contact.php" class="nav__link">Contact</a></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

  <section class="link" id="link">
    <div class="text"><a href="../index.php">Home</a>  <span><i class="fa fa-long-arrow-right"></i></span>  <a href="../team.php">Our Team</a></div>
  </section>

  <?php
  $team_base = '';
  $profile = [
    'title' => 'Consultant, Int\'l Human Rights Law',
    'name' => 'Dr. Bamisaye Olutola',
    'image' => '../assets/images/consultant-2.png',
    'image_alt' => 'Dr. Bamisaye Olutola',
    'email' => 'info@beulahchambers.org',
    'education' => [
      'LL.B (University of Lagos)',
      'B.L (Nigerian Bar)',
      'LL.M (Centre for Human Rights, University of Pretoria, South Africa)',
      'LL.D (Centre for Human Rights, University of Pretoria, South Africa)',
    ],
    'memberships' => [],
    'practice_areas' => [
      'Human Rights',
      'Litigation & Arbitration',
      'Commercial & Corporate Law',
    ],
    'bio' => '<p><strong>Dr. Bamisaye Olutola</strong> is an International Scholar whose research interests include Public International Law, Int\'l Human Rights Law, Comparative constitutional law and issues around democratisation processes in emerging democracies.</p><p>He had his LL.B from the University of Lagos and was subsequently called to the Nigerian Bar. He later proceeded to the prestigious Centre for Human Rights, University of Pretoria, South Africa, where he obtained both his LL.M (Master of Laws) and LL.D (Doctor of Laws). Dr. Olutola has to his credit several published works in learned journals and books both within and outside Nigeria.</p><p>He has at various times been invited as speaker and/or member of International Conferences, such as the Global Youth Intensive Program held in Seoul, South Korea in 2019. Dr. Olutola has often been invited to media stations to air his views on burning national issues. He is currently a resource person and an Examiner to a Professional Institute in Nigeria.</p>',
    'current_slug' => 'bamisaye-olutola',
  ];
  include ROOT_PATH . '/app/includes/team-profile-layout.php';
  ?>

        <section class="legal__help ptb--10">
        <i class="fas fa-briefcase"></i><h2 class="briefcase_help">Need Help with with Legal Issues?</h2>
         <button class="botton"><a href="../contact.php">CONTACT US</button></a>
      </section>


<!-- Begin: footer -->
<div class="footer">
    <div class="footer-content">
     <div class="footer-section about">
         <h2>Beulah Chambers</h2>
         <p>We are a full serviced Law firm dedicated to providing our Clients with the highest quality legal service. We offer a wide
          range of Services such as Litigation, Corporate Law, Family Law, Arbitration e.tc. We have a proven track records in these Areas.</p>
         <div class="contact">
             <span><i class="fas fa-map-marker" aria-hidden="true"></i>  Lagos Office:  27 Obafemi Awolowo Way, Ikeja Lagos</span>
             <span><i class="fas fa-map-marker" aria-hidden="true"></i>  Ogun Office: 171, Lagos Road, Alagbon, Owode-Yewa Ogun</span>
             <span><i class="fas fa-phone" aria-hidden="true"></i>  (+234)08080075458</a></span>
             <span><i class="fas fa-globe" aria-hidden="true"></i><a href="https://www.beulahchambers.org"> Beulah Chambers</a></span>
             </div>
     </div>
     <div class="footer-section links">
         <h2>Quick Links</h2>
         <ul>
             <li><a href="../index.php">Home</a></li>
             <li><a href="../about.php">About</a></li>
             <li><a href="../practice-areas/labour-law.php">Labour Law</a></li>
             <li><a href="../practice-areas/commercial-law.php">Commercial Law</a></li>
             <li><a href="../practice-areas/intellectual-property.php">Intellectual Property Law</a></li>
             <li><a href="../practice-areas/family-law.php">Family Law</a></li>
             <li><a href="../practice-areas/arbitration.php">Arbitration</a></li>
             <li><a href="../articles.php">Articles</a></li>
         </ul>
     </div>
 <div class="footer-section contact-form">
           <h2>Connect With Us</h2>
         <div class="socials">
            <a href="https://www.facebook.com/bamiwola.hassan" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
     </div>
      </div>
</div>

    <div class="footer-bottom">
     <p class="copy-right">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Beulah Chambers. All rights reserved. | <a href="https://www.beulahchambers.org">Beulah Chambers</a></p>
    </div>
</div>

<button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
</button>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/scroll.js"></script>
</body>
</html>
