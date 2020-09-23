let day = document.querySelector('.calendar__day');
let month = document.querySelector('.calendar__month');
let year = document.querySelector('.calendar__year');
let monthObject = [
    {
        num: '0',
        mon: 'января',
        monTop: 'Январь'
    },
    {
        num: '1',
        mon: 'февраля',
        monTop: 'Февраль'
    },
    {
        num: '2',
        mon: 'марта',
        monTop: 'Март'
    },
    {
        num: '3',
        mon: 'апреля',
        monTop: 'Апрель'
    },
    {
        num: '4',
        mon: 'мая',
        monTop: 'Май'
    },
    {
        num: '5',
        mon: 'июня',
        monTop: 'Июнь'
    },
    {
        num: '6',
        mon: 'июля',
        monTop: 'Июль'
    },
    {
        num: '7',
        mon: 'августа',
        monTop: 'Август'
    },
    {
        num: '8',
        mon: 'сентября',
        monTop: 'Сентябрь'
    },
    {
        num: '9',
        mon: 'октября',
        monTop: 'Октябрь'
    },
    {
        num: '10',
        mon: 'ноября',
        monTop: 'Ноябрь'
    },
    {
        num: '11',
        mon: 'декабря',
        monTop: 'Декабрь'
    }
];

let date = new Date();
day.textContent = date.getDate();
month.textContent = monthObject[date.getMonth()].mon;
year.textContent = date.getFullYear();

function getFirstDayOfMonth() {
    let y = date.getFullYear();
    let m = date.getMonth();
    let firstDay = new Date(y, m, 1);
    return firstDay.getDay();
}

let calendarDay = document.getElementById('Day');
let calendarMain = document.querySelector('.calendar__main');
let k = getFirstDayOfMonth();
if ( getFirstDayOfMonth() == 0 ) {
    k = 7;
}


for (let j = 1; j <= 31; j++) {
    let element = document.createElement('input');
    element.setAttribute('type', 'button');
    element.setAttribute('value', j);
    element.style.gridArea = 'd' + k;
    element.style.cursor = 'pointer';
    element.classList.add('calendar__element');
    calendarMain.appendChild(element);
    k++;

    if (element.getAttribute('value', j) == date.getDate()) {
        element.style.backgroundColor = '#E83B3B';
        element.style.color = '#ffffff';
    }
}


let calendarTopItemActive = document.querySelector('.calendar__top-item--active');

let thisMonthIndex = date.getMonth();
let nextMonthIndex = thisMonthIndex + 1;
let prevMonthIndex = thisMonthIndex - 1;


if (thisMonthIndex >= 12) {
    thisMonthIndex -= 12;
}

if (nextMonthIndex >= 12) {
    nextMonthIndex -= 12;
}

calendarTopItemActive.nextElementSibling.children[1].textContent = date.getFullYear();
calendarTopItemActive.children[1].textContent = date.getFullYear();
calendarTopItemActive.previousElementSibling.children[1].textContent = date.getFullYear();


calendarTopItemActive.previousElementSibling.children[0].textContent = monthObject[prevMonthIndex].monTop;
calendarTopItemActive.children[0].textContent = monthObject[thisMonthIndex].monTop;
calendarTopItemActive.nextElementSibling.children[0].textContent = monthObject[nextMonthIndex].monTop;

if (nextMonthIndex == 0) {
    calendarTopItemActive.nextElementSibling.children[1].textContent = date.getFullYear() + 1;
}

if (thisMonthIndex == 0) {
    calendarTopItemActive.previousElementSibling.children[1].textContent = date.getFullYear() - 1;
}


const blogButton = document.querySelector('.blog__button');
const blogCalendar = document.querySelector('.blog__calendar');
const calendar = document.querySelector('.calendar');

blogButton.addEventListener('click', () => {
    blogCalendar.style.cssText = 'animation: fadeOutDown 0.5s; animation-fill-mode: forwards;';
    calendar.style.cssText = 'animation: fadeInDown 0.5s; animation-fill-mode: forwards;';
    setTimeout(() => {
        calendar.style.display = 'block';
        calendar.classList.remove('visually-hidden');
        blogCalendar.style.display = 'none';
        blogCalendar.classList.add('visually-hidden');
    }, 500);
});