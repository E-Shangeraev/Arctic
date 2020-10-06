'use strict';

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.feedback__form');

    const postData = async (data) => {
      let result = await fetch('../mail.php', {
        method: 'POST',
        body: data
      });

      return await result.text();
    };

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      let formData = new FormData(form);

      postData(formData)
        .then(response => console.log(`Сообщение отправлено: ${response}`))
        .catch(error => console.error(error));

      form.reset();
    });
});