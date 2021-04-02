document.addEventListener('DOMContentLoaded', () => {
  $(function () {
    const aside = document.querySelector('.aside');
    const scrollIndicatorFill = document.querySelector('.scroll-indicator__line--fill');
    const scrollIndicatorNumber = document.querySelector('.scroll-indicator__number');
    const scrollIndicatorTotal = document.querySelector('.scroll-indicator__number--total');
    const sections = document.querySelectorAll('section');

    const nav = document.querySelector('nav');
    const eye = document.querySelector('.eye img');
    const logo = document.querySelector('.logo img');

    // Определение имени текущей страницы
    const path = (pathName) => pathName.split('/').pop().split('#');
    const fileName = path(window.location.href)[0];
    let curSection = path(window.location.href)[1];
    // ==================================

    if (
      fileName.split('?')[0] === 'article.php' ||
      fileName.split('?')[0] === 'article_event.php' ||
      fileName.split('?')[0] === 'category.php' ||
      fileName.split('?')[0] === 'article_useful.php' ||
      fileName.split('?')[0] === 'article_tours.php'
    ) {
      aside.classList.add('aside--black');
      nav.classList.remove('white');
      nav.classList.add('black');
      nav.style.cssText = `
        position: relative;
        padding: 20px 0;
        margin: 0;
      `;
      eye.src = 'img/header/eye-black.svg';
      logo.src = 'img/header/logo-dark.png';
    }

    const fill = 100 / +scrollIndicatorTotal.textContent;
    scrollIndicatorFill.style.height = `${fill * 1}%`;

    console.log(document.body.clientWidth);

    $.scrollify({
      section: '.scrollify',
      scrollSpeed: 50,
      after: function () {
        curSection = $.scrollify.current().data('section');
        scrollIndicatorFill.style.height = `${fill * curSection}%`;
        if (curSection < 10) {
          scrollIndicatorNumber.textContent = `0${curSection}`;
        } else {
          scrollIndicatorNumber.textContent = `${curSection}`;
        }

        if (fileName === 'index.php' || fileName === '') {
          setBlackBySectionNum(2, 3, 4, 5, 6, 7);
        }
        if (fileName === 'news.php') {
          setBlackBySectionNum(2);
        }
        if (fileName === 'norilsk.php') {
          setBlackBySectionNum(2, 3);
        }
        if (fileName === 'contacts.php') {
          setBlackBySectionNum(2, 3, 4, 5, 6, 7, 8);
        }
        if (fileName === 'flora&fauna.php') {
          setBlackBySectionNum(2, 3);
        }
        if (fileName === 'tourist.php') {
          setBlackBySectionNum(2, 4);
        }
        if (fileName === 'tours.php') {
          setBlackBySectionNum(2, 3, 4);
        }
        if (fileName === 'events.php') {
          setBlackBySectionNum(2);
        }
        if (fileName.split('?')[0] === 'category.php') {
          console.log(strval(fileName.split('?')[0]));
          setBlackBySectionNum(1);
        }
      },
    });

    if (document.body.clientWidth <= 768) {
      $.scrollify.disable();
    }

    function setBlackBySectionNum(...sectionNum) {
      for (let num of sectionNum) {
        if (curSection === num) {
          setTimeout(() => {
            aside.classList.add('aside--black');
            nav.classList.remove('white');
            nav.classList.add('black');
            eye.src = 'img/header/eye-black.svg';
            logo.src = 'img/header/logo-dark.png';
          }, 300);
          return;
        } else {
          setTimeout(() => {
            aside.classList.remove('aside--black');
            nav.classList.add('white');
            nav.classList.remove('black');
            eye.src = 'img/header/eye.svg';
            logo.src = 'img/header/logo.png';
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

    // document.addEventListener('scroll', () => {
    //   if (document.documentElement.clientWidth <= 460) {
    //     sections.forEach((section) => {
    //       if (elementInViewport(section)) {
    //         const dif = window.pageYOffset - section.offsetTop;
    //         if (dif > 50) {
    //           aside.classList.add('aside--out');
    //           aside.style.opacity = 0;
    //         } else {
    //           aside.classList.remove('aside--out');
    //           aside.style.opacity = 1;
    //         }
    //       }
    //     });
    //   }
    // });
  });
});
