<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Morakinyo, Victoria Afolake, AICMC Esq. | Beulah Chambers</title>
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
    'title' => 'Head, Corporate Department',
    'name' => 'Morakinyo, Victoria Afolake, AICMC Esq.',
    'image' => '../assets/images/associate-partner-1.jpeg',
    'image_alt' => 'Morakinyo Victoria Afolake',
    'email' => 'info@beulahchambers.org',
    'education' => [
      'LL.B (Obafemi Awolowo University)',
      'B.L (Nigerian Law School)',
    ],
    'memberships' => [
      'Nigerian Bar Association (NBA)',
      'Institute of Chartered Mediators and Conciliators (ICMC)',
      'International Law Association (Nigeria Chapter)',
    ],
    'practice_areas' => [
      'Labour and Employment Matters',
      'Litigation',
      'Legal Research',
      'Corporate Law Practice',
      'Dispute Resolution',
    ],
    'bio' => '<p><strong>Morakinyo, Victoria Afolake, AICMC, Esq.</strong> is a Senior Associate Counsel at Beulah Chambers (K.H Bamiwola & Co). She holds an LL.B from Obafemi Awolowo University and a B.L. from the Nigerian Law School. She currently heads the Corporate Department at K.H. Bamiwola & Co. (Beulah Chambers).</p><p>Victoria is a distinguished Associate of the Institute of Chartered Mediators and Conciliators and she is also a member of the International Law Association (Nigeria Chapter).</p><p>Victoria is a dedicated legal practitioner with an unwavering commitment to excellence. She excels at delivering tailored and timely solutions to clients\' varied needs and she embraces a meticulous approach in tackling complex legal challenges.</p><p>Victoria is enthusiastic about Labour and Employment Matters, Litigation, Legal Research, Corporate Law Practice and Dispute Resolution.</p><p>During her leisure time, Victoria reads African Literature and enjoys spending quality moments with her friends and family.</p>',
    'current_slug' => 'morakinyo-victoria',
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
