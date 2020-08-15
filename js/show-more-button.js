'use strict';

const showBtn = document.querySelector('.show-more-button');
const articleSectionList = document.querySelector('.articles-section__list');
const articleData = [
    {
        imgUrl: './img/blog-page/1.jpg',
        articleUrl: 'article.html',
        dateTime: '2020-05-12T09:01',
        class: 'Новость Норильска'
    },
    {
        imgUrl: './img/blog-page/2.jpg',
        articleUrl: 'article.html',
        dateTime: '2020-05-12T09:01',
        class: 'Новость Норильска'
    },
    {
        imgUrl: './img/blog-page/3.jpg',
        articleUrl: 'article.html',
        dateTime: '2020-05-12T09:01',
        class: 'Новость Норильска'
    },
    {
        imgUrl: './img/blog-page/4.jpg',
        articleUrl: 'article.html',
        dateTime: '2020-05-12T09:01',
        class: 'Новость Норильска'
    },
    {
        imgUrl: './img/blog-page/5.jpg',
        articleUrl: 'article.html',
        dateTime: '2020-05-12T09:01',
        class: 'Новость Норильска'
    },
    {
        imgUrl: './img/blog-page/6.jpg',
        articleUrl: 'article.html',
        dateTime: '2020-05-12T09:01',
        class: 'Новость Норильска'
    }
];

function createElement (tagName, elementClass, textContent) {
    let element = document.createElement(tagName);

    if (elementClass) {
        element.classList.add(elementClass);
    }
    if (textContent) {
        element.textContent = textContent;
    }

    return element;
}

function appendElement (child, parent) {
    parent.append(child);
}

function makeArticle (article) {
    let li = createElement('li', '', '');

    let a = createElement('a', 'article-preview', '');
    a.classList.add('article-preview--last');
    a.href = article.articleUrl;
    li.append(a);

    let img = createElement('img');
    img.src = article.imgUrl;
    img.alt = article.class;
    a.append(img);

    let div = createElement('div', 'article-preview__text', '');
    a.append(div);
    
    let span1 = createElement('span', 'article-preview__class', article.class);
    div.append(span1);
    let span2 = createElement('span', 'article-preview__appeal', 'Знаете ли вы?');
    div.append(span2);

    let p = createElement('p', 'article-preview__new', 'В нашем городе до сих пор действует режим самоизоляции...');
    div.append(p);

    let time = createElement('time', 'article-preview__datetime', '12 мая, 2020 09:01');
    div.append(time);

    return li;
}

showBtn.addEventListener('click', () => {
    for (let i = 0; i < articleData.length; i++) {
        let newArticle = makeArticle (articleData[i]);
        articleSectionList.append(newArticle);
    }
});








