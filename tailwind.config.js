import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class',
    safelist: ["isToggled"],
    theme: {
        
        extend: {
            colors: ({ colors }) => ({
            primary : colors.indigo,
            danger : colors.rose,
            warning : colors.yellow,
            success : colors.lime,
            info : colors.blue,
            gray : colors.zinc,
        }),
        }
        
    },
    plugins: [],
};
