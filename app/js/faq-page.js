// window.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.faq__item'),
          tabsContent = document.querySelectorAll('.faq__answers'),
          tabsParent = document.querySelector('.faq__list');

    function hideTabContent() {
        tabsContent.forEach(item => {
            item.classList.add('visually-hidden');
            item.classList.remove('show', 'fade');
        });

        tabs.forEach(item => {
            item.classList.remove('faq__item--active');
        });
    }

    function showTabContent(i = 0) {
        tabsContent[i].classList.add('show', 'fade');
        tabsContent[i].classList.remove('visually-hidden');
        tabs[i].classList.add('faq__item--active');
    }

    hideTabContent();
    showTabContent();

    tabsParent.addEventListener('click', (event) => {
        const target = event.target;

        if (target && target.classList.contains('faq__item')) {
            tabs.forEach((item, i) => {
                if (target == item) {
                    hideTabContent();
                    showTabContent(i); 
                }
            });
        }
    });
// });