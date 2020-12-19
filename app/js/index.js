document.addEventListener('DOMContentLoaded', () => {
  $(function () {
    const aside = document.querySelector('.aside');
    const scrollIndicatorFill = document.querySelector('.scroll-indicator__line--fill');
    const scrollIndicatorNumber = document.querySelector('.scroll-indicator__number');
    const scrollIndicatorTotal = document.querySelector('.scroll-indicator__number--total');
    const sections = document.querySelectorAll('section');

    const nav = document.querySelector('nav');
    const eye = document.querySelector('.eye img');

    // Определение имени текущей страницы
    const path = (pathName) => pathName.split('/').pop().split('#');
    const fileName = path(window.location.href)[0];
    let curSection = path(window.location.href)[1];
    // ==================================

    if (fileName.split('?')[0] === 'article.php') {
      aside.classList.add('aside--black');
      nav.classList.remove('white');
      nav.classList.add('black');
      nav.style.cssText = `
        position: relative;
        padding: 20px 0;
        margin: 0;
      `;
      eye.src = 'img/header/eye-black.svg';
    }

    const fill = 100 / scrollIndicatorTotal.textContent;
    scrollIndicatorFill.style.height = `${fill * 1}%`;

    $.scrollify({
      section: '.scrollify',
      scrollSpeed: 50,
      after: function () {
        curSection = $.scrollify.current().data('section');
        scrollIndicatorFill.style.height = `${fill * curSection}%`;
        scrollIndicatorNumber.textContent = `0${curSection}`;

        if (fileName === 'index.php' || fileName === '') {
          console.log(fileName);
          setBlackBySectionNum(2, 3, 4, 5, 7);
        }
        if (fileName === 'news.php') {
          console.log(fileName);
          setBlackBySectionNum(2, 3);
        }
        if (fileName === 'norilsk.php') {
          setBlackBySectionNum(2, 3, 4, 5, 6, 7);
        }
        if (fileName === 'center.php') {
          setBlackBySectionNum(2, 3, 4, 5, 6);
        }
        if (fileName === 'flora&fauna.php') {
          setBlackBySectionNum(2, 3);
        }
        if (fileName === 'tourist.php') {
          setBlackBySectionNum(2, 4);
        }
        if (fileName.split('?')[0] === 'article.php') {
          console.log('000');
          setBlackBySectionNum(1);
        }
      },
    });

    function setBlackBySectionNum(...sectionNum) {
      for (let num of sectionNum) {
        if (curSection === num) {
          setTimeout(() => {
            aside.classList.add('aside--black');
            nav.classList.remove('white');
            nav.classList.add('black');
            eye.src = 'img/header/eye-black.svg';
          }, 300);
          return;
        } else {
          setTimeout(() => {
            aside.classList.remove('aside--black');
            nav.classList.add('white');
            nav.classList.remove('black');
            eye.src = 'img/header/eye.svg';
          }, 300);
        }
      }
    }

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
      $.scrollify.disable();
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
