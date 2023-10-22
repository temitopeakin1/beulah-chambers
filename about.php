<?php include 'path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Home | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/typography.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
    <!-- Latest compiled JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.ico"
      type="image/x-icon"
    />
  </head>

<body>
    
  <!-- header include -->
  <?php include ROOT_PATH . '/app/includes/header.php'; ?>
  
<!--Begin :About Image-->   
<section class="about-hero" id="about__hero">
  <h1>About Us</h1>
  <a href="about.php" class="aboutButton">Start a Free Evaluation Today <i class="fas fa-balance-scale"></i></a>
</section>      
<!--End: About Image-->

<!-- begin:first-section_about -->
<section class="first-section_about ptb--100" id="first-section_about">
  <div class="container fluid white section">
    <div class="row">
      <div class="col">
        <div class="container">
            <div class="left">
              <img src="assets/images/about_images1.jpg">
            </div>
            <div class="right">
              <h2><i class="fas fa-balance-scale"></i> About Us</h2>
              <p>
                <em><strong>KH Bamiwola & Co</strong></em> is one of the
                African fastest growing Law Firms with proven Expertise in
                Labour Law, Litigation, Human Rights,Commercial Law
                Negotiations cum Corporate Law Practice, Property Law,
                Arbitration, Chieftaincy, and Intellectual and Debt Recovery.
                The Law Firm has also been engaging in Criminal Law Litigation
                on Pro Bono basis with vast experiences in almost all the
                Courts in Nigeria except the inferior Courts. KH Bamiwola and
                Co Firm has represented many Trade Unions on Collective
                Bargaining, Negotiations and Resolutions of trade disputes.
                The Firm equally engages in paper presentations in
                Conferences, Symposia and academic conferences on contemporary
                issues in Industrial/ Employment law, Human Rights, Commercial
                Transactions and Arbitration. We Pride ourself as a Law Firm
                with Vast Legal experiences for a good number of years.
              </p>
          </div>
        </div>
      </div> 
    </div>
  </div>
</section>

<!-- begin: vision -->
<section clasa="second-section_about ptb--100" id="second-section_about">
  <div class="container fluid white section">
    <div class="row">
      <div class="col">
        <div class="container">
          <div class="vision-text">
            <h2>Our Vision</h2>
            <p>Our Vision is to use the Instrumentality of law to provide solutions to all human problems
              that are law related and through this achieve Peaceful societal equilibrium.
            </p>
          </div>
          <div class="vision-image">
            <img src="assets/images/law_img.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: vision -->
<section class="third-section_about ptb--100" id="third-section_about">
  <div class="slider-container swiper">
    <div class="section-title">
      <h2>Our Team of Legal Experts</h2></div>
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="team-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
  
            <div class="card-image">
              <img src="assets/images/bamiwola.png" alt="" class="card-img">
            </div>
          </div>
  
          <div class="card-content">
            <h2 class="name">K. H Bamiwola Esq.</h2>
            <p class="description">Managing/Principal Partner</p>
            <button class="bttn"><a href="team/kehinde-bamiwola.php">View Profile</a></button>
          </div>
        </div>
    
        <div class="team-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
  
            <div class="card-image">
              <img src="assets/images/fad.png" alt="" class="card-img">
            </div>
          </div>
  
          <div class="card-content">
            <h2 class="name">Abiodun Fadipe Esq.</h2>
            <p class="description">Head, Litigation</p>
  
            <button class="bttn"><a href="team/abiodun-fadipe.php">View Profile</a></button>
          </div>
        </div>
        <div class="team-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
  
            <div class="card-image">
              <img src="assets/images/olamijulo.png" alt="" class="card-img">
            </div>
          </div>
  
          <div class="card-content">
            <h2 class="name">O.G Olamijulo Esq.</h2>
            <p class="description">Head, Corporate Law Practice</p>
  
            <button class="bttn"><a href="team/olamijulo.php">View Profile</a></button>
          </div>
        </div>
        <div class="team-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
  
            <div class="card-image">
              <img src="assets/images/emma.png" alt="" class="card-img">
            </div>
          </div>
  
          <div class="card-content">
            <h2 class="name">Emmanuel Ubah Esq.</h2>
            <p class="description">Associate Counsel</p>
            <button class="bttn"><a href="team/emma.php">View Profile</a></button>
          </div>
        </div>
        <div class="team-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
  
            <div class="card-image">
              <img src="assets/images/shadare.png" alt="" class="card-img">
            </div>
          </div>
  
          <div class="card-content">
            <h2 class="name">Dr. Oluseyi Shadare(Ass.Prof)</h2>
            <p class="description">Consultant, Int'l Labour Relations & Law</p>
  
            <button class="bttn"><a href="team/oluseyi-shadare.php">View Profile</a></button>
          </div>
        </div>
        <div class="team-card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
  
            <div class="card-image_1">
              <img src="assets/images/bamisaye.png" alt="" class="card-img1">
            </div>
          </div>
  
          <div class="card-content">
            <h2 class="name">Dr. Bamisaye Olutola</h2>
            <p class="description">Consultant, Int'l Human Rights Law</p>
  
            <button class="bttn"><a href="team/bamisaye-olutola.php">View Profile</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
  </div>
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
             <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="team.php">Team</a></li>
             <li><a href="practice-areas/labour-law.php">Labour Law</a></li>
             <li><a href="practice-areas/commercial-law.php">Commercial Law</a></li>
             <li><a href="practice-areas/intellectual-property-law.php">Intellectual Property Law</a></li>
             <li><a href="practice-areas/family-law.php">Family Law</a></li>
             <li><a href="practice-areas/arbitration.php">Arbitration</a></li>
             <li><a href="articles.php">Articles</a></li>
         </ul>
     </div> 
 <div class="footer-section contact-form">
           <h2>Connect With Us</h2>
         <div class="socials">
            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
     </div>
      </div>
</div>
     
    <div class="footer-bottom">
     <p class="copy-right"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
         Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https//www.beulahchambers.org">Beulah Chambers</a></p>
    </div>
</div>

<button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
</button>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <!-- swiper js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/scroll.js"></script>
</body>
</html>