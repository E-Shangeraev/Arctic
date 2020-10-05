const day = document.querySelector('.calendar__day');
const month = document.querySelector('.calendar__month');
const year = document.querySelector('.calendar__year');
const monthObject = [
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

const date = new Date();

day.textContent = date.getDate();
month.textContent = monthObject[date.getMonth()].mon;
year.textContent = date.getFullYear();

// let yr = date.getFullYear();
// let mn = date.getMonth();

function getFirstDayOfMonth(year, month) {
    const firstDay = new Date(year, month - 1, 1);
    return firstDay.getDay();
}
function getLastDayOfMonth(year, month) {
    const lastDay = new Date(year, month, 0);
    return lastDay.getDate();
}

document.addEventListener('DOMContentLoaded', () => {

    const calendarMain = document.querySelector('.calendar__main');
    let y = date.getFullYear();
    let m = date.getMonth() + 1;

    const calendarRender = () => {

        // Определение первого дня месяца
        let k = getFirstDayOfMonth(y, m);
        if ( getFirstDayOfMonth(y, m) == 0 ) {
            k = 7;
        }
        // Определение последнего дня месяца
        let lastDay = getLastDayOfMonth(y, m);
        
        // Данные для отправки запроса
        if (m < 10) {
            m = "0" + m;
        }
        let object = {
            'month': m,
            'year': y
        };

        //Запрос на сервер
        $.ajax({
            type: 'POST',
            url: 'blog-page.php',
            dataType: 'json',
            data:'events='+JSON.stringify(object),
            success: function(html) {

                //Если на сервере есть данные месяца, то они отрисовываются
                if (html) {
                    const eventsArray = [];
                
                    for (let j = 1; j <= lastDay; j++) {
                        let element = document.createElement('input');
                        element.setAttribute('type', 'button');
                        element.setAttribute('value', j);
                
                        element.style.gridArea = 'd' + k;
                        element.style.cursor = 'pointer';
                        element.classList.add('calendar__element');
                        calendarMain.appendChild(element);
                        k++;
                        
                        const arr = [];
        
                        html.forEach(item => {
                            if (element.getAttribute('value', j) == item['day']) {
                                let obj = {
                                    "id": item['id'],
                                    "text": item['text']
                                };
                                arr.push(obj);
        
                                element.style.border = '1px solid black';
                            }
                        });
                        eventsArray.push(arr);
                        
                        if (element.getAttribute('value', j) == date.getDate() && m == date.getMonth() + 1 && y == date.getFullYear()) {
                            element.style.backgroundColor = '#E83B3B';
                            element.style.color = '#ffffff';
                        }
                    }
        
                    const calendar = document.querySelector('.calendar');
                    const eventsList = document.querySelector('.calendar__events-list');
                    
                    eventsList.innerHTML = `<li>Нет событий</li>`;
        
                    const renderEvent = (num) => {
                        eventsList.innerHTML = '';
            
                        eventsArray[num].forEach(item => {
                            const li = document.createElement('li');
                            li.classList.add('calendar__events-item');
                            li.innerHTML = `
                                <a href="./article.php?id=${item['id']}">${item['text']}</a> 
                            `;
        
                            if (eventsArray[num]) {
                                eventsList.append(li);
                            }
                        });
        
                        if (!eventsArray[num].length) {
                            eventsList.innerHTML = `<li>Нет событий</li>`;
                        }
                    };
        
                    calendar.addEventListener('click', (e) => {
    
                        if (e.target == e.target.closest('input')) {
                            const num = +e.target.getAttribute('value') - 1;
                            
                            renderEvent(num);
                            
                        } else {
                            // const currentDay = document.querySelector(`.calendar__element[value="${date.getDate()}"]`);
                            // const num = currentDay.getAttribute('value');
        
                            // renderEvent(num);
                        }
        
                    });
                } else {
                    //Если на сервере нет данных по месяцу, то отрисовывается пустой календарь
                    for (let j = 1; j <= lastDay; j++) {
                        let element = document.createElement('input');
                        element.setAttribute('type', 'button');
                        element.setAttribute('value', j);
                
                        element.style.gridArea = 'd' + k;
                        element.style.cursor = 'pointer';
                        element.classList.add('calendar__element');
                        calendarMain.appendChild(element);
                        k++;
                    }
                }  
            }
        });
    };
    calendarRender();


    const nextMon = document.querySelector('.calendar__top-item--next');
    const prevMon = document.querySelector('.calendar__top-item--prev');
    const curentMon = document.querySelector('.calendar__top-item--active');

    
    let thisMonthIndex = date.getMonth();
    let year = date.getFullYear();
    let yearIndex;
    
    
    const calendarHeaderRender = () => {
        let nextMonthIndex = thisMonthIndex + 1;
        let prevMonthIndex = thisMonthIndex - 1;
        // if (thisMonthIndex >= 12) {
        //     thisMonthIndex -= 12;
        // }
    
        // if (nextMonthIndex >= 12) {
        //     nextMonthIndex -= 12;
        // }
    
        // prevMon.children[1].textContent = date.getFullYear();
        // curentMon.children[1].textContent = date.getFullYear();
        // nextMon.children[1].textContent = date.getFullYear();
    
    
        // prevMon.children[0].textContent = monthObject[prevMonthIndex].monTop;
        // curentMon.children[0].textContent = monthObject[thisMonthIndex].monTop;
        // nextMon.children[0].textContent = monthObject[nextMonthIndex].monTop;
    
        // if (nextMonthIndex == 0) {
        //     nextMon.children[1].textContent = date.getFullYear() + 1;
        // }

        // if (prevMonthIndex == 11) {
        //     prevMon.children[1].textContent = date.getFullYear() - 1;
        // }
    
        // if (thisMonthIndex == 0) {
        //     prevMon.children[1].textContent = date.getFullYear() - 1;
        // }


        

        prevMon.children[1].textContent = year;
        curentMon.children[1].textContent = year;
        nextMon.children[1].textContent = year;
    
        // if (nextMonthIndex == 12) {
        //     year++;
        // }

        // if (prevMonthIndex == 12) {
        //     year--;
        // }

        
    
        prevMon.children[1].textContent = year;
        curentMon.children[1].textContent = year;
        nextMon.children[1].textContent = year;
    
    
        prevMon.children[0].textContent = monthObject[prevMonthIndex % 12].monTop;
        curentMon.children[0].textContent = monthObject[thisMonthIndex % 12].monTop;
        nextMon.children[0].textContent = monthObject[nextMonthIndex % 12].monTop;
    
        if (nextMonthIndex % 12 === 0) {
            nextMon.children[1].textContent = year + 1;
        }

        if (prevMonthIndex == 11) {
            // prevMon.children[1].textContent = year - 1;
        }
    
        if (thisMonthIndex % 12 === 0) {
            prevMon.children[1].textContent = year - 1;
        }


        // console.log('prev: ' + prevMonthIndex);
        
        // console.log('next: ' + nextMonthIndex);
    };
    calendarHeaderRender();

    

    const calendarClear = () => {
        calendarMain.querySelectorAll('input').forEach(item => item.remove());
    }


    nextMon.addEventListener('click', () => {
        thisMonthIndex++;
        m++;
        yearIndex = thisMonthIndex % 12;
        if (yearIndex === 0) {
            year++;
        }
        calendarClear();
        calendarHeaderRender();
        calendarRender();
        console.log(thisMonthIndex);
    });

    prevMon.addEventListener('click', () => {
        console.log(thisMonthIndex);
        if (thisMonthIndex === 0) {
            thisMonthIndex = 24;
        }

        thisMonthIndex--;
        m--;

        yearIndex = thisMonthIndex % 12;
        if (yearIndex === 11) {
            year--;
        }
        calendarClear();
        calendarHeaderRender();
        calendarRender();
        console.log(thisMonthIndex);
    });
            
});




/////////////////////////////////////////
(function(){
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
    
})();

document.querySelector('.blog__timetable').textContent = 'Расписание на ' + monthObject[date.getMonth()].monTop.toLowerCase();

