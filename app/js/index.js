$(function () {
  const aside = document.querySelector('.aside');

  $.scrollify({
    section: '.scrollify',
    scrollSpeed: 50,
  });

  document.addEventListener('scroll', () => {
    const curSection = $.scrollify.current().data('section');
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
