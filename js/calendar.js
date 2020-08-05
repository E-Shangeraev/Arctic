let day = document.querySelector('.calendar__day');
let month = document.querySelector('.calendar__month');
let year = document.querySelector('.calendar__year');
let monthObject = [
    {
        num: '0',
        mon: 'января',
        monRight: 'Январь'
    },
    {
        num: '1',
        mon: 'февраля',
        monRight: 'Февраль'
    },
    {
        num: '2',
        mon: 'марта',
        monRight: 'Март'
    },
    {
        num: '3',
        mon: 'апреля',
        monRight: 'Апрель'
    },
    {
        num: '4',
        mon: 'мая',
        monRight: 'Май'
    },
    {
        num: '5',
        mon: 'июня',
        monRight: 'Июнь'
    },
    {
        num: '6',
        mon: 'июля',
        monRight: 'Июль'
    },
    {
        num: '7',
        mon: 'августа',
        monRight: 'Август'
    },
    {
        num: '8',
        mon: 'сентября',
        monRight: 'Сентябрь'
    },
    {
        num: '9',
        mon: 'октября',
        monRight: 'Октябрь'
    },
    {
        num: '10',
        mon: 'ноября',
        monRight: 'Ноябрь'
    },
    {
        num: '11',
        mon: 'декабря',
        monRight: 'Декабрь'
    }
];

let date = new Date();
day.textContent = date.getDate();
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
    let element = document.createElement('span');
    element.textContent = j;
    element.style.gridArea = 'd' + k;
    element.style.cursor = 'pointer';
    calendarMain.appendChild(element);
    k++;
    
    if (element.textContent == date.getDate()) {
        element.style.backgroundColor = '#E83B3B';
        element.style.color = '#ffffff';
    }
}


let calendarTopItemActive = document.querySelector('.calendar__top-item--active');

for (let i = 0; i < 12; i++) {
    if (date.getMonth() == monthObject[i].num) {
        month.textContent = monthObject[i].mon;

        calendarTopItemActive.previousElementSibling.children[0].textContent = monthObject[i-1].monRight;
        calendarTopItemActive.previousElementSibling.children[1].textContent = date.getFullYear();
        calendarTopItemActive.children[0].textContent = monthObject[i].monRight;
        calendarTopItemActive.children[1].textContent = date.getFullYear();
        alendarTopItemActive.nextElementSibling.children[0].textContent = monthObject[i-1].monRight;
        calendarTopItemActive.nextElementSibling.children[1].textContent = date.getFullYear();
    }

    //Если предыдущий месяц декабрь - отобразить прошлый год
    if (date.getMonth() - 1 == 11) {
        calendarTopItemActive.previousElementSibling.children[1].textContent = date.getFullYear() - 1;
    }

    //Если следующий месяц январь - отобразить следующий год
    if (date.getMonth() + 1 == 0) {
        calendarTopItemActive.previousElementSibling.children[1].textContent = date.getFullYear() + 1;
    }
}
