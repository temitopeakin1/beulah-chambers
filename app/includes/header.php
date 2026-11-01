<?php
// Absolute site-root links (empty href="" reloads the current page — breaks Home from About/Contact)
if (!defined('BASE_URL')) {
  include_once dirname(__DIR__, 2) . '/path.php';
}
$nav_home = BASE_URL . '/';
$nav_assets = BASE_URL . '/assets/';
$pa_base = BASE_URL . '/practice-areas/';
?>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav">
          <div class="logo">
            <a href="<?php echo $nav_home; ?>"><img src="<?php echo $nav_assets; ?>images/logo2.png" alt="Beulah Chambers"></a>
          </div>
            <div class="nav__backdrop" id="nav-backdrop" hidden></div>
            <div class="nav__menu" id="nav-menu" aria-hidden="true">
                <div class="nav__menu-crest" aria-hidden="true">
                  <div class="nav__menu-crest-ring">
                    <i class="fas fa-balance-scale"></i>
                  </div>
                  <p class="nav__menu-brand">Beulah Chambers</p>
                  <p class="nav__menu-tag">K.H. Bamiwola &amp; Co</p>
                </div>
                <ul class="nav__list">
                    <li class="nav__item"><a href="<?php echo $nav_home; ?>" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="<?php echo BASE_URL; ?>/about" class="nav__link">About</a></li>
                    <li class="nav__item nav__item--practice">
                      <button type="button" class="nav__link nav__link--practice" id="nav-practice-toggle" aria-expanded="false" aria-controls="nav-practice-list">
                        Practice Areas <i class="fas fa-chevron-down" aria-hidden="true"></i>
                      </button>
                      <ul class="nav__practice-list" id="nav-practice-list">
                        <li><a href="<?php echo $pa_base; ?>labour-law">Labour Law</a></li>
                        <li><a href="<?php echo $pa_base; ?>human-rights">Human Rights</a></li>
                        <li><a href="<?php echo $pa_base; ?>commercial-law">Commercial Law</a></li>
                        <li><a href="<?php echo $pa_base; ?>arbitration">Arbitration</a></li>
                        <li><a href="<?php echo $pa_base; ?>intellectual-property">Intellectual Property Law</a></li>
                        <li><a href="<?php echo $pa_base; ?>family-law">Family Law</a></li>
                        <li><a href="<?php echo $pa_base; ?>election-petitions">Election Petitions</a></li>
                        <li><a href="<?php echo $pa_base; ?>criminal-law">Criminal Law</a></li>
                        <li><a href="<?php echo $pa_base; ?>banking-and-debt-recovery">Banking & Debt Recovery</a></li>
                        <li><a href="<?php echo $pa_base; ?>real-estate-land">Real Estate & Land Matters</a></li>
                      </ul>
                    </li>
                    <li class="nav__item"><a href="<?php echo BASE_URL; ?>/articles" class="nav__link">Articles</a></li>
                    <li class="nav__item"><a href="<?php echo BASE_URL; ?>/team/" class="nav__link">Team</a></li>
                    <li class="nav__item"><a href="<?php echo BASE_URL; ?>/contact" class="nav__link">Contact</a></li>
                </ul>
                <a class="nav__menu-cta" href="<?php echo BASE_URL; ?>/contact">Consult the Chambers</a>
            </div>
            <button type="button" class="nav__toggle" id="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="nav-menu">
                <span class="nav__seal" aria-hidden="true">
                    <span class="nav__seal-ring"></span>
                    <i class="fas fa-balance-scale nav__seal-scales"></i>
                    <span class="nav__seal-close">
                        <span class="nav__seal-close-line"></span>
                        <span class="nav__seal-close-line"></span>
                    </span>
                </span>
            </button>
        </nav>
    </header>
