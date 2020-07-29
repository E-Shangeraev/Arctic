let right = document.getElementById('right');
let left = document.getElementById('left');
let slideCollection = document.querySelectorAll('.slide');
let slides = document.querySelector('.slider-block');

let percent = 0;
let minPercent = 100 / slideCollection.length;
let maxPercent = 100 - 100 / slideCollection.length;

// right.onclick = function () {
//     if (percent < maxPercent) {
//         percent += 100 / slideCollection.length;
//     }
//     if (percent == maxPercent) {
//         right.classList.add('button--disactive');
//     }
//     var activeElement = document.querySelector('.slide--active');
//     left.classList.remove('button--disactive');
//     if (activeElement.nextElementSibling) {
//         slides.style.transform = 'translateX(-' + percent + '%)';
//         activeElement.classList.remove('slide--active');
//         activeElement.nextElementSibling.classList.add('slide--active');
//     }
// };

// left.onclick = function () {
//     if (percent >= minPercent) {
//         percent -= 100 / slideCollection.length;
//     }
//     if (percent == 0) {
//         left.classList.add('button--disactive');
//     }

//     var activeElement = document.querySelector('.slide--active');
//     right.classList.remove('button--disactive');
//     if (activeElement.previousElementSibling) {
//         slides.style.transform = 'translateX(-' + percent + '%)';
//         activeElement.classList.remove('slide--active');
//         activeElement.previousElementSibling.classList.add('slide--active'); 
//     }
// };  

var translate = 0;
var maxTranslate = 460 * slideCollection.length;

right.onclick = function () {
    if (translate < maxTranslate - 460) {
        translate += 460;
    }
    if (translate == maxTranslate - 460) {
        right.classList.add('button--disactive');
    }
    var activeElement = document.querySelector('.slide--active');
    left.classList.remove('button--disactive');
    if (activeElement.nextElementSibling) {
        slides.style.transform = 'translateX(-' + translate + 'px)';
        activeElement.classList.remove('slide--active');
        activeElement.nextElementSibling.classList.add('slide--active');
    }
};

left.onclick = function () {
    if (translate >= 460) {
        translate -= 460;
    }
    if (translate == 0) {
        left.classList.add('button--disactive');
    }

    var activeElement = document.querySelector('.slide--active');
    right.classList.remove('button--disactive');
    if (activeElement.previousElementSibling) {
        slides.style.transform = 'translateX(-' + translate + 'px)';
        activeElement.classList.remove('slide--active');
        activeElement.previousElementSibling.classList.add('slide--active'); 
    }
};