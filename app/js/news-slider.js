$(function () {
  $('.articles-section__list').slick({
    arrows: true,
    autoplay: false,
    rows: 2,
    slidesToShow: 2,
    speed: 800,
    cssEase: 'ease-in-out',
    infinite: false,
    pauseOnHover: false,
    waitForAnimate: true,
    appendArrows: '.news__arrows',
  });
});
