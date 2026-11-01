// Begin: mobile chambers nav
(function initChambersMobileNav() {
  var toggle = document.getElementById('nav-toggle');
  var nav = document.getElementById('nav-menu');
  var backdrop = document.getElementById('nav-backdrop');
  var practiceToggle = document.getElementById('nav-practice-toggle');
  var practiceItem = document.querySelector('.nav__item--practice');
  if (!toggle || !nav) return;

  var scrollY = 0;

  function setOpen(isOpen) {
    toggle.classList.toggle('rotate', isOpen);
    nav.classList.toggle('show', isOpen);
    document.body.classList.toggle('nav-open', isOpen);
    document.documentElement.classList.toggle('nav-open', isOpen);
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    toggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
    nav.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
    if (backdrop) {
      backdrop.classList.toggle('is-visible', isOpen);
      backdrop.hidden = !isOpen;
    }
    if (!isOpen && practiceItem) {
      practiceItem.classList.remove('is-open');
      if (practiceToggle) practiceToggle.setAttribute('aria-expanded', 'false');
    }
  }

  function openMenu() {
    scrollY = window.scrollY || window.pageYOffset;
    setOpen(true);
  }

  function closeMenu() {
    setOpen(false);
    requestAnimationFrame(function () {
      window.scrollTo(0, scrollY);
    });
  }

  toggle.addEventListener('click', function () {
    if (nav.classList.contains('show')) closeMenu();
    else openMenu();
  });

  if (backdrop) {
    backdrop.addEventListener('click', closeMenu);
  }

  if (practiceToggle && practiceItem) {
    practiceToggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      // Desktop uses hover; only accordion on small screens
      if (window.matchMedia('(max-width: 767px)').matches) {
        var open = !practiceItem.classList.contains('is-open');
        practiceItem.classList.toggle('is-open', open);
        practiceToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      }
    });
  }

  nav.querySelectorAll('a.nav__link, .nav__practice-list a, .nav__menu-cta').forEach(function (link) {
    link.addEventListener('click', function () {
      nav.querySelectorAll('.nav__link').forEach(function (n) {
        n.classList.remove('active');
      });
      if (link.classList.contains('nav__link')) link.classList.add('active');
      closeMenu();
    });
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && nav.classList.contains('show')) closeMenu();
  });
})();

// End: mobile nav

// Free Evaluation Modal – same behaviour globally for all "Start a Free Evaluation" / "Free Consultation" buttons
function initEvaluationModal() {
  var modal = document.getElementById('evaluationModal');
  var closeTriggers = document.querySelectorAll('[data-close-modal]');

  function openModal() {
    if (modal) {
      modal.classList.add('is-open');
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      var firstInput = modal.querySelector('.evaluation-modal__input, .evaluation-modal__select, .evaluation-modal__textarea');
      if (firstInput) setTimeout(function () { firstInput.focus(); }, 100);
    }
  }

  function closeModal() {
    if (modal) {
      modal.classList.remove('is-open');
      modal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
  }

  // Event delegation: any click on .js-open-evaluation-modal (or inside it) opens the modal
  document.body.addEventListener('click', function (e) {
    var trigger = e.target.closest && e.target.closest('.js-open-evaluation-modal');
    if (trigger) {
      e.preventDefault();
      e.stopPropagation();
      openModal();
    }
  });

  for (var j = 0; j < closeTriggers.length; j++) {
    closeTriggers[j].addEventListener('click', closeModal);
  }

  if (modal) {
    modal.addEventListener('click', function (e) {
      if (e.target === modal || e.target.classList.contains('evaluation-modal__overlay')) closeModal();
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && modal && modal.classList.contains('is-open')) closeModal();
    });
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initEvaluationModal);
} else {
  initEvaluationModal();
}

// Preloader
$(window).on("load", function () {
  $("#preloader")
    .delay(1500)
    .fadeOut("slow", function () {
      $(this).remove();
    });
});

// end: preloader
