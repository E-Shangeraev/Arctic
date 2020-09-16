let toursBtnRight = document.getElementById('tours-right');
let toursBtnLeft = document.getElementById('tours-left');

let slideCollection = document.querySelectorAll('.tours__slide');
let slides = document.querySelector('.tours__slider-block');

let percent = 0;
let minPercent = 100 / slideCollection.length;
let maxPercent = 100 - 100 / slideCollection.length;

var translate = 0;
var maxTranslate = 460 * (slideCollection.length - 1);

toursBtnRight.onclick = function () {
    if (translate < maxTranslate - 460) {
        translate += 460;
    }
    if (translate == maxTranslate - 460) {
        toursBtnRight.classList.add('button--disactive');
    }
    var activeElement = document.querySelector('.tours__slide.slide--active');
    toursBtnLeft.classList.remove('button--disactive');
    if (activeElement.nextElementSibling) {
        slides.style.transform = 'translateX(-' + translate + 'px)';
        activeElement.classList.remove('slide--active');
        activeElement.nextElementSibling.classList.add('slide--active');
    }
};

toursBtnLeft.onclick = function () {
    if (translate >= 460) {
        translate -= 460;
    }
    if (translate == 0) {
        toursBtnLeft.classList.add('button--disactive');
    }

    var activeElement = document.querySelector('.tours__slide.slide--active');
    toursBtnRight.classList.remove('button--disactive');
    if (activeElement.previousElementSibling) {
        slides.style.transform = 'translateX(-' + translate + 'px)';
        activeElement.classList.remove('slide--active');
        activeElement.previousElementSibling.classList.add('slide--active'); 
    }
};

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
