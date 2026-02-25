(function() {
  document.addEventListener('DOMContentLoaded', function() {
    var track = document.querySelector('.hero-slider__track');
    var slides = document.querySelectorAll('.hero-slide');
    var prevBtn = document.querySelector('.hero-slider__prev');
    var nextBtn = document.querySelector('.hero-slider__next');
    var dotsContainer = document.querySelector('.hero-slider__dots');
    var captionHeading = document.getElementById('hero-caption-heading');
    var captionDesc = document.getElementById('hero-caption-desc');
    var captionBtn = document.getElementById('hero-caption-btn');

    if (!track || !slides.length) return;

    var total = slides.length;
    var current = 0;
    var autoplayDelay = 6000;
    var autoplayTimer = null;
    var percentPerSlide = 100 / total;

    function updateCaption(slideEl) {
      if (!slideEl || !captionHeading) return;
      var heading = slideEl.getAttribute('data-heading') || '';
      var desc = slideEl.getAttribute('data-desc') || '';
      var btnText = slideEl.getAttribute('data-btn') || 'Learn More';
      var href = slideEl.getAttribute('data-href') || '#';
      captionHeading.textContent = heading;
      if (captionDesc) captionDesc.textContent = desc;
      if (captionBtn) {
        captionBtn.textContent = btnText;
        captionBtn.href = href;
      }
    }

    function goTo(index) {
      current = (index + total) % total;
      track.style.transform = 'translate3d(-' + (current * percentPerSlide) + '%, 0, 0)';
      slides.forEach(function(s, i) {
        s.classList.toggle('active', i === current);
      });
      updateCaption(slides[current]);
      if (dotsContainer) {
        var dots = dotsContainer.querySelectorAll('button');
        dots.forEach(function(d, i) {
          d.classList.toggle('active', i === current);
        });
      }
      resetAutoplay();
    }

    function next() {
      goTo(current + 1);
    }

    function prev() {
      goTo(current - 1);
    }

    function resetAutoplay() {
      if (autoplayTimer) clearTimeout(autoplayTimer);
      autoplayTimer = setTimeout(next, autoplayDelay);
    }

    if (dotsContainer) {
      for (var i = 0; i < total; i++) {
        var btn = document.createElement('button');
        btn.type = 'button';
        btn.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        if (i === 0) btn.classList.add('active');
        (function(idx) {
          btn.addEventListener('click', function() { goTo(idx); });
        })(i);
        dotsContainer.appendChild(btn);
      }
    }

    if (prevBtn) prevBtn.addEventListener('click', prev);
    if (nextBtn) nextBtn.addEventListener('click', next);

    goTo(0);
  });
})();
