const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                print: { raw: 'print' },
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
