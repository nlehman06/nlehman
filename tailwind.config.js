const {colors} = require('tailwindcss/defaultTheme')

module.exports = {
  theme:    {
    extend:          {
      colors: {
        blue: {
          ...colors.blue,
          '300': '#7C9CAA',
          '900': '#1C343D',
        },
        orange: {
          ...colors.orange,
          '600': '#FA5F00'
        }
      }
    },
    radialGradients: {
      shapes:    { // defaults to this value
        'default': 'circle',
      },
      sizes:     { // defaults to this value
        'default': '',
      },
      positions: { // defaults to these values
        'default': 'center',
        't':       'top',
        'tr':      'top right',
        'r':       'right',
        'br':      '80% 80%',
        'b':       'bottom',
        'bl':      'bottom left',
        'l':       'left',
        'tl':      'top left',
      },
      colors:    { // defaults to {}
        'blue-blue': ['#5F8F9D', '#365960 65%'],
      },
    },
  },
  variants: {},
  plugins:  [
    require('tailwindcss-gradients')(),
  ]
}
