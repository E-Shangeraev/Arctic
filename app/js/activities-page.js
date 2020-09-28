import Tabs from './Tabs.js';

document.addEventListener('DOMContentLoaded', () => {
    const activitiesNav = document.querySelector('.activities-header__nav');
    const activitiesTabsHeader = document.querySelector('.tabs');
    const activitiesTabsContent = document.querySelector('.activities-page__wrapper');

    const activitiesHeader = new Tabs(activitiesNav, activitiesTabsHeader, 'button');
    const activitiesContent = new Tabs(activitiesNav, activitiesTabsContent, 'button');

    const activitiesPageNavList = document.querySelectorAll('.activities-page__nav-list');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 1100) {
            activitiesPageNavList.forEach(item => {
                item.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 18%;
                `;
            });
        } else {
            activitiesPageNavList.forEach(item => item.style.position = '');
        }
        if (window.pageYOffset > 2000) {
            activitiesPageNavList.forEach(item => {
                item.style.cssText = `
                    position: absolute;
                    left: 0;
                    bottom: 0;
                `;
            });
        }
    });
});




// const actHeaderNavBtn = document.querySelectorAll('.activities-header__nav-button');

// const actPageContainer = document.querySelectorAll('.activities-page__container');
// const natContainer = document.querySelector('.natural__container');
// const animContainer = document.querySelector('.animals__container');
// const monumContainer = document.querySelector('.monuments__container');
// const btnText = document.querySelector('.button-text--activities');



// actHeaderNavBtn.forEach((btn, i, arr) => {
//     arr[0].classList.add('activities-header__nav-button--active');

//     const removeClass = array => {
//         for (let item of array) {
//             item.classList.remove('activities-header__nav-button--active');
//         }
//     };
//     const addClass = () => {
//         btn.classList.add('activities-header__nav-button--active');
//     };

//     const showContainer = (cont, containers) => {
//         for (let item of containers) {
//             // item.classList.add('visually-hidden');
//             item.style.display = 'none';
//         }
//         // cont.classList.remove('visually-hidden');
//         cont.style.display = '';
//     };

//     showContainer(natContainer, actPageContainer);

//     btn.addEventListener('click', () => {
//         removeClass(arr);
//         addClass();

//         if (btn.classList.contains('nav-button--natural')) {
//             showContainer(natContainer, actPageContainer);
//             btnText.textContent = 'Подробнее о природе';
//         }
//         if (btn.classList.contains('nav-button--animals')) {
//             showContainer(animContainer, actPageContainer);
//             btnText.textContent = 'Подробнее о животных';
//         }
//         if (btn.classList.contains('nav-button--monuments')) {
//             showContainer(monumContainer, actPageContainer);
//             btnText.textContent = 'Подробнее о памятниках';
//         }
//     });
// });

