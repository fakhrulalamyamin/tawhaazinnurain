import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                'siliguri': ['Hind Siliguri'],
                'poppins': ['Poppins'],
            },

            colors: {
                'primary': ['#328AF2'],
                'secondary': ['#707070'],
            },

            rotate: {
                'default': '-5deg',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
