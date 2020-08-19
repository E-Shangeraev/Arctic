const likesCounter = document.querySelector('.article__stats-likes span');
const likeBtn = document.querySelector('.article__stats-likes button');

let count = 0;
likesCounter.textContent = count;

likeBtn.addEventListener('click', () => {
    likeBtn.classList.toggle('stats-likes--added');
    if (likeBtn.classList.contains('stats-likes--added')) {
        count++;
    } else {
        count--;
    }
    likesCounter.textContent = count;
});