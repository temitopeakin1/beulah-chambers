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
    .delay(1100)
    .fadeOut("slow", function () {
      $(this).remove();
    });
});

// modal logic
let open_modal = document.getElementById('open_modal');
let modal_container = document.getElementById('modal-container');
let close_modal = document.getElementById('close_modal')
let close_icon = document.getElementById('close_icon')


open_modal.addEventListener('click', function() {
	modal_container.classList.add('show');
});

close_modal.addEventListener('click', function() {
	modal_container.classList.remove('show');
});

close_icon.addEventListener('click', function() {
	modal_container.classList.remove('show');
});


let open_modal2 = document.getElementById('open_modal2');
let modal_container2 = document.getElementById('modal-container2');
let close_modal2 = document.getElementById('close_modal2')
let close_icon2 = document.getElementById('close_icon2')


open_modal2.addEventListener('click', function() {
	// console.log('working')
	modal_container2.classList.add('show');
});

close_modal2.addEventListener('click', function() {
	modal_container2.classList.remove('show');
});

close_icon2.addEventListener('click', function() {
	modal_container2.classList.remove('show');
});


let open_modal3 = document.getElementById('open_modal3');
let modal_container3 = document.getElementById('modal-container3');
let close_modal3 = document.getElementById('close_modal3')
let close_icon3 = document.getElementById('close_icon3')


open_modal3.addEventListener('click', function() {
	// console.log('working')
	modal_container3.classList.add('show');
});

close_modal3.addEventListener('click', function() {
	modal_container3.classList.remove('show');
});

close_icon3.addEventListener('click', function() {
	modal_container3.classList.remove('show');
});


let open_modal4 = document.getElementById('open_modal4');
let modal_container4 = document.getElementById('modal-container4');
let close_modal4 = document.getElementById('close_modal4')
let close_icon4 = document.getElementById('close_icon4')


open_modal4.addEventListener('click', function() {
	// console.log('working')
	modal_container4.classList.add('show');
});

close_modal4.addEventListener('click', function() {
	modal_container4.classList.remove('show');
});

close_icon4.addEventListener('click', function() {
	modal_container4.classList.remove('show');
});

let open_modal5 = document.getElementById('open_modal5');
let modal_container5 = document.getElementById('modal-container5');
let close_modal5 = document.getElementById('close_modal5')
let close_icon5 = document.getElementById('close_icon5')


open_modal5.addEventListener('click', function() {
	// console.log('working')
	modal_container5.classList.add('show');
});

close_modal5.addEventListener('click', function() {
	modal_container5.classList.remove('show');
});

close_icon5.addEventListener('click', function() {
	modal_container5.classList.remove('show');
});

let open_modal6 = document.getElementById('open_modal6');
let modal_container6 = document.getElementById('modal-container6');
let close_modal6 = document.getElementById('close_modal6')
let close_icon6 = document.getElementById('close_icon6')


open_modal6.addEventListener('click', function() {
	// console.log('working')
	modal_container6.classList.add('show');
});

close_modal6.addEventListener('click', function() {
	modal_container6.classList.remove('show');
});

close_icon6.addEventListener('click', function() {
	modal_container6.classList.remove('show');
});

let open_modal7 = document.getElementById('open_modal7');
let modal_container7 = document.getElementById('modal-container7');
let close_modal7 = document.getElementById('close_modal7')
let close_icon7 = document.getElementById('close_icon7')


open_modal7.addEventListener('click', function() {
	// console.log('working')
	modal_container7.classList.add('show');
});

close_modal7.addEventListener('click', function() {
	modal_container7.classList.remove('show');
});

close_icon7.addEventListener('click', function() {
	modal_container7.classList.remove('show');
});

// end: modal logic


