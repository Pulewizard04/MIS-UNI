/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.html,css,php',
    './assets/js/**/*.js, css',
    './assets/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#282f49',
        'custom-red': '#8a2b31'
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}

