'use strict';

export default class Tabs {
  constructor(buttonsContainer, tabs, target) {
    this.buttonsContainer = buttonsContainer;
    this.tabs = tabs;
    this.target = target;

    this.buttonsContainer.addEventListener('click', (e) => {
      if (e.target.getAttribute('data-value')) {
        for (let item of this.buttonsContainer.children) {
          item.classList.remove('active-tab');
        }
        e.target.classList.add('active-tab');
        const index = e.target.closest(this.target).dataset.value;

        this.openTab(index);
      }
    });
  }
  openTab(index) {
    this.tabs
      .querySelectorAll('.active-tab')
      .forEach((item) => item.classList.remove('active-tab'));
    this.tabs
      .querySelectorAll(`.tab--${index}`)
      .forEach((item) => item.classList.add('active-tab'));
  }
}
