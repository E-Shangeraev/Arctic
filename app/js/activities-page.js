const actHeaderNavBtn = document.querySelectorAll('.activities-header__nav-button');

const actPageContainer = document.querySelectorAll('.activities-page__container');
const natContainer = document.querySelector('.natural__container');
const animContainer = document.querySelector('.animals__container');
const monumContainer = document.querySelector('.monuments__container');



actHeaderNavBtn.forEach((btn, i, arr) => {
    arr[0].classList.add('activities-header__nav-button--active');

    const removeClass = (array) => {
        for (let item of array) {
            item.classList.remove('activities-header__nav-button--active');
        }
    };
    const addClass = () => {
        btn.classList.add('activities-header__nav-button--active');
    };

    const showContainer = (cont, containers) => {
        for (let item of containers) {
            item.classList.add('visually-hidden');
        }
        cont.classList.remove('visually-hidden');
    };

    btn.addEventListener('click', () => {
        removeClass(arr);
        addClass();

        if (btn.classList.contains('nav-button--natural')) {
            showContainer(natContainer, actPageContainer);
        }
        if (btn.classList.contains('nav-button--animals')) {
            showContainer(animContainer, actPageContainer);
        }
        if (btn.classList.contains('nav-button--monuments')) {
            showContainer(monumContainer, actPageContainer);
        }
    });
});
