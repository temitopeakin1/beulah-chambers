<?php include '../path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Festus Babalola Esq. | Beulah Chambers</title>
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
    'name' => 'Festus Babalola Esq.',
    'image' => '../assets/images/festus_legal.jpg',
    'image_alt' => 'Festus Babalola',
    'education' => [
      'LL.B (Obafemi Awolowo University, Ile-Ife)',
      'B.L (Nigerian Law School)',
    ],
    'memberships' => [],
    'practice_areas' => [
      'Corporate & Commercial Law',
      'Corporate Governance',
      'Regulatory Compliance',
      'Contract Drafting & Review',
      'Litigation Support',
      'Legal Research & Writing',
      'Business Advisory',
    ],
    'bio' => '<p><strong>Festus Babalola</strong> is a Nigerian-qualified legal practitioner with experience in legal research, legal drafting, litigation support, contract review, and regulatory compliance across diverse legal environments in Nigeria and internationally. He holds an LL.B. from Obafemi Awolowo University, Ile-Ife, and a Barrister-at-Law (B.L.) qualification from the Nigerian Law School.</p><p>His professional experience includes working as a Legal Associate in a litigation-focused law firm, providing remote legal research support to a Canadian law firm on U.S. probate and estate planning matters, and previously serving as a Paralegal with a law firm in Houston, Texas. These roles have strengthened his ability to analyze complex legal issues, interpret legislation and judicial authorities, prepare legal memoranda, draft court processes and commercial agreements, and manage legal documentation with accuracy and attention to detail.</p><p>Festus also gained valuable experience at the Osun State Ministry of Justice, where he worked across public prosecution, civil litigation, and legal drafting. His additional exposure to court proceedings and legal practice has equipped him with a sound understanding of legal procedure, case preparation, and professional legal research.</p><p>His core competencies include legal research and writing, litigation and case management, contract drafting and review, regulatory compliance, legal risk assessment, and stakeholder communication. He is particularly interested in corporate and commercial law, corporate governance, regulatory compliance, and business advisory services.</p><p>Festus is committed to continuous professional development, ethical legal practice, and delivering practical, commercially aware legal solutions that support clients\' interests and organizational objectives.</p>',
    'current_slug' => 'festus-babalola',
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
