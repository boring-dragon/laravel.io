const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                lio: {
                    100: '#d6f6f0',
                    200: '#a3ecde',
                    300: '#6ee2cc',
                    400: '#43d4b8',
                    500: '#18bc9c',
                    600: '#14a88b',
                    700: '#0e8b73',
                    800: '#0a6553',
                    900: '#053c31',
                },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {},
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
