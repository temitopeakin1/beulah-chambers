<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>K. H Bamiwola Esq. | Beulah Chambers</title>
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
    'title' => 'Managing/Principal Partner',
    'name' => 'Kehinde Bamiwola Esq. Fellow, ILCS',
    'image' => '../assets/images/bamiwola.png',
    'image_alt' => 'K. H Bamiwola',
    'education' => [
      'LL.M with Distinction',
    ],
    'memberships' => [
      'Nigerian Bar Association (NBA)',
      'Fellow, Institute of Leadership, Coaching and Strategy',
      'Former Legal Adviser, NBA Ilaro Branch',
      'Former Vice-Chairman, NBA',
      'Chairman, Continuing Legal Education Committee (CLE) NBA, ilaro'
    ],
    'practice_areas' => [
      'Labour Law',
      'Commercial & Corporate Law',
      'Property Law',
      'Chieftaincy Matters',
      'Intellectual Property Law',
    ],
    'bio' => '<p><strong>Kehinde Bamiwola Esq. Fellow, ILCS</strong> is an expert in Human Rights, Commercial Law, Property Law, Intellectual Property Law and Labour Law. He is a part-time Lecturer in A\' level Cambridge Law. He is also a Labour Law and Business Law Examiner to Professional Bodies in Nigeria.</p><p>He is a Researcher, Writer, Orator and an Instructor on the use of advocacy and panache in case presentation in Courts. He was a former Research Assistant to Prof. Chioma Kanu Agomo, an erudite Professor of Law at the University of Lagos. He is well published locally and internationally. Some of his articles have been published by the International Labour Organization (ILO) Geneva. He is the Commissioned Author of the Nigerian Labour Law textbook/Study manual of the Chartered Institute of Personnel Management of Nigeria. He combines legal practice with academics.</p><p>He is a Public Analyst on critical National and International issues on Radio and Television programmes. He is a Legal Consultant to many Trade Unions in Nigeria. He is a member of the Nigerian Bar Association, formerly the Legal Adviser of NBA Ilaro Branch and currently the Vice-Chairman of Ilaro Bar.</p><p>He was formerly the Vice Chairman of the NBA Ilaro Branch and presently the Chairman of the Continuing Education Committee of the Branch. He is the author of two new texts, \'Practical Approach to Labour Law in Nigeria\' and \'Logic for Critical Thinking and Cross-examination\'; the duo were published by the University of Lagos Press. The books are currently in high demand by HR Professionals, Legal Practitioners, Judges, Investigators and Students in Nigeria and beyond.</p>',
    'current_slug' => 'kehinde-bamiwola',
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
