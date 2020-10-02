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

document.addEventListener('DOMContentLoaded', () => {
    // const calendarElement = document.querySelectorAll('.calendar__element');

    // const postData = async (data) => {
    //     let result = await fetch('blog-page.php', {
    //       method: 'POST',
    //       headers: {
    //         'Content-type': 'application/json'
    //     },
    //     body: 'events=' + JSON.stringify(data)
    //     });
  
    //     return await toString(result.json());
    // };

    let y = date.getFullYear();
    let m = date.getMonth() + 1;

    if (m < 10) {
        m = "0" + m;
    }

    let object = {
        'month': m,
        'year': y
    };
    
    // postData(object)
    // .then(data => data.json())
    // .then(response => console.log(response))
    // .catch(error => console.error(error));

    $.ajax({
        type: 'POST',
        url: 'blog-page.php',
        dataType: 'json',
        data:'events='+JSON.stringify(object),
        success: function(html) {
            const eventsArray = [];

            for (let j = 1; j <= 31; j++) {
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
                        let object = {
                            "id": item['id'],
                            "text": item['text']
                        };
                        arr.push(object);

                        element.style.border = '1px solid black';
                    }
                });
                eventsArray.push(arr);
                
                
                if (element.getAttribute('value', j) == date.getDate()) {
                    element.style.backgroundColor = '#E83B3B';
                    element.style.color = '#ffffff';
                }
            }

            // const calendar = document.querySelector('.calendar__main');
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
                // e.target.style.border = '';
                if (e.target == e.target.closest('input')) {
                    const num = +e.target.getAttribute('value') - 1;
                    
                    renderEvent(num);
                    
                } else {
                    const currentDay = document.querySelector(`.calendar__element[value="${date.getDate()}"]`);
                    const num = currentDay.getAttribute('value');

                    renderEvent(num);
                }

            });
        }
      });
});


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

document.querySelector('.blog__timetable').textContent = 'Расписание на ' + monthObject[date.getMonth()].monTop.toLowerCase();


// document.addEventListener('DOMContentLoaded', () => {
//     const calendarElement = document.querySelectorAll('.calendar__element');

//     const postData = async (data) => {
//         let result = await fetch('../blog-page.php', {
//           method: 'POST',
//           body: 'oninput=' + JSON.stringify(data)
//         });
  
//         return await result.text();
//     };

//     calendarElement.forEach(element => {
//         element.addEventListener('click', (e) => {
//             let object = {
//                 'day': e.target.value,
//                 'month': date.getMonth(),
//                 'year': date.getFullYear()
//             };
//             postData(object)
//             .then(response => console.log(response))
//             .catch(error => console.error(error));
//         });
//     });
// });

