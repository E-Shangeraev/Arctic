function attractions(section) {
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
    cards.forEach((card) => {
      if (!card.classList.contains('attractions__card--opened')) {
        card.classList.add('attractions__card--animate');
      } else {
        showMoreText(card);
      }
    });
  }

  function showCards() {
    cards.forEach((card) => {
      card.classList.remove('attractions__card--opened');
      card.classList.remove('attractions__card--animate');
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

attractions('.attractions--places');
attractions('.attractions--museums');
attractions('.attractions--reserves');
attractions('.attractions--unusuals');
