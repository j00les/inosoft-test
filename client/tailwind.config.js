/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      colors: {
        primary: "#00bfbf",
        secondary: "#f5f6f8",
        grayish: "#b9c0c7",
        semiwhite: "#fbfbfb",
        grayer: "#e5e5e5",
      },

      dropShadow: {
        custom: "0 .5px .5px rgba(0,0,0,0.25)",
      },
    },
  },
  plugins: [],
};
