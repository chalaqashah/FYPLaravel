import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            ...colors,
            login: "#3728E1"
        },
        extend: {},
    },
    plugins: [require("daisyui")],
}
