$(function () {
  $('.adventure__slider').slick({
    arrows: true,
    autoplay: false,
    speed: 1000,
    fade: true,
    pauseOnHover: false,
    waitForAnimate: false,
    dots: true,
    // dotsClass: 'adventure__slider-line',
    appendDots: '.adventure__slider-line',
  });
  $('.facts-1__slider').slick({
    arrows: true,
    autoplay: false,
    speed: 1000,
    fade: true,
    pauseOnHover: false,
    waitForAnimate: true,
  });
});
