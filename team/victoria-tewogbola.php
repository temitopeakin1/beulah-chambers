<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Victoria Tewogbola (Mrs) nee Ogunbiyi | Beulah Chambers</title>
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
    'title' => 'Litigation Manager',
    'name' => 'Victoria Tewogbola',
    'image' => '../assets/images/litigation-manager.png',
    'image_alt' => 'Victoria Tewogbola',
    'education' => [
      'Nigerian Certificate in Education (NCE), Federal College of Education, Osiele, Ogun State (2014)',
    ],
    'memberships' => [],
    'practice_areas' => [
      'Microsoft Excel', 
      'Word & Computer Applications',
      'Office Management',
      'Filing of Cases at Court Registries',
    ],
    'bio' => '<p><strong>Victoria Tewogbola </strong> is the Litigation Manager at Beulah Chambers (K.H Bamiwola & Co). She obtained a Nigerian Certificate in Education (NCE) from the Federal College of Education, Osiele, Ogun State in 2014 and has been with the Law Firm since 2020.</p><p>She has vast experiences using Microsoft applications such as  Excel, Word, and other computer technological work, Office Management Skills, and Filing of Cases at different Court Registries.</p>',
    'current_slug' => 'victoria-tewogbola',
  ];
  include ROOT_PATH . '/app/includes/team-profile-layout.php';
  ?>

        <section class="legal__help ptb--10">
        <i class="fas fa-briefcase"></i><h2 class="briefcase_help">Need Help with with Legal Issues?</h2>
         <button class="botton"><a href="../contact.php">CONTACT US</button></a>
      </section>


  <?php include ROOT_PATH . '/app/includes/footer.php'; ?>

  <button id="btnScrollToTop">
    <i class="material-icons">arrow_upward</i>
  </button>
  <script src="https://unpkg.com/scrollreveal@4"></script>
  <script src="../assets/js/reveal.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/scroll.js"></script>
</body>
</html>
