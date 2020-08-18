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

for (let i = 0; i < helpSteps.length; i++) {
    helpBtn[i].addEventListener('click', () => {
        helpSteps[i].classList.remove('step--active');
        helpSteps[i+1].classList.add('step--active');
    });
}

