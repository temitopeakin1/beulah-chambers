<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>O.G Olamijulo Esq. | Beulah Chambers</title>
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
    <!--===== HEADER =====-->
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
              <!-- <li><a href="property-law.html">Property Law</a></li> -->
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
                    <li class="nav__item"><a href="#" class="nav__link">Team <i class="fas fa-chevron-down" style="font-size: 0.8em" ;></i></a>
                    <ul>
                    <li><a href="../team/kehinde-bamiwola.php">K.H Bamiwola Esq.</a></li>
                    <!-- <li><a href="../team/joy-ofuzor.php">Joy A. Ofuzor</a></li> -->
                    <li><a href="../team/abiodun-fadipe.php">Abiodun Fadipe Esq.</a></li>
                    <li><a href="../team/olamijulo.php">O.G Olamijulo Esq</a></li>
                    <li><a href="../team/emma.php">Emmanuel Ubah Esq</a></li>
                    <li><a href="../team/olumide.php">Olumide Elajuku-Wilson Esq.</a></li>
                    <li><a href="../team/adedapo.php">Adedapo Precious Esq.</a></li>
                    <li><a href="../team/oluseyi-shadare.php">Dr. Oluseyi Shadare</a></li>
                    <li><a href="../team/bamisaye-olutola.php">Dr. Bamisaye Olutola</a></li>
                    </ul>
                    <li class="nav__item"><a href="../contact.php" class="nav__link">Contact</a></li> 
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div> 
        </nav>
    </header>

    <!-- <section class="link" id="link">
          <div class="text"><a href="../">Home</a><span> > </span> Our Team </a></div>
      </section> -->

  <section class="link" id="link">
    <div class="text"><a href="../index.php">Home</a>  <span><i class="fa fa-long-arrow-right"></i></span>  Our Team</div>
    </section>

       <section class="profile ptb--100 pl--10" id="profile">
        <div class="container-fluid white section">
            <div class="row">
              <div class="col">
                <div class="container">
                  <div class="row">
                    <div class="profile_law">
                      <h1 class="title">Legal Experts Profile</h1>
                      <h2><a href="../team/kehinde-bamiwola.php">K.H Bamiwola Esq.</a></h2>
                      <h3>Managing/Principal Partner</h3>
                      <!-- <hr class="horizontal">
                      <h2><a href="../team/joy-ofuzor.php">Joy A. Ofuzor</a></h2>
                      <h3>Head of Chambers</h3> -->
                      <hr class="horizontal">
                      <h2><a href="../team/abiodun-fadipe.php">Abiodun Fadipe Esq.</a></h2>
                      <h3>Head, Litigation</h3>
                      <hr class="horizontal">
                      <h2><a href="../team/olamijulo.php">O.G Olamijulo Esq.</a></h2>
                      <h3>Head, Corporate Law Practice</h3>
                      <hr class="horizontal">
                      <h2><a href="../team/emma.php">Emmanuel Ubah Esq.</a></h2>
                      <h3>Associate Counsel</h3>
                      <hr class="horizontal">
                      <h2><a href="../team/olumide.php">Olumide Elajuku-Wilson Esq.</a></h2>
                      <h3>Associate Counsel</h3>
                      <hr class="horizontal">
                      <h2><a href="../team/adedapo.php">Adedapo Precious, Esq.</a></h2>
                      <h3>Associate Counsel</h3>
                      <hr class="horizontal">
                      <h2><a href="../team/oluseyi-shadare.php">Dr. Oluseyi Shadare(Ass.Prof)</a></h2>
                      <h3>Consultant, Int'l Labour Relations and Law</h3>
                      <hr class="horizontal">
                      <h2><a href="../team/bamisaye-olutola.php">Dr. Bamisaye Olutola</a></h2>
                      <h3>Consultant, Int'l Human Rights Law</h3>
                      <hr class="horizontal">
                    </div>
                      <div class="profile_details_adedapo">
                      <img src="../assets/images/olami.png">
                      <div class="team-profile" id="team-profile">
                      <h2 class="name"> O.G Olamijulo Esq.</h2>
                        <h3 class="role">Associate Counsel</h3>
                        <h3 class="email"><a href="mailto: info@beulahchambers.org">info@beulahchambers.org</a></h3>
                        <h3 class="phone">xxx-xxxx-xxxx</h3>
                      <div class="socials">
                      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                      </div>
                      <h2 class="practice">Area of Practice</h2>
                      <h3>Debt recovery</h3>
                            <h3>Litigation & Arbitration</h3>
                              <h3>Commercial & Corporate Law</h3>
                                     <h3>Property Law</h3>   
                        </div>
                    </div>
                    <div class="profiler_bamiwola">
                    <p><strong>O.G.Olamijulo Esq.</strong> is the Head, Corporate Law Practice in the Law Firm of K.H.Bamiwola & Co. <br>
                        She bagged her LL.B degree with honours from Adekunle Ajasin University in 2018 and was subsequently called to the Nigerian Bar in 2020.
                        Shortly after being called to the Nigerian Bar, she worked with Dr. Olutayo Oyewale & Co in Ibadan as a Counsel where she acquired great skills on modern  day legal practice.
                        She subsequently relocated to Ado Ekiti in 2021 where she worked with L.A. Fasanmi & Co, the current NBA Chairman (Ado-Ekiti Branch) before she joined the Law Firm of K.H.Bamiwola & Co.<br>
                        Her areas of interest include criminal Law advocacy & treatment of offenders, human rights, labour law, property law and commercial law & commercial arbitration.<br>
                        She is currently a member of the 2023 Law Week Planning Committee of NBA, Ado-Ekiti Branch.
                        </p>
                    </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </section>

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
     <p class="copy-right">
         Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https//www.beulahchambers.org">Beulah Chambers</a></p>
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