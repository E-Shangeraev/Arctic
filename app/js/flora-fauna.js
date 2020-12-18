$(function () {
  $('.nature__slider-block').slick({
    arrows: true,
    appendArrows: '.nature__arrows',
    autoplay: false,
    speed: 1000,
    fade: true,
    pauseOnHover: false,
    waitForAnimate: false,
  });

  $('.facts-1__slider-block').slick({
    arrows: true,
    autoplay: false,
    speed: 1000,
    fade: true,
    pauseOnHover: false,
    waitForAnimate: false,
    appendArrows: '.facts-1__arrows',
  });
});
