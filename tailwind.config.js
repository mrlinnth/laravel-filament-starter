const colors = require('tailwindcss/colors');

const projectColors = {
    primary: '#a991f7',
    secondary: '#f6d860',
    accent: '#37cdbe',
    neutral: '#3d4451',
    'base-100': '#ffffff',
};

module.exports = {
    content: ['./resources/**/*.blade.php', './resources/**/*.{js,ts,jsx,tsx}', './vendor/filament/**/*.blade.php'],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                primary: projectColors.primary,
            },
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('daisyui')],
    daisyui: {
        themes: [
            {
                custom: projectColors,
            },
            'light',
        ],
    },
};
