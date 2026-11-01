/**
 * Scroll Reveal – site-wide.
 * Matches the Contact page pattern: left columns ease in from the left,
 * right columns from the right, slowly, when you route to a page.
 */
(function () {
  if (typeof ScrollReveal === 'undefined') return;
  if (window.__beulahRevealInit) return;
  window.__beulahRevealInit = true;

  var DURATION = 900;
  var DISTANCE = '56px';
  var DELAY = 180;
  var EASING = 'cubic-bezier(0.25, 0.46, 0.45, 0.94)';

  var sr = ScrollReveal({
    viewFactor: 0.12,
    duration: DURATION,
    distance: DISTANCE,
    easing: EASING,
    reset: false,
    mobile: true
  });

  function fromLeft(selector, extra) {
    sr.reveal(selector, Object.assign({
      origin: 'left',
      delay: DELAY
    }, extra || {}));
  }

  function fromRight(selector, extra) {
    sr.reveal(selector, Object.assign({
      origin: 'right',
      delay: DELAY
    }, extra || {}));
  }

  function fromTop(selector, extra) {
    sr.reveal(selector, Object.assign({
      origin: 'top',
      distance: '36px',
      delay: 120
    }, extra || {}));
  }

  function fromBottom(selector, extra) {
    sr.reveal(selector, Object.assign({
      origin: 'bottom',
      distance: '44px',
      delay: 140
    }, extra || {}));
  }

  /* ----- Contact (reference pattern) ----- */
  fromTop('.contact-inner__title');
  fromLeft('.contact-address');
  fromRight('.contact-form');

  /* ----- Home ----- */
  fromLeft('.first-section_home .left');
  fromRight('.first-section_home .right');

  fromLeft('.second-section_home .card:nth-child(1)', { delay: 120 });
  fromRight('.second-section_home .card:nth-child(2)', { delay: 220 });
  fromLeft('.second-section_home .card:nth-child(3)', { delay: 320 });

  fromTop('.third-section_home .section-title');
  fromBottom('.card_practice-1, .card_practice-2, .card_practice-3', {
    delay: 100,
    interval: 100
  });
  fromBottom('.card_practice-4, .card_practice-5, .card_practice-6', {
    delay: 100,
    interval: 100
  });

  fromBottom('.fourth-section_home .text-wrapper');

  fromLeft('.fifth-section_home .call-us__column:nth-child(1)');
  fromRight('.fifth-section_home .call-us__column:nth-child(2)');
  fromBottom('.fifth-section_home .call-us__column:nth-child(n+3)', {
    delay: 150,
    interval: 120
  });

  /* ----- About ----- */
  fromLeft('.first-section_about .left');
  fromRight('.first-section_about .right');

  fromLeft('.second-section_about .vision-text, .second-section_about .mission-text');
  fromRight('.second-section_about .vision-image, .second-section_about .mission-image');

  fromTop('#published-works .published-works__title, #published-works .section-title');
  fromLeft('#published-works .published-works__books');
  fromRight('#published-works .published-works__content');

  /* ----- Practice area pages ----- */
  fromTop('section.link');
  fromLeft('.second-section_arbitration .left__arbitration');
  fromRight('.second-section_arbitration .right__arbitration');
  fromBottom('section.contact.ptb--100');

  /* ----- Team directory ----- */
  fromTop('.team-page-section .section-title, .about-hero + .team-page-section .team-page-grid');
  fromBottom('.team-page-card', {
    delay: 80,
    interval: 90,
    distance: '40px'
  });

  /* ----- Team profiles (partner layout) ----- */
  fromTop('.partner-profile__title');
  fromLeft('.partner-profile__left, .team-profile-layout__main');
  fromRight('.partner-profile__right, .team-profile-layout__sidebar');
  fromBottom('.partner-profile__bio, .legal__help');

  /* ----- Articles ----- */
  fromTop('.articles-hero + .content .latest-post, .content .latest-post');
  fromLeft('.content .main-content .post', {
    delay: 100,
    interval: 110
  });
  fromRight('.content .sidebar, .content .sidebar-section');
  fromBottom('.articles-hero + .container');

  /* ----- Generic section titles (pages without a specific left/right pair) ----- */
  fromTop('.section-title');
})();
