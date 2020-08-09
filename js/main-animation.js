let getSectionCoordinate = function (section) {
    let sectionName = document.querySelector('.' + section);
    coordinate = sectionName.getBoundingClientRect();
    return coordinate;
};

let addAnimation = function (element, animName) {
    let section = element.split('__');
    let scroll = getSectionCoordinate(section[0]);
    if (scroll.y <= 580) {
        let name = document.querySelector('.' + element);
        name.style.animationName = animName;
    }
};

window.addEventListener('scroll', function() {
    // let scrolled = window.pageYOffset || document.documentElement.scrollTop;

    addAnimation('tours__more', 'tours__pagination');
    addAnimation('tours__title', 'tours');
    addAnimation('tours__description', 'tours');
    addAnimation('tours__buttons', 'tours');
    addAnimation('tours__pagination', 'tours__pagination');
    addAnimation('tours__slider', 'tours__slider');
    addAnimation('tours__more', 'tours__pagination');

    addAnimation('activities__title', 'activities');
    addAnimation('activities__slider', 'activities__slider');
    addAnimation('activities__slide-count', 'activities__slide-count');
    addAnimation('activities__pagination', 'activities__pagination');
    addAnimation('activities__slider-description', 'activities__slider-description');
    addAnimation('activities__buttons', 'activities__slider-description');

    addAnimation('emotions__title', 'emotions__title');
    addAnimation('emotions__description', 'emotions__description');
    addAnimation('emotions__button', 'emotions__description');

    addAnimation('center__pagination', 'center__pagination');
    addAnimation('center__button', 'center__button');
    addAnimation('center__description', 'center__pagination');

    addAnimation('norilsk__pagination', 'norilsk__pagination');
    addAnimation('norilsk__title', 'norilsk__title');
    // addAnimation('norilsk__description--1', 'norilsk__description--1');
    addAnimation('norilsk__photo-1', 'norilsk__description--1');
    addAnimation('norilsk__photo-2', 'norilsk__description--1');
    // addAnimation('norilsk__description--2', 'norilsk__description--2');
    addAnimation('norilsk__photo-3', 'norilsk__description--2');
    addAnimation('norilsk__button', 'norilsk__description--2');

    addAnimation('reviews__pagination', 'reviews__pagination');
    addAnimation('reviews__title', 'reviews__title');
    addAnimation('reviews__photo--1', 'reviews__photo');
    addAnimation('reviews__photo--2', 'reviews__photo');
    addAnimation('reviews__photo--3', 'reviews__photo');
    addAnimation('reviews__blockquote--1', 'reviews__blockquote');
    addAnimation('reviews__blockquote--2', 'reviews__blockquote');
    addAnimation('reviews__blockquote--3', 'reviews__blockquote');
    addAnimation('reviews__more', 'reviews__more');

}); 
