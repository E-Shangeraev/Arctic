'use strict';

export default class Tabs {
    constructor(buttonsContainer, tabs) {
        this.buttonsContainer = buttonsContainer;
        this.tabs = tabs;

        this.buttonsContainer.addEventListener('click', e => {
            if (e.target.getAttribute('data-value')) {
                for (let item of this.buttonsContainer.children) {
                    item.classList.remove('active');
                }
                e.target.classList.add('active');
                const index = e.target.closest('li').dataset.value;

                this.openTab(index);
            }
        });
    }
    openTab(index) {
        this.tabs.querySelector('.active').classList.remove('active');
        this.tabs.querySelector(`.tab--${index}`).classList.add('active');
    }
}
