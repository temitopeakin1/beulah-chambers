<?php include('../path.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Human Rights | Beulah Chambers</title>
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
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="../assets/images/favicon.ico"
      type="image/x-icon"
    />
  </head>

<body>
  <?php include ROOT_PATH . '/app/includes/header.php'; ?>

  <!-- first section arbitration --> 
  <section class="link ptb--200" id="link">
    <div class="text"><a href="../index.php">Home</a> <i class="fa fa-long-arrow-right"></i> <a href="#">Practice-Areas</a> <i class="fa fa-long-arrow-right"></i> Human Rights</div>
</section>
<!-- End : first-section arbitration -->

 <section class="second-section_arbitration ptb--100" id="second-section_arbitration">
  <div class="container-fluid white section">
            <div class="row">
              <div class="col">
                <div class="container">
              <div class="left__arbitration">
                <h1 class="title">Practice Areas</h1>
                <h2><a href="../practice-areas/labour-law.php">Labour Law</a></h2>
                <h2><a href="../practice-areas/human-rights.php">Human Rights</a></h2>
                <h2><a href="../practice-areas/commercial-law.php">Commercial Law</a></h2>
                <h2><a href="../practice-areas/arbitration.php">Arbitration</a></h2>
                <h2><a href="../practice-areas/intellectual-property.php">Intellectual Property Law</a></h2>
                <h2><a href="../practice-areas/family-law.php">Family Law </a></h2>
                <h2><a href="../practice-areas/election-petitions.php">Election Petitions </a></h2>
                <h2><a href="../practice-areas/criminal-law.php">Criminal Law</a></h2>
                <h2><a href="../practice-areas/banking-and-debt-recovery.php">Banking & Debt Recovery </a></h2>
              </div>
              <div class="right__arbitration">
                <img src="../assets/images/human.jpg">
                <h1>Human Rights</h1>
                <p>
                   Human rights law is crucial for protecting the rights of vulnerable groups, such as minorities,
                   women, children, and refugees. It also plays an important role in promoting social justice, 
                   economic development, and democracy, by ensuring that individuals have access to basic needs and services, 
                  and by promoting participation and accountability in governance and decision-making.
                  These rights are inherent to all human beings and are protected by law, in order to ensure that every individual is 
                  able to live with dignity, freedom, equality, justice, and peace.
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact ptb--100">
    <button type="btn" class="btn"><a href="#" class="js-open-evaluation-modal">Get a Free Consultation Today <i class="fa fa-envelope-open-o"></i></a></button>
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
             <li><a href="../">Home</a></li>
             <li><a href="about.html">About</a></li>
             <li><a href="/practice-areas/labour-law.php">Labour Law</a></li>
             <li><a href="/practice-areas/commercial-law.php">Commercial Law</a></li>
             <li><a href="/practice-areas/intellectual-property-law.php">Intellectual Property Law</a></li>
             <li><a href="/practice-areas/family-law.php">Family Law</a></li>
             <li><a href="/practice-areas/arbitration.php">Arbitration</a></li>
             <li><a href="/articles.php">Articles</a></li>
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
     <p class="copy-right">
         Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https//www.beulahchambers.org">Beulah Chambers</a></p>
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