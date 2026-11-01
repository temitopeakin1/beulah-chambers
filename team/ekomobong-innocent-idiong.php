<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Ekomobong Innocent Idiong Esq. | Beulah Chambers</title>
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
    'name' => 'Ekomobong Innocent Idiong Esq.',
    'image' => '../assets/images/ekomobong_legal.jpg',
    'image_alt' => 'Ekomobong Innocent Idiong',
    'photo_align' => 'top',
    'education' => [
      'Diploma in Law (University of Uyo, Nigeria)',
      'LL.B Hons (University of Uyo, Nigeria)',
      'B.L (Nigerian Law School, Yenagoa Campus, 2025)',
    ],
    'memberships' => [],
    'practice_areas' => [
      'Litigation',
      'Estate Management',
      'Legal Drafting',
      'Office Administration',
      'Property & Tenancy Matters',
    ],
    'bio' => '<p><strong>Ekomobong Innocent Idiong, Esq.</strong>, is a legal practitioner and graduate of the prestigious University of Uyo Nigeria, where he obtained a Diploma in Law and a Bachelor of Laws (LL.B. Hons.) degree. He proceeded to the Nigerian Law School, Yenagoa Campus, for his Bar Professional Training and was subsequently called to the Nigerian Bar in 2025.</p><p>He possesses practical experience and knowledge in litigation, estate management, legal drafting, and office administration. These competencies, coupled with his leadership abilities, attention to detail, and commitment to professional excellence, position him as a valuable addition to any reputable legal practice.</p><p>During his NYSC year, he served as a legal associate at Divine Mercy Chambers, located at Visa Plaza, beside FCMB, Bank Road, Nnewi North Local Government Area, Anambra State. In addition to his legal responsibilities, he served as the Head of Chambers, a position that afforded him the opportunity to develop his leadership, administrative, organisational, and legal management skills.</p><p>Prior to his NYSC service, he worked as an Estate Manager for the Estate of Professor Godwin Udom, overseeing properties situated in Abak and Uyo Local Government Areas of Akwa Ibom State, Nigeria. His responsibilities included drafting tenancy agreements, issuing rent receipts, managing tenant relations, and ensuring that the properties remained conducive and suitable for their occupants. This experience strengthened his understanding of property management, tenancy matters, documentation, and the practical application of legal principles in estate administration.</p><p>Beyond his academic and professional accomplishments, Ekomobong Idiong, Esq., has demonstrated a strong commitment to leadership and service. During his time as a student, he actively participated in student leadership and was honoured with an Academic Leadership Award in recognition of his contributions to the welfare and development of students from Essien Udim, Akwa Ibom State.</p><p>He joined K. H. Bamiwola & Co. as an Associate Counsel, a reputable law firm recognised for its commitment to professional excellence, effective legal service delivery, and the provision of practical legal solutions to clients across Nigeria. As a young legal practitioner, he is committed to continuous professional development, ethical legal practice, diligent client representation, and the pursuit of justice. He is eager to work collaboratively with colleagues, broaden his legal expertise, and contribute meaningfully to the firm\'s objectives while upholding the highest standards of professionalism and integrity.</p>',
    'current_slug' => 'ekomobong-innocent-idiong',
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
