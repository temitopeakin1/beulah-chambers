<?php include 'path.php'; ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Contact | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      type="text/javascript"
    ></script>
    <!-- Latest compiled JavaScript -->

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
  
   <!-- Begin: Contact hero -->
<section class="contact-hero" id="contact__hero">
  <h1>Contact</h1>
  <a href="#" class="contactButton js-open-evaluation-modal">Start a Free Evaluation Today <i class="fas fa-balance-scale"></i></a>
</section>
   <!-- End: Contact hero -->

   <!-- Contact area -->
<div class="contact-area ptb--100" id="contact-area">
  <div class="contact-area__container">
    <section class="contact-inner" id="contact">
      <h2 class="contact-inner__title">Contact Info</h2>
      <div class="contact-flex-container">
        <div class="contact-address">
          <h3 class="contact-title">Contact Details</h3>
          <p class="contact-address__locations">Lagos | Ogun</p>
          <ul class="contact-address__list">
            <li class="h-addres"><i class="fa fa-map-marker" aria-hidden="true"></i> 27 Obafemi Awolowo Way, Ikeja Lagos</li>
            <li class="h-addres"><i class="fa fa-map-marker" aria-hidden="true"></i> 171, Lagos Road, Alagbon, Owode-Yewa Ogun</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+23408080075458">(+234) 080 800 75458</a></li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@beulahchambers.org">info@beulahchambers.org</a></li>
          </ul>
        </div>
        <div class="contact-form">
          <h3 class="contact-title">Fill out the form below to get in touch</h3>
          <form method="post" action="email.php" class="contact-form__form">
            <input type="text" class="input" name="name" placeholder="Your Name *" required>
            <input type="email" class="input" name="email" placeholder="Your Email address *" required>
            <input type="tel" class="input" name="phone" placeholder="Phone number *" required>
            <textarea name="msg" class="input contact-form__textarea" id="msg" placeholder="Case Description *" rows="4" required></textarea>
            <button type="submit" name="send" class="contact-form__submit" id="send">Submit</button>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
   <!-- End: Contact area -->
<!-- Begin: footer -->
<?php include ROOT_PATH . '/app/includes/footer.php'; ?>

<button id="btnScrollToTop">
  <i class="material-icons">arrow_upward</i>
</button>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/scroll.js"></script>
</body>
</html>