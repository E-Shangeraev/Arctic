let additionBtnLeft = document.getElementById('addition-left');
let additionBtnRight = document.getElementById('addition-right');

let additionSlideCollection = document.querySelectorAll('.addition__slide');
let additionSlides = document.querySelector('.addition__slider .slider-block');

let additionPercent = 0;
let additionMinPercent = 100 / additionSlideCollection.length;
let additionMaxPercent = 100 - 100 / additionSlideCollection.length;

var additionTranslate = 0;
var additionMaxTranslate = 620 * additionSlideCollection.length;

additionBtnRight.onclick = function () {
    if (additionTranslate < additionMaxTranslate - 620) {
        additionTranslate += 620;
    }
    if (additionTranslate == additionMaxTranslate - 620) {
        additionBtnRight.classList.add('button--disactive');
    }
    var additionActiveElement = document.querySelector('.addition__slide.slide--active');
    additionBtnLeft.classList.remove('button--disactive');
    if (additionActiveElement.nextElementSibling) {
        additionSlides.style.transform = 'translateX(-' + additionTranslate + 'px)';
        additionActiveElement.classList.remove('slide--active');
        additionActiveElement.nextElementSibling.classList.add('slide--active');
    }
};

additionBtnLeft.onclick = function () {
    if (additionTranslate >= 620) {
        additionTranslate -= 620;
    }
    if (additionTranslate == 0) {
        additionBtnLeft.classList.add('button--disactive');
    }

    var additionActiveElement = document.querySelector('.addition__slide.slide--active');
    additionBtnRight.classList.remove('button--disactive');
    if (additionActiveElement.previousElementSibling) {
        additionSlides.style.transform = 'translateX(-' + additionTranslate + 'px)';
        additionActiveElement.classList.remove('slide--active');
        additionActiveElement.previousElementSibling.classList.add('slide--active'); 
    }
};