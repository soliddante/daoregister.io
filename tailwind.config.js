const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      gridTemplateColumns: {
        13: "repeat(13, minmax(0, 1fr))",
        14: "repeat(14, minmax(0, 1fr))",
        15: "repeat(15, minmax(0, 1fr))",
        16: "repeat(16, minmax(0, 1fr))",
      },

      colors: {
        "theme-light": "#2081E2",
        "theme-dark": "#173D7A",
        "theme-red": "#EB5757",
        theme: {
          50: "#d1d8e4",
          100: "#e8ecf2",
          200: "#d1d8e4",
          300: "#748baf",
          400: "#5d77a2",
          500: "#456495",
          600: "#2e5087",
          700: "#173d7a",
          800: "#0e2549",
          900: "#0c1f3d",
        },
      },
    },
  },

  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
