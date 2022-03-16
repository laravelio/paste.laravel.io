const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                dark: '#2b2b2b',
            },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                print: { raw: 'print' },
            },
        },
    },
    plugins: [],
};
