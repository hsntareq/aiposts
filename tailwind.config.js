/** @type {import('tailwindcss').Config} */
module.exports = {
    prefix: 'ap-',
    content: [
        "./templates/*.php",
        "./templates/**/*.php",
        "./assets/**/*.svg",
        "./inc/**/*.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms')({
            strategy: 'base',
            strategy: 'class',
          }),
    ],
}
