<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Akinyemi, Mujidat Opeyemi Esq. | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    'name' => 'Akinyemi, Mujidat Opeyemi Esq.',
    'image' => '../assets/images/associate-partner-2.jpeg',
    'image_alt' => 'Akinyemi Mujidat Opeyemi',
    'education' => [
      'LL.B (Lagos State University)',
      'B.L (Nigerian Law School)',
    ],
    'memberships' => [
      'Nigerian Bar Association',
    ],
    'practice_areas' => [
      'Litigation',
      'Legal Research & Advocacy',
      'Commercial Law',
      'Family Law',
      'Labour Law',
      'Contentious Matters',
    ],
    'bio' => '<p><strong>Akinyemi, Mujidat Opeyemi</strong> holds an LL.B from Lagos State University and a B.L. from the Nigerian Law School. A qualified legal practitioner, she currently serves as an Associate Counsel at K.H. Bamiwola & Co (Beulah Chambers).</p><p>Her expertise lies in legal research, advocacy, and delivering effective solutions, with a steadfast commitment to justice and professional excellence. She is a reliable, resourceful, and highly motivated team player in the firm\'s Litigation Department, where she crafts sound legal strategies and advises clients on a wide range of contentious matters.</p><p>Mujidat is dedicated to her work and ensures she brings her full capacity to meet and exceed client expectations. Her passion for deepening legal knowledge drives her pursuit of excellence in the legal profession.</p>',
    'current_slug' => 'akinyemi-mujidat',
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
