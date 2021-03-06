function attractions(section) {
  const attractionCards = document.querySelector(`${section} .attractions__cards`);
  const cards = document.querySelectorAll(`${section} .attractions__card`);
  const checkbox = document.querySelectorAll(`${section} input[type="checkbox"]`);
  const attractionsMoreText = document.querySelectorAll(`${section} .attractions__text`);

  checkbox.forEach((cb) => {
    cb.addEventListener('change', function (e) {
      if (!e.target.closest(`${section} input[type="checkbox"]`)) return;

      const label = this.previousElementSibling;
      const card = this.parentElement;

      if (!this.checked) {
        label.textContent = 'Скрыть';
        card.classList.add('attractions__card--opened');
        hideCards();
      } else {
        label.textContent = 'Узнать больше';
        showCards();
      }
    });
  });

  function hideCards() {
    attractionCards.classList.add('attractions__cards--opened');
    cards.forEach((card) => {
      if (!card.classList.contains('attractions__card--opened')) {
        card.classList.add('attractions__card--hide');
        card.style.display = 'none';
      } else {
        showMoreText(card);
      }
    });
  }

  function showCards() {
    attractionCards.classList.remove('attractions__cards--opened');
    cards.forEach((card) => {
      card.classList.remove('attractions__card--opened');
      card.classList.remove('attractions__card--hide');
      card.style.display = 'flex';
      hideMoreText();
    });
  }

  function showMoreText(card) {
    attractionsMoreText.forEach((text) => {
      if (card.id === text.dataset.textId) {
        text.style.display = 'block';
      }
    });
  }

  function hideMoreText() {
    attractionsMoreText.forEach((text) => {
      text.style.display = 'none';
    });
  }
}

// $('.attractions__cards').slick({
//   arrows: true,
//   // appendArrows: $('.slider__arrows'),
//   // autoplay: true,
//   // autoplaySpeed: 8000,
//   slidesToShow: 2,
//   infinite: true,
//   speed: 800,
//   cssEase: 'ease-in-out',
//   pauseOnHover: false,
//   waitForAnimate: true,
// });

attractions('.attractions--places');
attractions('.attractions--museums');
attractions('.attractions--reserves');
attractions('.attractions--unusuals');
attractions('.attractions--nature');
