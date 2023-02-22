// @ts-nocheck
/* eslint-disable @typescript-eslint/no-var-requires */

const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
  theme: {
    extend: {
      colors: {
        primary: {
          '50': '#fff1f3',
          '100': '#ffdfe5',
          '200': '#ffc5cf',
          '300': '#ff9dae',
          '400': '#ff647f',
          '500': '#ff1e45',
          '600': '#ed153a',
          '700': '#c80d2d',
          '800': '#a50f29',
          '900': '#881428',
        },

        gray: {
          ...colors.zinc,
          750: '#323238',
          850: '#1f1f21',
          950: '#101012',
        },
      },

      maxWidth: theme => ({
        ...theme('width'),
      }),

      maxHeight: theme => ({
        ...theme('height'),
      }),

      minWidth: theme => ({
        ...theme('width'),
      }),

      minHeight: theme => ({
        ...theme('height'),
      }),

      screens: Object.keys(defaultTheme.screens).reduce((obj, key) => {
        const [rawMin] = defaultTheme.screens[key].split('px')
        const max = parseInt(rawMin) - 1
        obj[`!${key}`] = { max: `${max}px` }
        return obj
      }, {}),

      borderRadius: {
        sm: '0.25rem',
        DEFAULT: '0.375rem',
        md: '0.5rem',
        lg: '0.75rem',
        xl: '1rem',
        '2xl': '1.5rem',
        '3xl': '2rem',
      },

      cursor: {
        'ew-resize': 'ew-resize',
        'ns-resize': 'ns-resize',
        'cursor-not-allowed': 'cursor-not-allowed',
      },

      transitionProperty: {
        border: 'border',
      },
    },
  },
  content: [
    './docs/**/*.{vue,js,ts,jsx,tsx,md}',
    './docs/.vitepress/**/*.{vue,js,ts,jsx,tsx,md}',
  ],
  darkMode: 'class', // or 'media' or 'class'
  corePlugins: {
    preflight: false,
  },
  plugins: [],
}
