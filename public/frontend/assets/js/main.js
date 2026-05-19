(function ($) {
  'use strict';

  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 50) {
      $('.site-header').addClass('sticky');
    } else {
      $('.site-header').removeClass('sticky');
    }
  });

  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 850, once: true, offset: 80 });
  }

  if ($('.hero-swiper').length && typeof Swiper !== 'undefined') {
    new Swiper('.hero-swiper', {
      loop: true,
      effect: 'fade',
      speed: 900,
      autoplay: { delay: 5200, disableOnInteraction: false },
      pagination: { el: '.hero-swiper .swiper-pagination', clickable: true }
    });
  }

  if ($('.bag-type-swiper').length && typeof Swiper !== 'undefined') {
    new Swiper('.bag-type-swiper', {
      loop: true,
      spaceBetween: 22,
      autoplay: { delay: 2600, disableOnInteraction: false },
      navigation: { nextEl: '.bag-type-swiper .swiper-button-next', prevEl: '.bag-type-swiper .swiper-button-prev' },
      breakpoints: { 0:{ slidesPerView:1 }, 576:{ slidesPerView:2 }, 768:{ slidesPerView:3 }, 1200:{ slidesPerView:4 } }
    });
  }

  if ($('.testimonial-swiper').length && typeof Swiper !== 'undefined') {
    new Swiper('.testimonial-swiper', {
      loop: true,
      spaceBetween: 24,
      autoplay: { delay: 3500, disableOnInteraction: false },
      pagination: { el: '.testimonial-swiper .swiper-pagination', clickable: true },
      breakpoints: { 0:{ slidesPerView:1 }, 768:{ slidesPerView:2 }, 1200:{ slidesPerView:3 } }
    });
  }

  $('.filter-btn').on('click', function () {
    var filter = $(this).data('filter');
    $('.filter-btn').removeClass('active');
    $(this).addClass('active');
    $('.gallery-item').each(function () {
      var category = $(this).data('category');
      if (filter === 'all' || filter === category) {
        $(this).removeClass('hide').hide().fadeIn(260);
      } else {
        $(this).fadeOut(180, function () { $(this).addClass('hide'); });
      }
    });
  });

  var countersDone = false;
  function runCounters() {
    if (countersDone || !$('.counter').length) return;
    var winBottom = $(window).scrollTop() + $(window).height();
    var sectionTop = $('.counter').first().offset().top;
    if (winBottom > sectionTop) {
      countersDone = true;
      $('.counter').each(function () {
        var $this = $(this);
        $({ countNum: 0 }).animate({ countNum: Number($this.data('count')) || 0 }, {
          duration: 1800,
          easing: 'swing',
          step: function () { $this.text(Math.floor(this.countNum)); },
          complete: function () { $this.text(this.countNum); }
        });
      });
    }
  }
  $(window).on('scroll load', runCounters);

  $('.quote-form').on('submit', function (e) {
    e.preventDefault();
    $(this).find('.form-note').text('Thanks! This front-end demo captured your request. Connect a backend to send it.');
  });

  $('.newsletter-form').on('submit', function (e) {
    e.preventDefault();
    var $input = $(this).find('input');
    $input.val('').attr('placeholder', 'Thanks for joining!');
  });

  $('.year').text(new Date().getFullYear());
})(jQuery);
