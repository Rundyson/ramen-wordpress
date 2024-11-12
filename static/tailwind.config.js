/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: {
      fontFamily: {
        montserrat: "Montserrat",
        economica: "Economica",
        comingsoon: "Coming Soon",
      },
      colors: {
        primary: "#F6AD49",
        secondary: "#E60033",
        dark: "#433D3C",
        light: "#FDF4F0",
      },
      backgroundImage: {
        homeImage: "url('../img/wood.jpg')",
        ramenImage: "url('../img/bg.png')",
      },
    },
    screens: {
      sm: "600px",
      md: "728px",
      lg: "984px",
    },
  },
  plugins: [],
};

