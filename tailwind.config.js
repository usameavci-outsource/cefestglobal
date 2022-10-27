const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Manrope', ...defaultTheme.fontFamily.sans],
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '3rem',
                '6xl': '4rem',
            },
            backgroundImage: {
                'textile': "url('../../../public/assets/images/textile-bg.jpg')",
                'technology': "url('../../../public/assets/images/technology-bg.jpg')",
                'logistics': "url('../../../public/assets/images/logistics-bg.jpg')",
                'section-services': "url('../../../public/assets/images/section-services-bg.jpg')",
                'section-mission-vision': "url('../../../public/assets/images/mission-vision-bg.png')",
                'section-divider': "linear-gradient(90deg, rgba(229,223,103,1) 0%, rgba(40,171,133,1) 100%)",
                'section-services-overlay': "linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 25%, rgba(255,255,255,1) 50%, rgba(255,255,255,0.5) 75%, rgba(255,255,255,0) 100%)",
                'section-transportation': "url('../../../public/assets/brand/soft-bg.svg')",
                'section-social-responsibility': "url('../../../public/assets/svg/social-responsibility.svg')",
            },
            backgroundPosition: {
                'section-transportation-size': "32rem 5rem",
                'section-social-responsibility': "-6rem 14rem",
            },
            boxShadow: {
                'button': '0px 2px 6px 2px rgba(0, 0, 0, 0.4)',
                'slider-mini': '0px 2px 6px 2px rgba(0, 0, 0, 0.4)',
                'scope-item': '0px 2px 6px 2px rgba(0, 0, 0, 0.4)',
                'section-services': '0px 10px 20px 4px rgba(0, 0, 0, 0.6)',
                'section-mission-vision': '0px 3px 4px 1px rgba(0, 0, 0, 0.4)',
                'slider-content-item': '0px 2px 10px 1px rgba(0, 0, 0, 0.5)',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
