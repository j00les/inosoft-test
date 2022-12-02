/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      colors: {
        primary: "#00bfbf",
        secondary: "#f5f6f8",
        grayish: "#b9c0c7",
        semiwhite: "#fbfbfb"
      },
    },
  },
  plugins: [],
};
