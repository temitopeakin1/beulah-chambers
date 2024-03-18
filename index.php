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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <!-- Favicon -->
    <link rel="shortcut icon"
      href="assets/images/favicon.ico"
      type="image/x-icon"
    />
  </head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
      <div class="circle">
      <div class="loader"><i class="fas fa-balance-scale fa-5x"></i></div>
    </div>
  </div>
  <!-- preloader area end -->

  <!-- header include -->
  <?php include ROOT_PATH . '/app/includes/header.php'; ?>
  
  <!-- Begin: slider -->
  <div class="slider-container">
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">
      <div class="slide slide-0 active">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <div class="slide__text">
            <h2 class="slide__text-heading">Commercial Law</h2>
            <p class="slide__text-desc">
              Experts in Business and Trade Laws
            </p>
            <a href="practice-areas/commercial-law.php" class="button"
              >Learn More</a
            >
          </div>
        </div>
      </div>
      <div class="slide slide-1">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <div class="slide__text">
            <h2 class="slide__text-heading">Human Rights</h2>
            <p class="slide__text-desc">
              Experts in Human rights Law
            </p>
            <a href="practice-areas/human-rights.php" class="button"
              >Learn More</a
            >
          </div>
        </div>
      </div>

      <div class="slide slide-2">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <div class="slide__text">
          <h2 class="slide__text-heading">Intellectual Property Law</h2>
            <p class="slide__text-desc">
            We protect your Creativity
            </p>
            <a href="practice-areas/intellectual-property.php" class="button"
              >Learn More</a
            >
          </div>
        </div>
      </div>

      <div class="slide slide-3">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <div class="slide__text">
          <h2 class="slide__text-heading">Labour Law</h2>
            <p class="slide__text-desc">
              Experts in Labour and Employment Law practices
            </p>
            <a href="practice-areas/labour-law.php" class="button"
              >Learn More</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  

       <!---Begin: First Section -->
    <section class="first-section_home ptb--50" id="first-section_home">
      <div class="container-fluid white section">
        <div class="row">
          <div class="col">
            <div class="container">
              <div class="left">
                <h2>Why you need the Top Lawyers</h2>
                <p>
                  <em><strong>KH Bamiwola & Co</strong></em> is a Premier Law firm with a reputation for 
                  Excellence inproviding legal services to clients. With a team of experienced and highly Skilled 
                  lawyers. KH Bamiwola & Co has built a solid track record of success in various Practice areas, Including
                  but not limited to Banking & Debt Recovery, Intellectual property Law, Arbitration e.t.c 
                  What sets Us apart is our commitment to providing personalised attention to each Clients. We Passionately
                  take time to understand our clients Unique needs and Concerns and Work tirelessly to deliver Outstanding Results
                  You can always bank on Us. Our Team of Legal Experts are always available to ensure proper delivery.
                </p>
              </div>
              <div class="right">
                <img src="assets/images/first-law.jpg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End: first section -->

  <!-- Begin: second section -->
    <section class="second-section_home">
      <div class="container-fluid white section ptb--10">
        <div class="row">
          <div class="container">
            <div class="card">
              <h2><i class="fas fa-trophy"></i>100% Percent Success Rate</h2>
              <p class="text">
                We have 100 percent Success winnings in all our legal dealings
              </p>
            </div>
            <div class="card">
              <h2><i class="fas fa-user-tie"></i>Expert Legal Services</h2>
              <p class="text">
                Our Professional Legal services are second to none
              </p>
            </div>
            <div class="card">
              <h2><i class="fas fa-thumbs-up"></i> Highly Recommended</h2>
              <p class="text">
                Our league of Professionals makes us a sought after team
                in Africa.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Begin: Third section -->
    <section class="third-section_home ptb--100" id="third-section-home">
      <div class="section-title">
        <h2>Practice Areas</h2>
        <div class="card-container">
        <div class="card_practice-1">
          <a href="practice-areas/labour-law.php" class="card-link">
            <img src="assets/images/labour-law.jpg" alt="Image" class="card-image">   
        <div class="card-overlayy">
          <div class="overlay-content">
            <i class="fas fa-balance-scale fa-3x"></i>
            <h3 class="overlay-title">Labour Law</h3>
            <p class="overlay-description">We protect the rights of workers and ensure an equitable treatment in work places</p>
            <button class="btn">Learn More</button>
          </div>
        </div>
      </a>
        </div>
          <div class="card_practice-2">
          <a href="practice-areas/arbitration.php" class="card-link">
            <img src="assets/images/arbitration.jpg" alt="Image" class="card-image">   
        <div class="card-overlayyy">
          <div class="overlay-content">
            <i class="fas fa-balance-scale fa-3x"></i>
            <h3 class="overlay-title">Arbitration</h3>
            <p class="overlay-description">We provide resolutions to disputes</p>
            <button class="btn">Learn More</button>
          </div>
        </div>
      </a>
        </div>
          <div class="card_practice-3">
          <a href="practice-areas/human-rights.php" class="card-link">
            <img src="assets/images/human-rights.jpg" alt="Image" class="card-image">   
        <div class="card-overlay">
          <div class="overlay-content">
            <i class="fas fa-balance-scale fa-3x"></i>
            <h3 class="overlay-title">Human Rights</h3>
            <p class="overlay-description">We promote an egalitarian society, to ensure that every individuals have access to Basic services </p>
            <button class="btn">Learn More</button>
          </div>
        </div>
      </a>
        </div>
          <div class="card_practice-4">
          <a href="practice-areas/intellectual-property.php" class="card-link">
            <img src="assets/images/intellectual.jpg" alt="Image" class="card-image">   
        <div class="card-overlayy">
          <div class="overlay-content">
            <i class="fas fa-balance-scale fa-3x"></i>
            <h3 class="overlay-title">Intellectual Property Law</h3>
            <p class="overlay-description">We ensure legal right of individuals & businesses to their creative works</p>
            <button class="btn">Learn More</button>
          </div>
        </div>
      </a>
        </div>
          <div class="card_practice-5">
          <a href="practice-areas/commercial-law.php" class="card-link">
            <img src="assets/images/commercial.jpg" alt="Image" class="card-image">   
        <div class="card-overlayyy">
          <div class="overlay-content">
            <i class="fas fa-balance-scale fa-3x"></i>
            <h3 class="overlay-title">Commercial Law</h3>
            <p class="overlay-description">This is also known as business Law or mercantile law</p>
            <button class="btn">Learn More</button>
          </div>
        </div>
      </a>
        </div>
        <div class="card_practice-6">
          <a href="practice-areas/banking-and-debt-recovery.php" class="card-link">
            <img src="assets/images/debt.jpg" alt="Image" class="card-image">   
        <div class="card-overlay">
          <div class="overlay-content">
            <i class="fas fa-balance-scale fa-3x"></i>
            <h3 class="overlay-title">Banking & Debt Recovery</h3>
            <p class="overlay-description">We recover debts from clients who are associated with Banks</p>
            <button class="btn">Learn More</button>
          </div>
        </div>
      </a>
        </div>
        </div>
      </div>
    </section>

     <!-- Begin: fourth section home -->
     <section class="fourth-section_home ptb--100">
      <div class="text-wrapper">
        <h2 class="hero__headline">Your Victory is Ours as well</h2>
        <a href="contact.php" class="button"
          >Free Evaluation  <i class="fas fa-balance-scale"></i
        ></a>
      </div>
    </section>
    <!-- End: fourth section -->

