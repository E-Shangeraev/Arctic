'use strict';

import Tabs from './Tabs.js';

document.addEventListener('DOMContentLoaded', () => {
    const blogNavs = document.querySelector('.blog__nav-list');
    const blogTabs = document.querySelector('.tabs');

    const tabList = new Tabs(blogNavs, blogTabs, 'li');
}); 