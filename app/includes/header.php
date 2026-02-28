<?php
// Base path for links and assets when header is included from subdirectories (e.g. practice-areas/, team/)
$header_base = (strpos($_SERVER['SCRIPT_NAME'], '/practice-areas/') !== false || strpos($_SERVER['SCRIPT_NAME'], '/team/') !== false) ? '../' : '';
$pa_base = $header_base ? '../practice-areas/' : 'practice-areas/';
?>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
          <div class="logo">
            <a href="<?php echo $header_base; ?>index.php"><img src="<?php echo $header_base; ?>assets/images/logo2.png" alt="Beulah Chambers"></a>
          </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="<?php echo $header_base; ?>index.php" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="<?php echo $header_base; ?>about.php" class="nav__link">About</a></li>
                      <li class="nav__item">
            <a href="#" class="nav__link"
              >Practice Areas
              <i class="fas fa-chevron-down" style="font-size: 0.8em" ;></i
            ></a>
            <ul>
              <li><a href="<?php echo $pa_base; ?>labour-law.php">Labour Law</a></li>
              <li><a href="<?php echo $pa_base; ?>human-rights.php">Human Rights</a></li>
              <li><a href="<?php echo $pa_base; ?>commercial-law.php">Commercial Law</a></li>
              <li><a href="<?php echo $pa_base; ?>arbitration.php">Arbitration</a></li>
              <li><a href="<?php echo $pa_base; ?>intellectual-property.php">Intellectual Property Law</a></li>
              <li><a href="<?php echo $pa_base; ?>family-law.php">Family Law</a></li>
              <li><a href="<?php echo $pa_base; ?>election-petitions.php">Election Petitions</a></li>
              <li><a href="<?php echo $pa_base; ?>criminal-law.php">Criminal Law</a></li>
              <li><a href="<?php echo $pa_base; ?>banking-and-debt-recovery.php">Banking & Debt Recovery</a></li>
              <li><a href="<?php echo $pa_base; ?>real-estate-land.php">Real Estate & Land Matters</a></li>
            </ul>
          </li>
                    <li class="nav__item"><a href="<?php echo $header_base; ?>articles.php" class="nav__link">Articles</a></li>
                    <li class="nav__item"><a href="<?php echo $header_base; ?>team.php" class="nav__link">Team</a></li>
                    <li class="nav__item"><a href="<?php echo $header_base; ?>contact.php" class="nav__link">Contact</a></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle" aria-label="Toggle menu">
                <span class="hamburger" aria-hidden="true">
                    <span class="hamburger__line hamburger__line--1"></span>
                    <span class="hamburger__line hamburger__line--2"></span>
                    <span class="hamburger__line hamburger__line--3"></span>
                </span>
            </div>
        </nav>
    </header>