<!-- Begin: fifth section -->
<section class="fifth-section_home">
  <div class="container-fluid white section ptb--100">
    <div class="container">
      <div class="call-us__row">
        <div class="call-us__column">
          <div class="call-us__col-content">
            <div class="title">CALL US NOW</div>
            <h2 class="subtitle">Why Choose Us</h2>
            <ul>
              <li>
                We successfully litigated for and defended against will
                 contests and trust contests involving claims of mental incapacity,
                 undue influence, fraud, duress, and forgery.
              </li>
              <li>
                Our lawyers for Family, Arbitration, and Arbitration Law have succesfully handled hundreds of cases,
                from estate planning to elder abuse to trust litigation cases 
                involving breach of fiduciary duty.
              </li>
              <li>
                We don’t just litigate trust and intellectual property cases, Because we also draft 
                comprehensive plans, we understand how the the process should work, 
                and therefore are in a better position to attack or defend an intellectual property case when litigation arises.
              </li>
              <li>
                Reasonable Fees. Years of experiences. let our Professionals Work on your Legal needs
              </li>
            </ul>
          </div>
        </div>
        <div class="call-us__column">
          <div class="call-us__img-wrap">
            <div class="call-us__img">
              <img src="assets/images/second-law.jpg" alt="Reasonable prices" />
            </div>
            <div class="call-us__Info">
              <div class="card">
              <h3 class="h2">Reasonable Fees ,Long Standing Experiences, let our Team start working on your Legal needs Today.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End: fifth section -->
      <!-- Begin: footer -->
<?php include ROOT_PATH . '/app/includes/footer.php'; ?>
<script>
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/646736a5ad80445890edde50/1h0piqusp';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();  
</script>


<button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
</button>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/scroll.js"></script>
    <scrpt src="/assets/js/reveal.js"></script>
  
</body>
</html>