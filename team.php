<?php include 'path.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Our Team | Beulah Chambers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/typography.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
  </head>

<body>

  <?php include ROOT_PATH . '/app/includes/header.php'; ?>

  <section class="about-hero" id="about__hero">
    <h1>Team</h1>
  </section>

  <section class="team-page-section">
    <div class="team-page-grid">
      <?php
      include ROOT_PATH . '/app/includes/team-members-list.php';
      foreach ($TEAM_MEMBERS_LIST as $member) :
        $img = $member['image'] ?? '';
        $title = $member['title'] ?? '';
      ?>
      <a href="team/<?php echo htmlspecialchars($member['slug']); ?>.php" class="team-page-card">
        <div class="team-page-card__inner">
          <div class="team-page-card__front">
            <div class="team-page-card__image">
              <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
            </div>
            <span class="team-page-card__title"><?php echo htmlspecialchars($title); ?></span>
          </div>
          <div class="team-page-card__back">
            <div class="team-page-card__back-content">
              <h3 class="team-page-card__back-heading">PRACTICE AREA</h3>
              <ul class="team-page-card__back-list">
                <?php
                $areas = $member['practice_areas'] ?? [];
                foreach ($areas as $area) :
                ?>
                <li><?php echo htmlspecialchars($area); ?></li>
                <?php endforeach; ?>
              </ul>
              <div class="team-page-card__back-photo">
                <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
              </div>
              <p class="team-page-card__back-name"><?php echo htmlspecialchars($member['name']); ?></p>
              <p class="team-page-card__back-role">"<?php echo htmlspecialchars($title); ?>"</p>
              <span class="team-page-card__back-link">View Profile</span>
            </div>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </section>

  <?php include ROOT_PATH . '/app/includes/footer.php'; ?>

  <button id="btnScrollToTop">
    <i class="material-icons">arrow_upward</i>
  </button>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/scroll.js"></script>
</body>
</html>
