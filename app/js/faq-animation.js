let faqBtn = document.querySelectorAll('.faq__question');

for (let faqButton of faqBtn) {
    faqButton.onclick = function () {
        faqButton.children[0].style.transform = (faqButton.children[0].style.transform == 'rotate(0deg)') ? 'rotate(90deg)' : 'rotate(0deg)';
        faqButton.nextElementSibling.classList.toggle('faq__answer--animated');
    };
}