const cards = document.querySelectorAll('.attractions__card');

cards.forEach((card) => {
  card.addEventListener('click', function (e) {
    if (!e.target.closest('.attractions__button')) {
      card.style.display = 'none';
      return;
    }

    if (!e.target.closest('.attractions__card')) {
      card.style.display = 'none';
    }
    card.classList.add('card--animate');
    // card
    console.log(this.getAttribute('id'));
  });
});
