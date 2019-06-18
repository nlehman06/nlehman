const {colors, fontSize, fontFamily} = require('tailwindcss/defaultTheme')

module.exports = {
  theme:    {
    extend:          {
      colors:     {
        blue:   {
          ...colors.blue,
          '800': '#16294D',
          '100-25': 'rgba(226, 232, 240, 0.25)',
        },
        gray:   {
          ...colors.gray,
          '900': '#1E222B',
        },
      },
      fontSize:   {
        ...fontSize,
        'base': '1.1rem'
      },
      fontFamily: {
        display: ['Orbitron', ...fontFamily.sans],
        body: ['Montserrat', ...fontFamily.sans],
      }
    },
  },
  variants: {
    opacity: ['responsive', 'hover']
  },
}
