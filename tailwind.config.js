import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
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
