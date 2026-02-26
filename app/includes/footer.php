     <!-- Begin: footer -->
<?php
// Footer links should work from root and subdirectories (practice-areas/, team/, etc.)
// Use BASE_URL so all hrefs are absolute to the site root.
?>
<div class="footer">
    <div class="footer-content">
     <div class="footer-section about">
         <h2>Beulah Chambers</h2>
         <p>We are a full serviced Law firm dedicated to providing our Clients with the highest quality legal service. We offer a wide
          range of Services such as Litigation, Corporate Law, Family Law, Arbitration e.tc. We have a proven track records in these Areas.</p>
         <div class="contact">
             <span><i class="fas fa-map-marker" aria-hidden="true"></i>  Lagos Office:  27 Obafemi Awolowo Way, Ikeja Lagos</span>
             <span><i class="fas fa-map-marker" aria-hidden="true"></i>  Ogun Office: 171, Lagos Road, Alagbon, Owode-Yewa Ogun</span> 
             <span><i class="fas fa-phone" aria-hidden="true"></i>  (+234)08080075458</a></span>
             <span><i class="fas fa-globe" aria-hidden="true"></i><a href="https://www.beulahchambers.org"> Beulah Chambers</a></span>
             </div>
     </div>
     <div class="footer-section links">
         <h2>Quick Links</h2>
         <ul>
             <li><a href="<?php echo BASE_URL; ?>/index.php">Home</a></li>
             <li><a href="<?php echo BASE_URL; ?>/about.php">About</a></li>
             <li><a href="<?php echo BASE_URL; ?>/team.php">Team</a></li>
             <li><a href="<?php echo BASE_URL; ?>/practice-areas/labour-law.php">Labour Law</a></li>
             <li><a href="<?php echo BASE_URL; ?>/practice-areas/commercial-law.php">Commercial Law</a></li>
             <li><a href="<?php echo BASE_URL; ?>/practice-areas/intellectual-property.php">Intellectual Property Law</a></li>
             <li><a href="<?php echo BASE_URL; ?>/practice-areas/family-law.php">Family Law</a></li>
             <li><a href="<?php echo BASE_URL; ?>/practice-areas/arbitration.php">Arbitration</a></li>
             <li><a href="<?php echo BASE_URL; ?>/articles.php">Articles</a></li>
         </ul>
     </div> 
 <div class="footer-section contact-form">
           <h2>Connect With Us</h2>
         <div class="socials">
            <a href="https://www.facebook.com/bamiwola.hassan" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
     </div>
      </div>
</div>
     
    <div class="footer-bottom">
     <p class="copy-right">
         Copyright &copy;<script>document.write(new Date().getFullYear());</script>
         All rights reserved | <a href="https://www.beulahchambers.org">Beulah Chambers</a></p>
    </div>
</div>

<?php
$reveal_base = (strpos($_SERVER['REQUEST_URI'], '/practice-areas/') !== false || strpos($_SERVER['REQUEST_URI'], '/team/') !== false) ? '../' : '';
?>
<script src="https://unpkg.com/scrollreveal@4"></script>
<script src="<?php echo $reveal_base; ?>assets/js/reveal.js"></script>

<?php include __DIR__ . '/evaluation-modal.php'; ?>