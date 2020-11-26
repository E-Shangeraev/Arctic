$(document).ready(function () {
  $('.slider__block').slick({
    arrows: true,
    appendArrows: $('.slider__arrows'),
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 1000,
    cssEase: 'ease-in-out',
    pauseOnHover: false,
  });

  const slides = document.querySelectorAll('.slide');
  const sliderCountCurrent = document.querySelector('.slider__count--current');
  const sliderArrows = document.querySelector('.slider__arrows');

  const setCurrentSlideCount = () => {
    slides.forEach((slide) =>
      slide.classList.contains('slick-current')
        ? (sliderCountCurrent.textContent = '0' + slide.dataset.index)
        : null,
    );
  };

  sliderArrows.addEventListener('click', setCurrentSlideCount);
});
