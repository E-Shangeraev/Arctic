$(function () {
  $('#tours').slick({
    arrows: true,
    autoplay: false,
    slidesToShow: 3,
    speed: 800,
    cssEase: 'ease-in-out',
    infinite: false,
    pauseOnHover: false,
    waitForAnimate: true,
    appendArrows: '.tours__arrows',
  });

  $('#excursion').slick({
    arrows: true,
    autoplay: false,
    slidesToShow: 3,
    speed: 800,
    cssEase: 'ease-in-out',
    infinite: false,
    pauseOnHover: false,
    waitForAnimate: true,
    appendArrows: '.excursion__arrows',
  });
});
