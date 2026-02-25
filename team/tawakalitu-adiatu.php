<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Tawakalitu Iyabode Adiatu Esq. | Beulah Chambers</title>
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
    'title' => 'Research Assistant',
    'name' => 'Tawakalitu Iyabode Adiatu Esq.',
    'image' => '../assets/images/associate-partner-3.jpeg',
    'image_alt' => 'Tawakalitu Iyabode Adiatu',
    'education' => [
      'LL.B Second Class Upper (Osun State University)',
      'B.L (Nigerian Law School, Port Harcourt campus, Rivers State, 2025)',
      'ALX Virtual Assistant Cohort 6',
    ],
    'memberships' => [],
    'practice_areas' => [
      'Criminal Law',
      'Civil Litigation',
      'Real Estate Law',
      'Family Law',
      'Law of Contract',
      'Law of Evidence',
      'Litigation Support',
      'Legal Research & Drafting',
    ],
    'bio' => '<p><strong>Tawakalitu Iyabode Adiatu</strong> is a Research Assistant at K.H Bamiwola & Co. (Beulah Chambers), a prominent law firm in Ogun State, Nigeria. She hails from Iwo in Osun State. She obtained her Bachelor of Laws degree with Second Class Upper Division from Osun State University. Subsequently, she attended the Nigerian Law School in 2025 at the Port Harcourt campus in Rivers State. Her professional journey began with an internship at Laide Oladepo and Associates, where she served for approximately four years in Osun State. She later joined K.H. Bamiwola & Co., where she has contributed to the firm\'s growth and her own professional development.</p><p>Currently, she serves as a Research Assistant, providing structured legal analysis, drafting support, and comprehensive research across various practice areas. Her expertise encompasses litigation support, case review, and the preparation of legal documentation, with a consistent emphasis on accuracy. She is also a graduate of the ALX Virtual Assistant Cohort 6, with advanced training in administrative systems, digital tools, and workflow management. Her combination of legal knowledge and organizational skills enhances operational efficiency. She has demonstrated leadership through academic and professional roles involving coordination and accountability. She maintains a keen interest in Criminal Law, Civil Litigation, Real Estate Law, Family Law, Law of Contract, and the Law of Evidence. She is recognized for her solutions-oriented approach to legal tasks. Committed to excellence, ethical practice, and ongoing professional development, she upholds high standards within the legal profession.</p>',
    'current_slug' => 'tawakalitu-adiatu',
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
     <p class="copy-right">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Beulah Chambers. All rights reserved. | <a href="https://www.beulahchambers.org">Beulah Chambers</a></p>
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
