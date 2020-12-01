$(function () {
  $('.slider__block').slick({
    arrows: true,
    appendArrows: $('.slider__arrows'),
    autoplay: false,
    autoplaySpeed: 8000,
    speed: 1400,
    cssEase: 'ease-in-out',
    pauseOnHover: false,
    waitForAnimate: true,
  });

  const slides = document.querySelectorAll('.slide');
  const sliderCountCurrent = document.querySelector('.slider__count--current');
  const sliderArrows = document.querySelector('.slider__arrows');
  const slideFloatings = document.querySelectorAll('.slide__floating');

  const setCurrentSlideCount = () => {
    slideFloatings.forEach((item) => {
      item.classList.remove('slide__floating--animate');
    });

    slides.forEach((slide) => {
      const currentFloating = document.querySelector('.slick-current .slide__floating');

      if (slide.classList.contains('slick-current')) {
        sliderCountCurrent.textContent = '0' + slide.dataset.index;
        setTimeout(() => currentFloating.classList.add('slide__floating--animate'), 1500);
      }
    });
  };

  setCurrentSlideCount();

  $('.slider__block').on('afterChange', function (slick, slide) {
    setCurrentSlideCount();
  });

  // slides.forEach((slide) => {
  //   slide.addEventListener('afterChange', setCurrentSlideCount);
  // });

  // $('.slider > .slide').on('afterChange', setCurrentSlideCount);
  // setInterval(() => setCurrentSlideCount(), 10000);

  sliderArrows.addEventListener('click', setCurrentSlideCount);
});
