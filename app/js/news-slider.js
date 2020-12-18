$(function () {
  $('.articles-section__list').slick({
    arrows: true,
    autoplay: false,
    rows: 2,
    slidesPerRow: 2,
    speed: 1400,
    cssEase: 'ease-in-out',
    pauseOnHover: false,
    waitForAnimate: true,
    // appendArrows: '.news__arrows',
  });
});
