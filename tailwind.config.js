const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/azzarip/utilities/resources/views/**/*.blade.php",
        "./vendor/azzarip/client/resources/views/**/*.blade.php",
        "./vendor/azzarip/teavel/resources/views/**/*.blade.php",
        "./domains/**/resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#16a34a'
                },
                background: {
                    DEFAULT: '#051F29',
                }
            },
            fontFamily: {
                'head': ['sohne', 'lato', ...defaultTheme.fontFamily.sans],
                'sans': ['lato', 'lato', ...defaultTheme.fontFamily.sans],
                'text': ['gabarito', 'lato', ...defaultTheme.fontFamily.sans],
                'serif': ['merriweather', ...defaultTheme.fontFamily.serif],
                'trajan': ['trajan', ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('postcss-import'),
    ],
}

