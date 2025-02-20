import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'primary': '#EC3237',
                'primary-dark': '#143669',
                'secondary': '#02B5F1',
            },
            // fontFamily: {
            //     sans: ['Inter', 'sans-serif'],
            //     display: ['Inter', 'sans-serif'],
            //     body: ['Inter', 'sans-serif']
            // },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                sm: '0 1px 2px 0 rgb(0 0 0 / 0.05)',
                DEFAULT: '0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)',
                md: '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)',
                lg: '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)',
                xl: '0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)',
                '2xl': '0 25px 50px -12px rgb(0 0 0 / 0.25)',
                'round': '8px 10px 10px 8px rgb(0 0 0 / 0.1), 8 8px 10px -6px rgb(0 0 0 / 0.1)',
                inner: 'inset 0 2px 4px 0 rgb(0 0 0 / 0.05)',
                none: 'none',
            },
        },
    },

    plugins: [
        forms,
        typography,
        require('flowbite/plugin'),
    ],
};
