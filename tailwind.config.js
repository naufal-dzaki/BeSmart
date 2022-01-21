const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'bsans': ['poppins'],
                'bserif': ['raleway'],
                'bdisplay': ['montserrat']
            },
            colors: {
                bblue: '#3C91E6',
                bblack: '#342E37',
                bwhite: '#FAFFFD',
                balt: '#E3FFF4',
            },
            screens: {
                'xsm': '410px',
                // => @media (min-width: 410px) { ... }
            },
            container: {
                fontFamily: {
                  Poppins: ["Poppins, sans-serif"]
                },
                center: true,
                padding: "1rem",
                screen: {
                  lg: "1124px",
                  xl: "1124px",
                  "2xl": "1124px",
                },
              },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
