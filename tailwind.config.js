/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', 'sans-serif'],
            },
            colors: {
                col_orange: "#F0BB78",
                col_pink: "#D50B8B",
                col_brown: "#854836",
                col_tab_h: "#DCEBFC",
                wood_or: "#FFA673",
                blue2: "#58A0C8",
                indigo1: "#799EFF",
                red1: "#EA5B6F",
                yellow1: "#FFCC00",
            },
        },
    },
    plugins: [],
}
