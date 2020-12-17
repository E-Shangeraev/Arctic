$(function () {
  $('.adventure__slider').slick({
    arrows: true,
    autoplay: false,
    speed: 1000,
    fade: true,
    pauseOnHover: false,
    waitForAnimate: false,
    dots: true,
    appendDots: '.adventure__line',
    appendArrows: '.adventure__arrows',
  });

  const arrowNext = document.querySelector('.adventure__arrows .slick-next');
  const arrowPrev = document.querySelector('.adventure__arrows .slick-prev');
  const points = document.querySelectorAll('.adventure__line li:not(:first-child) button');
  const slideCurrent = document.querySelector('.adventure__slide-current');

  arrowNext.addEventListener('click', () => {
    const activePoint = document.querySelector(
      '.adventure__line li:not(:nth-child(2)).slick-active',
    );
    const current = document.querySelector('.adventure__line li.slick-active button').textContent;
    slideCurrent.textContent = `0${current}`;

    if (current > 2) {
      activePoint.previousElementSibling.children[0].style.backgroundColor = '#26c9c9';
    }
    if (current === '1') {
      points.forEach((p) => (p.style.backgroundColor = '#c1c1c1'));
    }
  });

  arrowPrev.addEventListener('click', () => {
    const activePoint = document.querySelector('.adventure__line .slick-active');
    const current = document.querySelector('.adventure__line li.slick-active button').textContent;
    slideCurrent.textContent = `0${current}`;

    if (current === '7') {
      points.forEach((p) => (p.style.backgroundColor = '#26c9c9'));
    }
    if (current < 7) {
      activePoint.nextElementSibling.children[0].style.backgroundColor = '#c1c1c1';
    }
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
