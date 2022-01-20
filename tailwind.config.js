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
                brand: {
                    // 1: "#2c494d",
                    // 2: "#6ca7b6",
                    // 3: "#f3f5f6",
                    // 4: "#677279",
                    // 5: "#b67f41",
                    1: "#1E2D7D",
                    2: "#33C8E2",
                    3: "#f3f5f6",
                    4: "#677279",
                },
            },
            animation: {
                wiggle: 'wiggle 1s ease-in-out infinite',
                cart: 'cart 5s ease-in-out infinite',
               },
            keyframes: {

                wiggle: {
       
                  '0%, 100%': { transform: 'rotate(-3deg)' },
       
                  '50%': { transform: 'rotate(3deg)' },
       
                },

                cart: {
       
                  '0%': { transform: 'translateX(-600%)' , opacity: '0' },
                  '5%': { transform: 'translateX(-450%)' , opacity: '0.5' },       
                  '25%': {  transform: 'translateX(30%)' , opacity: '1' },
       
                }
               }
        },

        plugins: [
            require("@tailwindcss/forms"),
            require("@tailwindcss/typography"),
        ],
    },
    variants: {
        transitionProperty: ['responsive', 'motion-safe', 'motion-reduce'], 
        animation: ['hover', 'focus'],
      },
};
