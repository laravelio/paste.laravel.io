require('./bootstrap');

import 'alpinejs';

// Textarea identation support
import * as indentation from 'indent-textarea';

const textarea = document.querySelector('textarea');

if (textarea) {
    indentation.watch(textarea);
}

// Highlight code blocks and line numbers
const hljs = require('highlight.js');

window.hljs = hljs;

require('highlightjs-line-numbers.js');

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
        hljs.lineNumbersBlock(block);
    });
});
