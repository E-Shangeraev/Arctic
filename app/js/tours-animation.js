import {addAnimation, getSectionCoordinate} from './addAnimation.module.js';

window.addEventListener('scroll', function() {
    // let scrolled = window.pageYOffset || document.documentElement.scrollTop;

    addAnimation('tours__more', 'tours__pagination');
    addAnimation('tours__title', 'tours');
    addAnimation('tours__description', 'tours');
    addAnimation('tours__buttons', 'tours');
    addAnimation('tours__pagination', 'tours__pagination');
    addAnimation('tours__slider', 'tours__slider');
    addAnimation('tours__more', 'tours__pagination');
}); 
