document.addEventListener('DOMContentLoaded', () => {
  $(function () {
    const aside = document.querySelector('.aside');
    const scrollIndicatorFill = document.querySelector('.scroll-indicator__line--fill');
    const scrollIndicatorNumber = document.querySelector('.scroll-indicator__number');
    const scrollIndicatorTotal = document.querySelector('.scroll-indicator__number--total');
    const sections = document.querySelectorAll('section');

    const nav = document.querySelector('nav');
    const eye = document.querySelector('.eye img');

    $.scrollify({
      section: '.scrollify',
      scrollSpeed: 50,
    });

    // Определение имени текущей страницы

    const path = (pathName) => pathName.split('/').pop().split('#');
    const fileName = path(window.location.href)[0];
    let curSection = path(window.location.href)[1];

    // ==================================

    const fill = 100 / scrollIndicatorTotal.textContent;
    scrollIndicatorFill.style.height = `${fill * 1}%`;

    document.addEventListener('scroll', () => {
      curSection = $.scrollify.current().data('section');

      scrollIndicatorFill.style.height = `${fill * curSection}%`;
      scrollIndicatorNumber.textContent = `0${curSection}`;

      if (
        curSection === 2 ||
        curSection === 3 ||
        curSection === 4 ||
        curSection === 5 ||
        curSection === 7
      ) {
        setTimeout(() => {
          aside.classList.add('aside--black');
          nav.classList.remove('white');
          nav.classList.add('black');
          eye.src = 'img/header/eye-black.svg';
        }, 300);
      } else {
        setTimeout(() => {
          aside.classList.remove('aside--black');
          nav.classList.add('white');
          nav.classList.remove('black');
          eye.src = 'img/header/eye.svg';
        }, 300);
      }
    });

    function elementInViewport(el) {
      var top = el.offsetTop;
      var left = el.offsetLeft;
      var width = el.offsetWidth;
      var height = el.offsetHeight;

      while (el.offsetParent) {
        el = el.offsetParent;
        top += el.offsetTop;
        left += el.offsetLeft;
      }

      return (
        top < window.pageYOffset + window.innerHeight &&
        left < window.pageXOffset + window.innerWidth &&
        top + height > window.pageYOffset &&
        left + width > window.pageXOffset
      );
    }

    if (document.documentElement.clientWidth <= 460) {
      // $.scrollify.disable();
    }

    document.addEventListener('scroll', () => {
      if (document.documentElement.clientWidth <= 460) {
        sections.forEach((section) => {
          if (elementInViewport(section)) {
            const dif = window.pageYOffset - section.offsetTop;
            if (dif > 50) {
              aside.classList.add('aside--out');
              aside.style.opacity = 0;
            } else {
              aside.classList.remove('aside--out');
              aside.style.opacity = 1;
            }
          }
        });
      }
    });
  });
});
