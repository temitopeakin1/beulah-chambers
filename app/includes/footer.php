     <!-- Begin: footer -->
<?php
if (!defined('BASE_URL')) {
  include_once dirname(__DIR__, 2) . '/path.php';
}
$year = (int) date('Y');
?>
<footer class="footer" role="contentinfo">
  <div class="footer__glow" aria-hidden="true"></div>
  <div class="footer__inner">
    <div class="footer__brand">
      <a class="footer__logo" href="<?php echo BASE_URL; ?>/">
        <span class="footer__logo-mark">Beulah Chambers</span>
        <span class="footer__logo-sub">K.H. Bamiwola &amp; Co</span>
      </a>
      <p class="footer__tagline">A full-service Nigerian law firm focused on clear advice, strong advocacy, and client-centred results across litigation, corporate, family, and arbitration matters.</p>
      <a class="footer__cta" href="<?php echo BASE_URL; ?>/contact">Contact the chambers</a>
    </div>

    <nav class="footer__col" aria-labelledby="footer-explore">
      <h2 id="footer-explore" class="footer__heading">Explore</h2>
      <ul class="footer__list">
        <li><a href="<?php echo BASE_URL; ?>/">Home</a></li>
        <li><a href="<?php echo BASE_URL; ?>/about">About</a></li>
        <li><a href="<?php echo BASE_URL; ?>/team/">Our Team</a></li>
        <li><a href="<?php echo BASE_URL; ?>/articles">Articles</a></li>
        <li><a href="<?php echo BASE_URL; ?>/contact">Contact</a></li>
      </ul>
    </nav>

    <nav class="footer__col" aria-labelledby="footer-practice">
      <h2 id="footer-practice" class="footer__heading">Practice areas</h2>
      <ul class="footer__list footer__list--split">
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/labour-law">Labour Law</a></li>
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/commercial-law">Commercial Law</a></li>
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/family-law">Family Law</a></li>
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/arbitration">Arbitration</a></li>
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/human-rights">Human Rights</a></li>
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/intellectual-property">Intellectual Property</a></li>
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/criminal-law">Criminal Law</a></li>
        <li><a href="<?php echo BASE_URL; ?>/practice-areas/real-estate-land">Real Estate &amp; Land</a></li>
      </ul>
    </nav>

    <div class="footer__col footer__col--contact" aria-labelledby="footer-visit">
      <h2 id="footer-visit" class="footer__heading">Visit &amp; call</h2>
      <ul class="footer__contact">
        <li>
          <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
          <div>
            <span class="footer__label">Lagos</span>
            <span>27 Obafemi Awolowo Way, Ikeja, Lagos</span>
          </div>
        </li>
        <li>
          <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
          <div>
            <span class="footer__label">Ogun</span>
            <span>171 Lagos Road, Alagbon, Owode-Yewa, Ogun</span>
          </div>
        </li>
        <li>
          <i class="fas fa-phone" aria-hidden="true"></i>
          <div>
            <a href="tel:+2348080075458">(+234) 080 8007 5458</a>
          </div>
        </li>
        <li>
          <i class="fas fa-envelope" aria-hidden="true"></i>
          <div>
            <a href="mailto:info@beulahchambers.org">info@beulahchambers.org</a>
          </div>
        </li>
      </ul>
      <div class="footer__socials">
        <a href="https://www.facebook.com/bamiwola.hassan" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>

  <div class="footer__bottom">
    <p class="footer__copy">
      &copy; <?php echo $year; ?> Beulah Chambers / K.H. Bamiwola &amp; Co. All rights reserved.
    </p>
    <a class="footer__site" href="https://www.beulahchambers.org" target="_blank" rel="noopener noreferrer">beulahchambers.org</a>
  </div>
</footer>

<script src="https://unpkg.com/scrollreveal@4"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/reveal.js"></script>

<?php include __DIR__ . '/evaluation-modal.php'; ?>
