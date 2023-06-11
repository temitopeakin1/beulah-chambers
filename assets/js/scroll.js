// btn scroll

const btnScrollToTop = document.getElementById("btnScrollToTop");

btnScrollToTop.addEventListener("click", function () {
  $("html, body").animate({ scrollTop: 0 }, "slow");

  if (this.scrollY > 20) {
    $("#btnScrollToTop").add("show");
  } else {
    $("#btnScrollToTop").remove("show");
  }
});

// btn scroll

// Get the button element
// var btnScrollToTop = document.getElementById('btnScrollToTop');

// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     btnScrollToTop.style.display = 'block';
//   } else {
//     btnScrollToTop.style.display = 'none';
//   }
// };

// // When the user clicks on the button, scroll to the top of the document
// btnScrollToTop.addEventListener('click', function() {
//   document.body.scrollTop = 0; // For Safari
//   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
// });
