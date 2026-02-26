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
  <a href="#" class="contactButton js-open-evaluation-modal">Start a Free Evaluation Today <i class="fas fa-balance-scale"></i></a>
</section>


<!--End: About Image-->

<!-- contact area start -->
<div class="contact-area ptb--100">
    <div class="container">
       <p>Message Sent Succesfully</p>
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