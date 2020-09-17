const faqBtn = document.querySelectorAll('.faq__question');
const faqAnswr = document.querySelectorAll('.faq__answer');

function hideNotActiveTab() {
    faqAnswr.forEach(answr => {
        // answr.classList.remove('faq__answer--animated');
        answr.style.cssText = 'height: 0; opacity: 0;';
    });

    faqBtn.forEach(faqButton => {
        faqButton.children[0].style.transform = 'rotate(0deg)';
    });
}

faqBtn.forEach(faqButton => {
    faqButton.addEventListener('click', (e) => {
        // hideNotActiveTab();
        
        faqButton.nextElementSibling.classList.toggle('faq__answer--animated');
        faqButton.children[0].style.transform = (faqButton.children[0].style.transform == 'rotate(0deg)') ? 'rotate(90deg)' : 'rotate(0deg)';
    });
});