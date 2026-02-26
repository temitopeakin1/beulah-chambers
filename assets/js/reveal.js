/**
 * Scroll Reveal – site-wide. Runs on all pages that load ScrollReveal and this script.
 * Gives sections and key content a smooth reveal on scroll.
 */
(function () {
  if (typeof ScrollReveal === 'undefined') return;

  var sr = ScrollReveal({
    viewFactor: 0.15,
    duration: 600,
    easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
    reset: false
  });

  /* ----- Home page ----- */
  sr.reveal('.first-section_home', {
    origin: 'left',
    distance: '60px',
    delay: 200
  });

  sr.reveal('.second-section_home .card', {
    origin: 'bottom',
    distance: '40px',
    delay: 150,
    interval: 120
  });

  sr.reveal('.third-section_home .section-title', {
    origin: 'top',
    distance: '40px',
    delay: 200
  });

  sr.reveal('.card_practice-1, .card_practice-2, .card_practice-3', {
    origin: 'bottom',
    distance: '50px',
    delay: 100,
    interval: 100
  });

  sr.reveal('.card_practice-4, .card_practice-5, .card_practice-6', {
    origin: 'bottom',
    distance: '50px',
    delay: 100,
    interval: 100
  });

  sr.reveal('.fourth-section_home', {
    origin: 'bottom',
    distance: '50px',
    delay: 200
  });

  sr.reveal('.fifth-section_home .call-us__column', {
    origin: 'bottom',
    distance: '50px',
    delay: 150,
    interval: 120
  });

  /* ----- About page ----- */
  sr.reveal('.first-section_about .container', {
    origin: 'left',
    distance: '50px',
    delay: 200
  });

  sr.reveal('.second-section_about .vision-text, .second-section_about .vision-image', {
    origin: 'bottom',
    distance: '40px',
    delay: 150,
    interval: 100
  });

  sr.reveal('.second-section_about .mission-text, .second-section_about .mission-image', {
    origin: 'bottom',
    distance: '40px',
    delay: 150,
    interval: 100
  });

  sr.reveal('#published-works .section-title, #published-works .published-works__content, #published-works .published-works__books', {
    origin: 'bottom',
    distance: '40px',
    delay: 120,
    interval: 80
  });

  /* ----- Contact page ----- */
  sr.reveal('.contact-inner__title', {
    origin: 'top',
    distance: '30px',
    delay: 150
  });

  sr.reveal('.contact-address', {
    origin: 'left',
    distance: '50px',
    delay: 200
  });

  sr.reveal('.contact-form', {
    origin: 'right',
    distance: '50px',
    delay: 200
  });

  /* ----- Generic: section titles and breadcrumb sections ----- */
  sr.reveal('.section-title', {
    origin: 'top',
    distance: '35px',
    delay: 150
  });

  sr.reveal('section.link', {
    origin: 'top',
    distance: '30px',
    delay: 100
  });

  /* ----- Practice area pages: breadcrumb + main content ----- */
  sr.reveal('.second-section_arbitration .left__arbitration', {
    origin: 'left',
    distance: '50px',
    delay: 200
  });

  sr.reveal('.second-section_arbitration .right__arbitration', {
    origin: 'right',
    distance: '50px',
    delay: 200
  });

  sr.reveal('section.contact.ptb--100', {
    origin: 'bottom',
    distance: '40px',
    delay: 150
  });

  sr.reveal('.team-profile-layout__main, .team-profile-layout__sidebar', {
    origin: 'bottom',
    distance: '40px',
    delay: 120,
    interval: 80
  });

  /* ----- Articles / list pages ----- */
  sr.reveal('.articles-hero + .container, .contact-hero + .contact-area', {
    origin: 'bottom',
    distance: '40px',
    delay: 150
  });
})();
