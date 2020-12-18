'use strict';

import Tabs from './Tabs.js';

document.addEventListener('DOMContentLoaded', () => {
  const newsNavs = document.querySelector('.news__nav-list');
  const newsTabs = document.querySelector('.tabs');

  const tabList = new Tabs(newsNavs, newsTabs, 'p');
});
