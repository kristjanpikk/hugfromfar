module.exports = {
  purge: [
    "./**/*.html",
    "./**/*.php",
    "./src/**/*.css",
    "./src/**/*.js"
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        primary: "#00897B",
        "primary-50": "#E0F2F1",
        "primary-100": "#B2DFDB",
        "primary-900": "#00695C",
        black: "#000",
        white: "#fff",
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
