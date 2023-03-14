/** @type {import('tailwindcss').Config} */
module.exports = {
    prefix: 'ap-',
    content: [
        "./templates/*.php",
        "./templates/**/*.php",
        "./assets/**/*.svg",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms')
    ],
}
