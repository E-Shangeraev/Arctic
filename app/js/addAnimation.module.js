'use strict';
 
function getSectionCoordinate(section) {
    let sectionName = document.querySelector('.' + section);
    let coordinate = sectionName.getBoundingClientRect();
    return coordinate;
}

function addAnimation(element, animName) {
    let section = element.split('__');
    let scroll = getSectionCoordinate(section[0]);
    if (scroll.y <= 580) {
        let name = document.querySelector('.' + element);
        name.style.animationName = animName;
    }
}

export {getSectionCoordinate, addAnimation};