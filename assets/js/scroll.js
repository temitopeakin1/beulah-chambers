// btn scroll

const btnScrollToTop = document.getElementById('btnScrollToTop');

btnScrollToTop.addEventListener('click', function() {
 
    $("html, body").animate({ scrollTop: 0 }, 'slow');
 

    if(this.scrollY > 500){
        $('#btnScrollToTop').add("show");
    } else {
        $('#btnScrollToTop').remove("show");
    }
});

// btn scroll


