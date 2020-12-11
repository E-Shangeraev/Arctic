'use strict';

export default class Tabs {
  constructor(buttonsContainer, tabs, target) {
    this.buttonsContainer = buttonsContainer;
    this.tabs = tabs;
    this.target = target;

    this.buttonsContainer.addEventListener('click', (e) => {
      if (e.target.getAttribute('data-value')) {
        for (let item of this.buttonsContainer.children) {
          console.log(item);
          item.classList.remove('active-tab');
        }
        e.target.classList.add('active-tab');
        const index = e.target.closest(this.target).dataset.value;

        this.openTab(index);
      }
    });
  }
  openTab(index) {
    // this.tabs.querySelector('.active').classList.remove('active');
    // this.tabs.querySelector(`.tab--${index}`).classList.add('active');

    this.tabs.querySelectorAll('.active-tab').forEach((item) => {
      item.classList.remove('active-tab');
      // $(function () {
      //   $('.articles-section__list').slick('resize');
      // });
    });
    this.tabs.querySelectorAll(`.tab--${index}`).forEach((item) => {
      item.classList.add('active-tab');
      // $(function () {
      //   // $('.articles-section__list').slick({
      //   //   arrows: true,
      //   //   // appendArrows: $('.slider__arrows'),
      //   //   autoplay: false,
      //   //   rows: 2,
      //   //   slidesPerRow: 2,
      //   //   speed: 1400,
      //   //   cssEase: 'ease-in-out',
      //   //   pauseOnHover: false,
      //   //   waitForAnimate: true,
      //   // });
      //   $('.articles-section__list').slick('resize');
      // });
    });
  }
}
