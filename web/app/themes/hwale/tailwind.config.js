module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      animation:{
        'blinking-cursor': 'blinkingCursor .75s ease-in infinite alternate;',
      },
      boxShadow: {
        'button': '-3px 3px 6px rgba(255, 255, 255, .4)',
        'button-hover': '0 0 6px rgba(255, 255, 255, .4)',
        'control': '-1px 1px 3px rgba(255, 255, 255, .5)',
        'search': '0px 3px 6px rgba(255, 255, 255, .77)',
      },
      colors: {
        'black': {
          DEFAULT: '#000',
          'light': '#252525',
        },
        'brown': {
          DEFAULT: '#8C7065',
        },
        'grey': {
          DEFAULT: '#b2b2b2',
        },
        'pink': {
          DEFAULT: '#f49898',
        },
        'red': {
          DEFAULT: '#f14d4c',
          'dark': '#732525'
        },
      },
      container: {
        center: true,
        padding: '0.9375rem',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
        'dm-sans': ['DM Sans', 'sans-serif'],
      },
      fontSize: {
        'body': ['1.125rem', '1.875rem'],
        'body-small': ['0.875rem', {
          lineHeight: '1.6875rem',
          letterSpacing: '.2em',
        }],
        'button': ['0.875rem', {
          lineHeight: '1.25rem',
          letterSpacing: '.2em',
        }],
        'control': ['0.875rem', {
          lineHeight: '1.5rem',
          letterSpacing: '.05em',
        }],
        'control-current': ['1.125rem', {
          lineHeight: '1.5rem',
          letterSpacing: '.05em',
        }],
        'h1': ['14rem', {
          lineHeight: '6.25rem',
          letterSpacing: '.075em',
        }],
        'h1-number': ['4.3125rem', {
          lineHeight: '6.5625rem',
          letterSpacing: '.075em',
        }],
        'h2': ['3.75rem', '5.625rem'],
        'h2-md': ['2.8125rem', '4.1875rem'],
        'h2-sm': ['1.8125rem', '2.71875rem'],
        'h3': ['2.375rem', '3.375rem'],
        'nav': ['1rem', '1.5rem'],
        'nav-lg': ['2.5rem', '3.75rem'],
        'nav-sm': ['1.875rem', '1.875rem'],
        'nav-number': ['0.625rem', '0.625rem'],
        'nav-number-lg': ['1.5625rem', '1.5625rem'],
        'nav-number-sm': ['1.125rem', '1.125rem'],
        'nav-search': ['0.875rem', '1.5rem'],
        'nav-search-lg': ['2.1875rem', '3.75rem'],
        'nav-search-sm': ['1.625rem', '1.875rem'],
      },
      keyframes: {
        blinkingCursor: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
      },
      spacing: {
        '3.75': '0.9375rem',
        '6.25': '1.5625rem',
        '8.5': '2.125rem',
        '11.25': '2.8125rem',
      }
    },
  },
  plugins: [],
};
