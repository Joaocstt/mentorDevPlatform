/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/views/vendor/pagination/*.blade.php",
        "./vendor/laravel/framework/src/illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
