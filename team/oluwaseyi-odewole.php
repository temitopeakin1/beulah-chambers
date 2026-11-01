<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Oluwaseyi Odewole Esq. | Beulah Chambers</title>
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
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon-192.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
  </head>

<body>
  <?php include ROOT_PATH . '/app/includes/header.php'; ?>

    <section class="link" id="link">
    <div class="text"><a href="../index.php">Home</a>  <span><i class="fa fa-long-arrow-right"></i></span>  <a href="../team.php">Our Team</a></div>
  </section>


  <?php
  $team_base = '';
  $profile = [
    'title' => 'Head of Chambers',
    'name' => 'Oluwaseyi Odewole Esq. MILCS.',
    'image' => '../assets/images/head-chambers.jpeg',
    'image_alt' => 'Oluwaseyi Odewole',
    'education' => [
      'LL.B (Ekiti State University)',
      'B.L (Nigerian Law School, Yenagoa, Bayelsa State)',
    ],
    'memberships' => ['Nigerian Bar Association', 'Member, Institute of Leadership, Coaching and Strategy'],
    'practice_areas' => [
      'Criminal Law & Litigation',
      'Civil Litigation',
      'Real Estate',
      'Corporate Law',
      'Family Law',
      'Labour Law',
      'Telecommunications (Mast Management)',
    ],
    'bio' => '<p><strong>Oluwaseyi Odewole Esq. MILCS.</strong> is a Senior Counsel I, and currently the Head of Chambers at Beulah Chambers (K.H Bamiwola & Co), a leading law firm in Nigeria. He is a native of Kwara State, born in Lagos State. He studied Law at Ekiti State University where he obtained his Bachelor of Laws degree and was thereafter called to the Nigerian Bar after the successful completion of his one-year compulsory programme at the Nigerian Law School, Yenagoa, Bayelsa State.</p><p>He began his career at Abayomi Iyasele & Associates, Lagos, from where he cut his teeth in advocacy practice and subsequently rose from NYSC Associate to Head of Chamber through his hard work, resilience and intellectual performance before moving to K.H Bamiwola & Co, where he has continued the improvement and development of the firm and himself. He is a member of the Nigerian Bar Association.</p>',
    'current_slug' => 'oluwaseyi-odewole',
  ];
  include ROOT_PATH . '/app/includes/team-profile-layout.php';
  ?>

        <section class="legal__help ptb--10">
        <i class="fas fa-briefcase"></i><h2 class="briefcase_help">Need Help with with Legal Issues?</h2>
         <button class="botton"><a href="#" class="js-open-evaluation-modal">CONTACT US</a></button>
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