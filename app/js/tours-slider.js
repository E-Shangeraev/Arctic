$(function () {
  $('.tours__list').slick({
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
});
