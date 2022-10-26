const colors = require("tailwindcss/colors");

const projectColors = {
    primary: "#C70074",
    secondary: "#BFA8FF",
    accent: "#FF9AE6",
    neutral: "#9A7F9D",
    info: "#6EADFF",
    success: "#23BEB6",
    warning: "#FFCB51",
    error: "#DE0042",
    "base-100": "#FFFFFF"
};

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.{js,ts,jsx,tsx}",
        "./vendor/filament/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                pink: projectColors.primary,
                red: projectColors.error,
                teal: projectColors.success,
                amber: projectColors.secondary,
                danger: colors.red,
                primary: colors.pink,
                success: colors.teal,
                warning: colors.amber,
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require('daisyui')
    ],
    daisyui: {
        themes: [
            {
                servd: projectColors,
            },
            "light",
            'acid',
        ],
    },
};
