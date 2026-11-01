<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Tawakalitu Iyabode Adiatu Esq. | Beulah Chambers</title>
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
    'title' => 'Associate Counsel',
    'name' => 'Tawakalitu Iyabode Adiatu Esq.',
    'image' => '../assets/images/associate-partner-3.jpeg',
    'image_alt' => 'Tawakalitu Iyabode Adiatu',
    'education' => [
      'LL.B Second Class Upper (Osun State University)',
      'B.L (Nigerian Law School, Port Harcourt campus, Rivers State, 2025)',
      'ALX Virtual Assistant Cohort 6',
    ],
    'memberships' => [],
    'practice_areas' => [
      'Criminal Law',
      'Civil Litigation',
      'Real Estate Law',
      'Family Law',
      'Law of Contract',
      'Law of Evidence',
      'Litigation Support',
      'Legal Research & Drafting',
    ],
    'bio' => '<p><strong>Tawakalitu Iyabode Adiatu</strong> is an Associate Counsel at K.H Bamiwola & Co. (Beulah Chambers), a prominent law firm in Ogun State, Nigeria. She hails from Iwo in Osun State. She obtained her Bachelor of Laws degree with Second Class Upper Division from Osun State University. Subsequently, she attended the Nigerian Law School in 2025 at the Port Harcourt campus in Rivers State. Her professional journey began with an internship at Laide Oladepo and Associates, where she served for approximately four years in Osun State. She later joined K.H. Bamiwola & Co., where she has contributed to the firm\'s growth and her own professional development.</p><p>Currently, she serves as an Associate Counsel, providing structured legal analysis, drafting support, and comprehensive research across various practice areas. Her expertise encompasses litigation support, case review, and the preparation of legal documentation, with a consistent emphasis on accuracy. She is also a graduate of the ALX Virtual Assistant Cohort 6, with advanced training in administrative systems, digital tools, and workflow management. Her combination of legal knowledge and organizational skills enhances operational efficiency. She has demonstrated leadership through academic and professional roles involving coordination and accountability. She maintains a keen interest in Criminal Law, Civil Litigation, Real Estate Law, Family Law, Law of Contract, and the Law of Evidence. She is recognized for her solutions-oriented approach to legal tasks. Committed to excellence, ethical practice, and ongoing professional development, she upholds high standards within the legal profession.</p>',
    'current_slug' => 'tawakalitu-adiatu',
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
