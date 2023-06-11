// Begin: mobile nav logic
const showMobileNav = (toggleId, navId) =>
{
	const toggle = document.getElementById(toggleId),
		nav = document.getElementById(navId)

	if (toggle && nav)
	{
		toggle.addEventListener('click', () =>
		{
			toggle.classList.toggle("rotate");
			nav.classList.toggle('show');
		});
	}
};
showMobileNav('nav-toggle', 'nav-menu');

const navLink = document.querySelectorAll('.nav__link');

function linkAction(){
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');
  
	const navMenu = document.getElementById('nav-menu');
	navMenu.classList.remove('show');
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
