let activitiesBtnRight = document.getElementById('activities-right');
let activitiesBtnLeft = document.getElementById('activities-left');

let activitiesSlide = document.querySelectorAll('.activities__slide');
let activitiesSlideDescr = document.querySelectorAll('.activities__slide-description');
let activitiesSlideCount = document.querySelector('.activities__slide-count');
let count = 1;

for (let i = 0; i < activitiesSlide.length; i++) {
    activitiesSlide[i].style.zIndex = activitiesSlide.length - i;
    activitiesSlideDescr[i].style.zIndex = activitiesSlide.length - i;
    activitiesSlideDescr[i].style.opacity = 0;
    activitiesSlideDescr[0].style.opacity = 1;
}

activitiesBtnRight.onclick = function () {
    let activeSlide = document.querySelector('.activities__slide--active');
    let activeSlideDescr = document.querySelector('.activities__slide-description--active');
    
    activitiesSlideDescr.forEach(item => {
        item.style.opacity = 1;
    });

    if (activeSlide.nextElementSibling) {
        activeSlide.style.left = '-100%';
        activeSlideDescr.nextElementSibling.style.zIndex = activitiesSlide.length + 1;
        count++;
        activitiesSlideCount.textContent = `${count}` + '/3';

        
        activeSlide.classList.remove('activities__slide--active');
        activeSlideDescr.classList.remove('activities__slide-description--active');

        activeSlide.nextElementSibling.classList.add('activities__slide--active');
        activeSlideDescr.nextElementSibling.classList.add('activities__slide-description--active');

        this.classList.remove('button--disactive');
        activitiesBtnLeft.classList.remove('button--disactive');
    }
    if (!activeSlide.nextElementSibling.nextElementSibling) {
        this.classList.add('button--disactive');
    }
};

activitiesBtnLeft.onclick = function () {
    let activeSlide = document.querySelector('.activities__slide--active');
    let activeSlideDescr = document.querySelector('.activities__slide-description--active');
    
    if (activeSlide.previousElementSibling) {
        activeSlide.previousElementSibling.style.left = '0%';
        activeSlideDescr.style.zIndex = activitiesSlide.length - 1;
        count--;
        activitiesSlideCount.textContent = `${count}` + '/3';

        activeSlide.classList.remove('activities__slide--active');
        activeSlideDescr.classList.remove('activities__slide-description--active');

        activeSlide.previousElementSibling.classList.add('activities__slide--active');
        activeSlideDescr.previousElementSibling.classList.add('activities__slide-description--active');

        this.classList.remove('button--disactive');
        activitiesBtnRight.classList.remove('button--disactive');
    }
    if (!activeSlide.previousElementSibling.previousElementSibling) {
        this.classList.add('button--disactive');
    }
};