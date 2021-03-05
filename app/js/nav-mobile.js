const burger = document.querySelector('.aside__burger');
const close = document.querySelector('.nav__close');
const navMobile = document.querySelector('.nav-mobile');

burger.addEventListener('click', () => {
  navMobile.classList.add('nav-mobile--opened');
  document.body.style.cssText = `
    overflow-y: hidden;

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

const aside = document.querySelector('.aside');
let scrollPrev = 0;

$(window).scroll(function () {
  var scrolled = $(window).scrollTop();

  if (scrolled > 100 && scrolled > scrollPrev) {
    aside.classList.add('aside--out');
  } else {
    aside.classList.remove('aside--out');
  }
  scrollPrev = scrolled;
});
