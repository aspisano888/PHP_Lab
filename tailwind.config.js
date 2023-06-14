/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        'header': "url('../images/images.png')"
      }
    },
  },
  plugins: [],
}

