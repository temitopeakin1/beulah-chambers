<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Alejo Nimotallahi Aderoju, AICMC Esq. | Beulah Chambers</title>
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
    'title' => 'Deputy Head of Chambers & Head, Litigation',
    'name' => 'Alejo Nimotallahi Aderoju, AICMC Esq.',
    'image' => '../assets/images/deputy-head-chamber.jpeg',
    'image_alt' => 'Alejo Nimotallahi Aderoju',
    'education' => [
      'LL.B (Hons) Lagos State University',
      'B.L Nigerian Law School, 2024 set (graduated top 19%)',
    ],
    'memberships' => [
      'Nigerian Bar Association (NBA)',
      'Institute of Chartered Mediators and Conciliators (ICMC)',
    ],
    'practice_areas' => [
      'Labour and Employment Matters',
      'Corporate Law Practice',
      'Commercial Dispute Resolution',
      'Litigation',
    ],
    'bio' => '<p><strong>Alejo Nimotallahi Aderoju, AICMC Esq.</strong>, is an astute legal practitioner with a focus on Labour and Employment Matters, Corporate Law Practice, and Commercial Dispute Resolution. She holds an LL.B (Hons) degree from Lagos State University and graduated in the top 19% at the Nigerian Law School, 2024 set.</p><p>During her undergraduate studies, she actively participated in several advocacy competitions and served in various leadership capacities, including being a four-time Scribe of her student\'s chamber and an active member of the National Union of Lagos State Students\' Parliamentary Council, earning her numerous awards and accolades.</p><p>As a distinguished member of the Institute of Chartered Mediators and Conciliators, Nimotallahi is a Senior Counsel I,  and currently heads the Litigation and Corporate Dept. at K.H. Bamiwola & Co. (Beulah Chambers), a leading commercial law firm in Nigeria providing cutting-edge integrated legal services to clients with diverse portfolios.</p>',
    'current_slug' => 'alejo-nimotallahi',
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
