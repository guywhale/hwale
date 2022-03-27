module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      boxShadow: {
        'button': '-3px 3px 6px rgba(255, 255, 255, .4)',
        'button-hover': '0 0 6px rgba(255, 255, 255, .4)',
        'control': '-1px 1px 3px rgba(255, 255, 255, .5)',
        'search': '0px 3px 6px rgba(255, 255, 255, .77)',
      },
      colors: {
        'black-1': '#252525',
        'brown-1': '#8C7065',
        'grey-1': '#b2b2b2',
        'pink-1': '#f49898', 
        'red-1': '#f14d4c',
        'red-2': '#732525',
        'white-1': '#fff',
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
      }
    },
  },
  plugins: [],
};
