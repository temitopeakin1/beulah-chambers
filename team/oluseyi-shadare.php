<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Prof. Oluseyi Shadare | Beulah Chambers</title>
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
    'title' => 'Consultant, Int\'l Labour Relations & Law',
    'name' => 'Prof. Oluseyi Shadare',
    'image' => '../assets/images/consultant-1.png',
    'image_alt' => 'Prof. Oluseyi Shadare',
    'email' => 'info@beulahchambers.org',
    'education' => [
      'B.A (University of Ibadan)',
      'Master of Industrial Relations (University of Ibadan)',
      'PhD (University of Ibadan, Human Resource Management)',
      'LL.B (University of Lagos)',
      'B.L (Nigerian Law School, 2006)',
    ],
    'memberships' => [
      'Nigerian Bar Association (NBA)',
      'Chartered Institute of Personnel Management of Nigeria (CIPMN)',
      'Chartered Institute of Marketing of Nigeria (CIMN)',
    ],
    'practice_areas' => [
      'Human Rights',
      'Labour Law & Public Policy',
      'Commercial & Corporate Law',
      'Employment Relations',
    ],
    'bio' => '<p><strong>Professor Oluseyi Shadare (Ass.Prof.)</strong> holds Bachelor of Arts and Master of Industrial Relations degrees from the University of Ibadan, Nigeria. He earned his PhD from the same University with specialisation in Human Resource Management and a Bachelor of Laws (LLB) degree from University of Lagos. He was called to the Nigerian Bar in 2006.</p><p>Prof. Seyi is currently a faculty member of the Department of Employment Relations and Human Resource Management, and University of Lagos Business School, Nigeria. Prof. Shadare has over 18 years experience in the financial services sector and resigned as a Director from Industrial & General Insurance Plc in 2010. He has extensive experience in the field of Human Resource Management, Industrial Relations, Insurance Marketing, Labour Law & Public Policy. He teaches at the undergraduate, graduate, and executive levels at the University of Lagos.</p><p>His research interests are Social Policy (Social Protection), Human Resource Management, and Employment Relations. He has also published several articles, book chapters, and conference papers on diverse topics. He was an Assistant Coordinator of the Master of Business Administration (MBA) programme, University of Lagos between 2012 and 2015, and also coordinated the M.Sc, MILR and MELS programmes of his department from 2016–2018. He has supervised over 100 postgraduate students, including 2 PhD theses. He is an Associate Professor, and was the Ag. Head, Department of Employment Relations and Human Resource Management between 2019 and 2021. He has also held the position of an External examiner to many universities in Nigeria. Prof. Seyi Shadare is a Director in some blue chip companies in Nigeria.</p>',
    'current_slug' => 'oluseyi-shadare',
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
     <p class="copy-right">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Beulah Chambers. All rights reserved. | <a href="https://www.beulahchambers.org">Beulah Chambers</a></p>
    </div>
</div>

<?php include ROOT_PATH . '/app/includes/evaluation-modal.php'; ?>
<button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
</button>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/scroll.js"></script>
</body>
</html>
