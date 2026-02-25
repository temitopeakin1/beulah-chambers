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

// Preloader
$(window).on("load", function () {
  $("#preloader")
    .delay(1500)
    .fadeOut("slow", function () {
      $(this).remove();
    });
});

// end: preloader
