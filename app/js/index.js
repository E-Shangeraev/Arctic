$(function () {
  const aside = document.querySelector('.aside');
  const scrollIndicatorFill = document.querySelector('.scroll-indicator__line--fill');
  const scrollIndicatorNumber = document.querySelector('.scroll-indicator__number');

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
});
