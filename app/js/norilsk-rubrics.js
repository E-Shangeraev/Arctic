'use strict';

import Tabs from './Tabs.js';

document.addEventListener('DOMContentLoaded', () => {
  const monumentsNavs = document.querySelector('.monuments__nav-list');
  const monumentsTabs = document.querySelector('.tabs__container');

  const tabList = new Tabs(monumentsNavs, monumentsTabs, 'li');
});
