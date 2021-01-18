require('./bootstrap');

import 'alpinejs';
const hljs = require('highlight.js');

window.hljs = hljs;

require('highlightjs-line-numbers.js');

// Highlight code blocks and line numbers
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
        hljs.lineNumbersBlock(block);
    });
});
