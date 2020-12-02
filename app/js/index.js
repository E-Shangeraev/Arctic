$(function () {
  const aside = document.querySelector('.aside');
  const scrollIndicatorFill = document.querySelector('.scroll-indicator__line--fill');
  const scrollIndicatorNumber = document.querySelector('.scroll-indicator__number');
  const sections = document.querySelectorAll('section');
  const burger = document.querySelector('.aside__burger');
  const close = document.querySelector('.nav__close');
  const navMobile = document.querySelector('.nav-mobile');

  $.scrollify({
    section: '.scrollify',
    scrollSpeed: 50,
  });

  document.addEventListener('scroll', () => {
    const curSection = $.scrollify.current().data('section');

    scrollIndicatorFill.style.height = `${12.5 * curSection}%`;
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
      }, 300);
    } else {
      setTimeout(() => {
        aside.classList.remove('aside--black');
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

  document.addEventListener('scroll', () => {
    if (document.documentElement.clientWidth <= 400) {
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

  burger.addEventListener('click', () => {
    navMobile.classList.add('nav-mobile--opened');
    document.body.style.cssText = `
      overflow-y: hidden;
      position: fixed;
    `;
    setTimeout(() => {
      close.style.transform = 'scale(1)';
    }, 300);
  });
  close.addEventListener('click', () => {
    close.style.transform = 'scale(0)';
    setTimeout(() => {
      navMobile.classList.remove('nav-mobile--opened');
    }, 500);
    document.body.style.overflowY = '';
    document.body.style.position = '';
  });
});
