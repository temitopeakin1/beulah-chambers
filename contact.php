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
  
   <!--Begin :About Image-->   
<section class="contact-hero" id="contact__hero">
  <h1>Contact Us</h1>
  <a href="contact.php" class="contactButton">Start a Free Evaluation Today <i class="fas fa-balance-scale"></i></a>
</section>


<!--End: About Image-->

<!-- contact area start -->
<div class="contact-area ptb--100">
    <div class="container">
        <section class="contact-inner" id="contact">
            <div class="section-title text-black">
                <h2>Contact Info</h2>
            </div>
            <div class="contact-flex-container" id="contact-flex_container">
                <div class="contact-address">
                    <h4 class="contact-title">Contact Details</h4>
                    <p>Lagos | Ogun </p>
                    <ul>
                        <li class="h-addres"><i class="fa fa-home"></i> 27 Obafemi Awolowo Way, Ikeja Lagos</li>
                        <li class="h-addres"><i class="fa fa-home"></i> 171, Lagos Road, Alagbon, Owode-Yewa Ogun</li>
                        <li><i class="fa fa-phone"></i>(+234)08080075458</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@beulahchambers.org">info@beulahchambers.org</a></li>
                    </ul>
                </div>
                <div class="contact-form">
                    <h4 class="contact-title">Fill out the form below to get in touch</h4>
                    <form method="post" action="email.php">
                        <input type="text" class="input" name="name"  placeholder="Your Name *">
                        <input type="email" class="input" name="email"  placeholder="Your Email address*">
                        <input type="phone" class="input" name="phone"  placeholder="Phone number*">
                        <textarea name="msg" class="input" id="msg" placeholder="Case Description*"></textarea>
                        <input type="submit" id="send" value="Submit here">
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- contact area end -->
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