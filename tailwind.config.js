const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  content: [
  "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  "./vendor/azzarip/utilities/resources/**/*.blade.php",
  "./domains/**/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
          'head': ['sohne', 'lato', ...defaultTheme.fontFamily.sans],
          'sans': ['lato', 'lato', ...defaultTheme.fontFamily.sans],
          'text': ['gabarito', 'lato', ...defaultTheme.fontFamily.sans],
          'serif': ['merriweather', ...defaultTheme.fontFamily.serif],
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('postcss-import'),
  ],
}

