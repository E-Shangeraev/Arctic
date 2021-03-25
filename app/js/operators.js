// window.addEventListener('DOMContentLoaded', () => {
const tabs = document.querySelectorAll('.operators__item'),
  tabsContent = document.querySelectorAll('.operators__desc'),
  tabsParent = document.querySelector('.operators__list');

function hideTabContent() {
  tabsContent.forEach((item) => {
    item.classList.add('visually-hidden');
    item.style.display = 'none';
    item.classList.remove('show', 'fade');
  });

  tabs.forEach((item) => {
    item.classList.remove('operators__item--active');
  });
}

function showTabContent(i = 0) {
  tabsContent[i].classList.add('show', 'fade');
  tabsContent[i].classList.remove('visually-hidden');
  tabsContent[i].style.display = '';
  tabs[i].classList.add('operators__item--active');
}

hideTabContent();
showTabContent();

tabsParent.addEventListener('click', (event) => {
  const target = event.target;

  if (target && target.classList.contains('operators__item')) {
    tabs.forEach((item, i) => {
      if (target == item) {
        hideTabContent();
        showTabContent(i);
      }
    });
  } else {
    // hideTabContent();
  }
});
// });
