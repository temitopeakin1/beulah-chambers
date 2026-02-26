// Begin: mobile nav logic
const showMobileNav = (toggleId, navId) => {
	const toggle = document.getElementById(toggleId);
	const nav = document.getElementById(navId);

	if (toggle && nav) {
		let scrollY = 0;
		toggle.addEventListener('click', () => {
			const isOpen = !nav.classList.contains('show');
			if (isOpen) {
				scrollY = window.scrollY || window.pageYOffset;
			} else {
				requestAnimationFrame(() => { window.scrollTo(0, scrollY); });
			}
			toggle.classList.toggle('rotate', isOpen);
			nav.classList.toggle('show', isOpen);
			document.body.classList.toggle('nav-open', isOpen);
			document.documentElement.classList.toggle('nav-open', isOpen);
		});
	}
};
showMobileNav('nav-toggle', 'nav-menu');

const navLink = document.querySelectorAll('.nav__link');

function linkAction() {
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');
  const navMenu = document.getElementById('nav-menu');
  if (navMenu) navMenu.classList.remove('show');
  document.body.classList.remove('nav-open');
  document.documentElement.classList.remove('nav-open');
}
navLink.forEach(n => n.addEventListener('click', linkAction));

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
