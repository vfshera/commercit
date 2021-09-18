const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    1: "#1E2D7D",
                    2: "#33C8E2",
                    3: "#f3f5f6",
                    4: "#677279",
                },
            },
        },

        plugins: [
            require("@tailwindcss/forms"),
            require("@tailwindcss/typography"),
        ],
    },
};
