const helpInterview = document.querySelector('.help__interview');
const helpSteps = helpInterview.querySelectorAll('.help__steps');

const helpBtn = helpInterview.querySelectorAll('.help__button');

// class Interview {
//     constructor() {
//         this.image = helpSteps.querySelector('.help__steps img');
//         this.title = helpSteps.querySelector('.step__title');
//         this.content = helpSteps.querySelector('.step__content');
//         this.stepNum = helpSteps.querySelector('.step__number');
//     }
// }

// let stepCurrent = new Interview();

// const stepsArray = [
//     {
//         content: 'Укажите примерную цену, на которую вы рассчитываете при планировании тура',
//     }
// ];


//     helpBtn.addEventListener('click', () => {
//         stepCurrent.image.src = './img/tours-page/help/2.jpg';
//         stepCurrent.title.textContent = 'Цена, на которую вы расчитываете';
//         stepCurrent.stepNum.textContent = 'Шаг 2 из 4';
//         stepCurrent.content.firstElementChild.remove();
        
//         stepCurrent.content.textContent = document.createElement('p');

//         // step2 = new Interview();

//         // step2.image.src = './img/tours-page/help/2.jpg';
//     });


// // const step2 = helpSteps.cloneNode(true);

let object = {
    'step1': [],
    'step2': [],
    'step3': [],
    'step4': [],
    'id': 5
};

let array = Object.keys(object);

// helpSteps.forEach(step => {
//     step.addEventListener('click', (e) => {
//         if (e.target.closest('input') && e.target.value) {
//             object[array[0]].push(e.target.value);
//             if (object[array[0]]) {
//                 activateButton(step);
//             }
//             console.log(object);
//         }
//     });
// });

const postData = async (data) => {
    let result = await fetch('../help.php', {
    method: 'POST',
    headers: {
        'Content-type': 'application/json'
    },
    body: 'help=' + JSON.stringify(data)
    });

    return await result;
};


helpSteps[0].addEventListener('click', (e) => {
    if (e.target.closest('input') && e.target.value) {
        object[array[0]].push(e.target.value);
        if (object[array[0]]) {
            activateButton(helpSteps[0]);
            const form = document.createElement('form');
            form.setAttribute('method', 'POST');
            form.setAttribute('name', 'help');
            const input = `<input>${object['step1']}</input>`;
            form.insertAdjacentHTML('beforeend', input);
            postData(form)
                // .then(response => response.json())
                .then(response => console.log(`Сообщение отправлено: ${response}`))
                .catch(error => console.error(error));
        }
        console.log(object);
    }
});

helpSteps[1].addEventListener('change', (e) => {
    const from = document.querySelector('input[id="range-from"]');
    console.log(from);
    if (e.target.closest('input') && e.target.value) {
        object[array[1]].push(e.target.value.match(/\d/g).join(''));
        object[array[1]].sort((a, b) => a - b);
        
        if (object[array[1]].indexOf(from.value.match(/\d/g).join('')) != -1) {
            activateButton(helpSteps[1]);
        }
        console.log(object);
    }
});

helpSteps[2].addEventListener('click', (e) => {
    if (e.target.closest('input') && e.target.value) {
        object[array[2]].push(e.target.value);
        if (object[array[2]]) {
            activateButton(helpSteps[2]);
        }
        console.log(object);
    }
});

helpSteps[3].addEventListener('change', (e) => {
    if (e.target.closest('input') && e.target.value) {
        object[array[3]].push(e.target.value);
        if (object[array[3]].length === 3) {
            activateButton(helpSteps[3]);
            postData(JSON.stringify(object))
                // .then(response => response.json())
                .then(response => console.log(`Сообщение отправлено: ${response}`))
                .catch(error => console.error(error));
        }
        console.log(object);
    }
});

function activateButton(step) {
    const btn = step.querySelector('.help__button');
    btn.addEventListener('click', () => {
        step.classList.remove('step--active');
        step.nextElementSibling.classList.add('step--active');
    });
}



// for (let i = 0; i < helpSteps.length - 1; i++) {
//     helpBtn[i].addEventListener('click', () => {
//         helpSteps[i].classList.remove('step--active');
//         helpSteps[i+1].classList.add('step--active');
//     });
// }

