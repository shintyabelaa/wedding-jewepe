/** @type {import('tailwindcss').Config} */
export default {
  prefix: "tw-",
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      extend: {
          colors: {
              white: "#ffffff",
              blue: "#003366",
              "blue-secondary": "#003F7D",
              primary: "#B90A05",
              "gradient-dark": "#950F0C",
              "gradient-light": "#E40201",
              purple: "#7e5bef",
              pink: "#ff49db",
              orange: "#FF8E00",
              green: "#13ce66",
              yellow: "#FBC701",
              "gray-dark": "#4E4946",
              gray: "#8492a6",
              "gray-light": "#d3dce6",
          },
      },
  },
  plugins: [],
};
