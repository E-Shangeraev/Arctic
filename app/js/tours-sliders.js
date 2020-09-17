class Slider {
    constructor(sectionName) {
        this.paggination = sectionName.querySelector('.pagination');
        this.sliderTitle = sectionName.querySelector('.title');
        this.sliderDescr = sectionName.querySelector('.description');
        this.link = sectionName.querySelector('.slide__link');

        this.btnRight = sectionName.querySelector('.button__right');
        this.btnLeft = sectionName.querySelector('.button__left');
        this.slideCollection = sectionName.querySelectorAll('.tours__slide');
        this.slideWidth = this.slideCollection[0].clientWidth;
        this.maxTranslate = this.slideWidth * (this.slideCollection.length - 1);
        this.slides = sectionName.querySelector('.tours__slider-block');
    }
    log() {
        console.log(this);
    }
}

const toursPage = document.querySelector('.tours-page');
const chooseSec = document.querySelector('.choose-section');
const eventsSec = document.querySelector('.events-section');
const emotionsSec = document.querySelector('.emotions-section');
const additionSec = document.querySelector('.addition-section');

let chooseSlider = new Slider(chooseSec);
let eventsSlider = new Slider(eventsSec);
let emotionsSlider = new Slider(emotionsSec);
let additionSlider = new Slider(additionSec);

let sliderArr = [
    {
        sectionName: chooseSec,
        sliderName: chooseSlider
    },
    {
        sectionName: eventsSec,
        sliderName: eventsSlider
    },
    {
        sectionName: emotionsSec,
        sliderName: emotionsSlider
    },
    {
        sectionName: additionSec,
        sliderName: additionSlider
    }
];

for (let obj of sliderArr) {
    activateSliders(obj.sliderName, obj.sectionName);
}

function activateSliders(slider, section) {
    let translate = 0;

    slider.btnRight.onclick = function() {
        if (translate < slider.maxTranslate - slider.slideWidth) {
            translate += slider.slideWidth;
        }
        if (translate ==  slider.maxTranslate  - slider.slideWidth) {
            slider.btnRight.classList.add('button--disactive');
        }

        var activeElement = section.querySelector('.tours__slide.slide--active');
        slider.btnLeft.classList.remove('button--disactive');

        if (activeElement.nextElementSibling) {
            slider.slides.style.transform = `translateX(-${translate}px)`;
            activeElement.classList.remove('slide--active');
            activeElement.nextElementSibling.classList.add('slide--active');
        }
    };

    slider.btnLeft.onclick = function () {
        if (translate >= slider.slideWidth) {
            translate -= slider.slideWidth;
        }
        if (translate == 0) {
            slider.btnLeft.classList.add('button--disactive');
        }

        var activeElement = section.querySelector('.tours__slide.slide--active');
        slider.btnRight.classList.remove('button--disactive');

        if (activeElement.previousElementSibling) {
            slider.slides.style.transform = 'translateX(-' + translate + 'px)';
            activeElement.classList.remove('slide--active');
            activeElement.previousElementSibling.classList.add('slide--active'); 
        }
    };
}

