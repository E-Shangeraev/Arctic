let additionBtnLeft = document.getElementById('addition-left');
let additionBtnRight = document.getElementById('addition-right');

let additionSlideCollection = document.querySelectorAll('.addition__slide');
let additionSlides = document.querySelector('.addition__slider .slider-block');

let additionPercent = 0;
let additionMinPercent = 100 / additionSlideCollection.length;
let additionMaxPercent = 100 - 100 / additionSlideCollection.length;
let slideWidth = additionSlideCollection[0].clientWidth + 40;

var additionTranslate = 0;
var additionMaxTranslate = slideWidth * (additionSlideCollection.length - 1);

additionBtnRight.onclick = function () {
    if (additionTranslate < additionMaxTranslate - slideWidth) {
        additionTranslate += slideWidth;
    }
    if (additionTranslate == additionMaxTranslate - slideWidth) {
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
    if (additionTranslate >= slideWidth) {
        additionTranslate -= slideWidth;
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