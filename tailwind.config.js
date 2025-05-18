import preset from '../../vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#6b4c34',
                    '50': '#f8f5f3',
                    '100': '#e9e1db',
                    '200': '#d5c3b7',
                    '300': '#bca190',
                    '400': '#a17f6a',
                    '500': '#8b6a53',
                    '600': '#6b4c34',
                    '700': '#573d2a',
                    '800': '#432f20',
                    '900': '#2f2116'
                },
                secondary: '#8B7355',
                accent: '#353535'
            }
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ]
}