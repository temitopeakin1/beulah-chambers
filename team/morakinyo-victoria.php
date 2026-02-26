<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Morakinyo, Victoria Afolake, AICMC Esq. | Beulah Chambers</title>
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
  <?php include ROOT_PATH . '/app/includes/header.php'; ?>

  <section class="link" id="link">
    <div class="text"><a href="../index.php">Home</a>  <span><i class="fa fa-long-arrow-right"></i></span>  <a href="../team.php">Our Team</a></div>
  </section>

  <?php
  $team_base = '';
  $profile = [
    'title' => 'Head, Corporate Department',
    'name' => 'Morakinyo, Victoria Afolake, AICMC Esq.',
    'image' => '../assets/images/associate-partner-1.jpeg',
    'image_alt' => 'Morakinyo Victoria Afolake',
    'email' => 'info@beulahchambers.org',
    'education' => [
      'LL.B (Obafemi Awolowo University)',
      'B.L (Nigerian Law School)',
    ],
    'memberships' => [
      'Institute of Chartered Mediators and Conciliators (ICMC)',
      'International Law Association (Nigeria Chapter)',
    ],
    'practice_areas' => [
      'Labour and Employment Matters',
      'Litigation',
      'Legal Research',
      'Corporate Law Practice',
      'Dispute Resolution',
    ],
    'bio' => '<p><strong>Morakinyo, Victoria Afolake, AICMC, Esq.</strong> holds an LL.B from Obafemi Awolowo University and a B.L. from the Nigerian Law School. She currently heads the Corporate Department at K.H. Bamiwola & Co. (Beulah Chambers).</p><p>Victoria is a distinguished Associate of the Institute of Chartered Mediators and Conciliators and she is also a member of the International Law Association (Nigeria Chapter).</p><p>Victoria is a dedicated legal practitioner with an unwavering commitment to excellence. She excels at delivering tailored and timely solutions to clients\' varied needs and she embraces a meticulous approach in tackling complex legal challenges.</p><p>Victoria is enthusiastic about Labour and Employment Matters, Litigation, Legal Research, Corporate Law Practice and Dispute Resolution.</p><p>During her leisure time, Victoria reads African Literature and enjoys spending quality moments with her friends and family.</p>',
    'current_slug' => 'morakinyo-victoria',
  ];
  include ROOT_PATH . '/app/includes/team-profile-layout.php';
  ?>

        <section class="legal__help ptb--10">
        <i class="fas fa-briefcase"></i><h2 class="briefcase_help">Need Help with with Legal Issues?</h2>
         <button class="botton"><a href="#" class="js-open-evaluation-modal">CONTACT US</a></button>
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

<?php include ROOT_PATH . '/app/includes/evaluation-modal.php'; ?>
<button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
</button>
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script src="../assets/js/reveal.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/scroll.js"></script>
</body>
</html>
