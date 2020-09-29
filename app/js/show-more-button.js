// 'use strict';

// const showBtn = document.querySelector('.show-more-button');
// const articleSectionList = document.querySelector('.articles-section__list');
// const articleData = [
//     {
//         imgUrl: './img/blog-page/1.jpg',
//         articleUrl: 'article.html',
//         dateTime: '2020-05-12T09:01',
//         class: 'Новость Норильска'
//     },
//     {
//         imgUrl: './img/blog-page/2.jpg',
//         articleUrl: 'article.html',
//         dateTime: '2020-05-12T09:01',
//         class: 'Новость Норильска'
//     },
//     {
//         imgUrl: './img/blog-page/3.jpg',
//         articleUrl: 'article.html',
//         dateTime: '2020-05-12T09:01',
//         class: 'Новость Норильска'
//     },
//     {
//         imgUrl: './img/blog-page/4.jpg',
//         articleUrl: 'article.html',
//         dateTime: '2020-05-12T09:01',
//         class: 'Новость Норильска'
//     },
//     {
//         imgUrl: './img/blog-page/5.jpg',
//         articleUrl: 'article.html',
//         dateTime: '2020-05-12T09:01',
//         class: 'Новость Норильска'
//     },
//     {
//         imgUrl: './img/blog-page/6.jpg',
//         articleUrl: 'article.html',
//         dateTime: '2020-05-12T09:01',
//         class: 'Новость Норильска'
//     }
// ];

// function createElement (tagName, elementClass, textContent) {
//     let element = document.createElement(tagName);

//     if (elementClass) {
//         element.classList.add(elementClass);
//     }
//     if (textContent) {
//         element.textContent = textContent;
//     }

//     return element;
// }

// function appendElement (child, parent) {
//     parent.append(child);
// }

// function makeArticle (article) {
//     let li = createElement('li', '', '');

//     let a = createElement('a', 'article-preview', '');
//     a.classList.add('article-preview--last');
//     a.href = article.articleUrl;
//     li.append(a);

//     let img = createElement('img');
//     img.src = article.imgUrl;
//     img.alt = article.class;
//     a.append(img);

//     let div = createElement('div', 'article-preview__text', '');
//     a.append(div);
    
//     let span1 = createElement('span', 'article-preview__class', article.class);
//     div.append(span1);
//     let span2 = createElement('span', 'article-preview__appeal', 'Знаете ли вы?');
//     div.append(span2);

//     let p = createElement('p', 'article-preview__new', 'В нашем городе до сих пор действует режим самоизоляции...');
//     div.append(p);

//     let time = createElement('time', 'article-preview__datetime', '12 мая, 2020 09:01');
//     div.append(time);

//     return li;
// }

// showBtn.addEventListener('click', () => {
//     for (let i = 0; i < articleData.length; i++) {
//         let newArticle = makeArticle (articleData[i]);
//         articleSectionList.append(newArticle);
//     }
// });


const showBtn = document.querySelector('.show-more-button');
const articlesSec = document.querySelector('.articles-section');

// document.addEventListener('DOMContentLoaded', () => {
//     const smButton = document.querySelector('.show-more-button');

//     const postData = async (data) => {
//       let result = await fetch('../blog-page.php', {
//         method: 'POST',
//         body: 'param=' + JSON.stringify(data)
//       });

//       return await result;
//     };

//     smButton.addEventListener('click', (e) => {
//       e.preventDefault();

//       let ob = {
//         'limit': 8
//       };

//       postData(ob)
//         .then(response => console.log(response))
//         .then(response => articlesSec.append(response));
//         // .catch(error => console.error(error));
//     });
// });



let ob = {
  'offset': 0,
  'limit': 4
};

$(".show-more-button").click(function() {
  let coord = window.pageYOffset;
  window.scrollBy(0, coord);

  ob.offset += 4;
  ob.limit += 4;
  
  $.ajax({
    type: 'POST',
    url: '../blog-page.php',
    dataType: 'json',
    data:'param='+JSON.stringify(ob),
    success: function(html) {

      html.forEach(item => {
        switch (item['categorie_id']) {
          case '1':
            item['categorie_id'] = 'Новость Норильска';
            break;
          case '2':
            item['categorie_id'] = 'Туристу';
            break;
          case '3':
            item['categorie_id'] = 'Отчеты';
            break;
        }
        
        const article = document.createElement('li');
        article.innerHTML = `
          <a href="/article.php?id=${item['id']}" class="article-preview article-preview--list">
              <img src="./img/blog-page/${item['image']}" alt="<?= $art_cat['title']; ?>">
              <div class="article-preview__text">
                  
                  <span class="article-preview__class">${item['categorie_id']}</span>
                  <span class="article-preview__appeal">Знаете ли вы?</span>
                  <p class="article-preview__new">${item['title']}</p>
                  <time class="article-preview__datetime" datetime="2020-05-12T09:01">${item['pubdate']}</time>
              </div>
          </a>
        `;

        $(".articles-section__list--last").append(article)
        // .hide()
        .fadeIn(500);

        
      });
    }
  });
  
  if (ob.limit >= +limit ) {
    this.style.display = 'none';
  }
});


