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
                "Oswald": ["Oswald", "sans-serif"]
            }
        },
    },
    plugins: [],
};
