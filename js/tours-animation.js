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
}); 
