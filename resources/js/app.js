import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Textarea identation support
import * as indentation from 'indent-textarea';

const textarea = document.querySelector('textarea');

if (textarea) {
    indentation.watch(textarea);
}

// Highlight code blocks and line numbers
import 'highlightjs-line-numbers.js';

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
        hljs.lineNumbersBlock(el);
    });
});

// Clipboard
import ClipboardJS from 'clipboard';

new ClipboardJS('.copy-btn');

// Dark mode
const darkModeToggles = document.getElementsByClassName('darkModeToggle');

for (let i = 0; i < darkModeToggles.length; i++) {
    darkModeToggles[i].onclick = function () {
        if (localStorage.theme === 'light') {
            localStorage.theme = 'dark';
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').classList.remove('light');
        } else {
            localStorage.theme = 'light';
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').classList.add('light');
        }
    };
}
