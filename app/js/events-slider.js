$(function () {
  $('.events__slider').slick({
    arrows: true,
    autoplay: false,
    slidesToShow: 3,
    speed: 800,
    cssEase: 'ease-in-out',
    pauseOnHover: false,
    waitForAnimate: true,
    appendArrows: '.events__arrows',
  });
  // .on('setPosition', function (event, slick) {
  //   slick.$slides.css('height', slick.$slideTrack.height() + 'px');
  // });
});
