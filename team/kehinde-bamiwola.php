<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>K. H Bamiwola Esq. | Beulah Chambers</title>
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
    'title' => 'Managing/Principal Partner',
    'name' => 'K. H Bamiwola Esq.',
    'image' => '../assets/images/bamiwola.png',
    'image_alt' => 'K. H Bamiwola',
    'education' => [
      'LL.M with Distinction',
    ],
    'memberships' => [
      'Nigerian Bar Association (NBA)',
      'Former Legal Adviser, NBA Ilaro Branch',
      'Vice-Chairman, Ilaro Bar',
      'Chairman, Continuing Legal Education Committee (CLE) NBA, ilaro'
    ],
    'practice_areas' => [
      'Labour Law',
      'Commercial & Corporate Law',
      'Property Law',
      'Chieftaincy Matters',
      'Intellectual Property Law',
    ],
    'bio' => '<p><strong>K. H Bamiwola Esq.</strong> is an expert in Human Rights, Commercial Law, Property Law, Intellectual Property Law and Labour Law. He is a part-time Lecturer in A\' level Cambridge Law. He is also a Labour Law and Business Law Examiner to Professional Bodies in Nigeria.</p><p>He is a Researcher, Writer, Orator and an Instructor on the use of advocacy and panache in case presentation in Courts. He was a former Research Assistant to Prof. Chioma Kanu Agomo, an erudite Professor of Law at the University of Lagos. He is well published locally and internationally. Some of his articles have been published by the International Labour Organization (ILO) Geneva. He is the Commissioned Author of the Nigerian Labour Law textbook/Study manual of the Chartered Institute of Personnel Management of Nigeria. He combines legal practice with academics.</p><p>He is a Public Analyst on critical National and International issues on Radio and Television programmes. He is a Legal Consultant to many Trade Unions in Nigeria. He is a member of the Nigerian Bar Association, formerly the Legal Adviser of NBA Ilaro Branch and currently the Vice-Chairman of Ilaro Bar.</p><p>He was formerly the Vice Chairman of the NBA Ilaro Branch and presently the Chairman of the Continuing Education Committee of the Branch. He is the author of two new texts, \'Practical Approach to Labour Law in Nigeria\' and \'Logic for Critical Thinking and Cross-examination\'; the duo were published by the University of Lagos Press. The books are currently in high demand by HR Professionals, Legal Practitioners, Judges, Investigators and Students in Nigeria and beyond.</p>',
    'current_slug' => 'kehinde-bamiwola',
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
