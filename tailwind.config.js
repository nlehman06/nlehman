const {colors, fontSize, fontFamily} = require('tailwindcss/defaultTheme')

module.exports = {
    theme:    {
        extend: {
            colors:     {
                blue:   {
                    ...colors.blue,
                    '800':    '#16294D',
                    '100-25': 'rgba(226, 232, 240, 0.25)',
                    '100-75': 'rgba(226, 232, 240, 0.75)',
                },
                gray:   {
                    ...colors.gray,
                    '300': '#A8ADBC',
                    '400': '#A7A7A7',
                    '800': '#2F343F',
                    '900': '#1E222B',
                },
                purple: {
                    ...colors.purple,
                    '500': '#9B859D',
                },
                orange: {
                    ...colors.orange,
                    '500': '#CF6A4C',
                },
                green:  {
                    ...colors.green,
                    '500': '#8F9D6A',
                },
            },
            fontSize:   {
                ...fontSize,
                'base': '1.1rem'
            },
            fontFamily: {
                display: ['Orbitron', ...fontFamily.sans],
                body:    ['Montserrat', ...fontFamily.sans],
            }
        },
    },
    variants: {
        opacity: ['responsive', 'hover']
    },
    plugins:  [
        require('@tailwindcss/custom-forms')
    ]
};
