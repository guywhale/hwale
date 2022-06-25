module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      animation:{
        'blinking-cursor': 'blinkingCursor .75s ease-in infinite alternate',
        'draw-horizontal-line': 'drawHorizontalLine 1s ease-in-out forwards',
        'draw-vertical-line': 'drawVerticalLine 1s ease-in-out forwards',
        'fade-in': 'blinkingCursor 1s ease-in-out forwards',
        'flicker': 'flicker 0.15s infinite',
        'floating-ripple': 'floatingRipple 5s ease-in-out 2s infinite alternate',
        'picture-in': 'pictureIn 2s ease-in-out forwards',
        'rotate-3d-x': 'rotate3dX 2s ease-in-out forwards',
        'slide-in-left': 'slideInLeft 1.5s ease-in-out forwards',
        'slide-in-right': 'slideInRight 1.5s ease-in-out forwards',
        'text-shadow': 'textShadow 1.6s infinite',
      },
      backgroundImage: {
        'scanlines': 'linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06))',
      },
      backgroundSize: {
        'size-scanlines': '100% 2px, 3px 100%',
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
          'scanline': 'rgba(18, 16, 16, 0.1)',
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
        padding: {
          DEFAULT: '15px',
          md:'30px',
          xl: '60px',
        }
      },
      dropShadow: {
        'main': '-1px 1px 3px rgba(255, 255, 255, 0.5)',
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
        'h1-md': ['7.5rem', {
          lineHeight: '6.25rem',
          letterSpacing: '.075em',
        }],
        'h1-sm': ['3.75rem', {
          lineHeight: '3.75rem',
          letterSpacing: '.075em',
        }],
        'h1-number': ['4.3125rem', {
          lineHeight: '6.5625rem',
          letterSpacing: '.075em',
        }],
        'h1-number-md': ['1.875rem', {
          lineHeight: '1.875rem',
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
        'skill-score': ['1.125rem', {
          lineHeight: '1.6875',
          letterSpacing: '0.2em',
        }]
      },
      keyframes: {
        blinkingCursor: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        drawHorizontalLine: {
          '0%': { maxWidth: '0%' },
          '100%': { maxWidth: '100%' },
        },
        drawVerticalLine: {
          '0%': { maxHeight: '0%' },
          '100%': { maxHeight: '100%' },
        },
        flicker: {
          '0%':{ opacity: '0.27861' },
          '5%':{ opacity: '0.34769' },
          '10%':{ opacity: '0.23604' },
          '15%':{ opacity: '0.90626' },
          '20%':{ opacity: '0.18128' },
          '25%':{ opacity: '0.83891' },
          '30%':{ opacity: '0.65583' },
          '35%':{ opacity: '0.67807' },
          '40%':{ opacity: '0.26559' },
          '45%':{ opacity: '0.84693' },
          '50%':{ opacity: '0.96019' },
          '55%':{ opacity: '0.08594' },
          '60%':{ opacity: '0.20313' },
          '65%':{ opacity: '0.71988' },
          '70%':{ opacity: '0.53455' },
          '75%':{ opacity: '0.37288' },
          '80%':{ opacity: '0.71428' },
          '85%':{ opacity: '0.70419' },
          '90%':{ opacity: '0.7003' },
          '95%':{ opacity: '0.36108' },
          '100%':{ opacity: '0.24387' },
        },
        floatingRipple: {
          '0%': { transform: 'perspective(1500px) rotateY(15deg)' },
          '100%': { transform: 'perspective(3000px) rotateY(5deg)' }
        },
        pictureIn: {
          '0%': {
            filter: 'blur(8px)',
            opacity: '0',
          },
          '100%': {
            filter: 'blur(0)',
            opacity: '0.4',
          },
        },
        rotate3dX: {
          '0%': { transform: 'rotate3d(0, 1, 0, 90deg) rotate(0deg)', opacity: '0' },
          '100%': { transform: 'rotate3d(0, 0, 0, 0deg) rotate(0deg)', opacity: '0.1' },
        },
        slideInLeft: {
          '0%': { transform: 'translateX(-200px)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' }
        },
        slideInRight: {
          '0%': { transform: 'translateX(400px)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' }
        },
        textShadow: {
          '0%':{ textShadow: '0.4389924193300864px 0 1px rgba(0,30,255,0.5), -0.4389924193300864px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '5%':{ textShadow: '2.7928974010788217px 0 1px rgba(0,30,255,0.5), -2.7928974010788217px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '10%':{ textShadow: '0.02956275843481219px 0 1px rgba(0,30,255,0.5), -0.02956275843481219px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '15%':{ textShadow: '0.40218538552878136px 0 1px rgba(0,30,255,0.5), -0.40218538552878136px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '20%':{ textShadow: '3.4794037899852017px 0 1px rgba(0,30,255,0.5), -3.4794037899852017px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '25%':{ textShadow: '1.6125630401149584px 0 1px rgba(0,30,255,0.5), -1.6125630401149584px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '30%':{ textShadow: '0.7015590085143956px 0 1px rgba(0,30,255,0.5), -0.7015590085143956px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '35%':{ textShadow: '3.896914047650351px 0 1px rgba(0,30,255,0.5), -3.896914047650351px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '40%':{ textShadow: '3.870905614848819px 0 1px rgba(0,30,255,0.5), -3.870905614848819px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '45%':{ textShadow: '2.231056963361899px 0 1px rgba(0,30,255,0.5), -2.231056963361899px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '50%':{ textShadow: '0.08084290417898504px 0 1px rgba(0,30,255,0.5), -0.08084290417898504px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '55%':{ textShadow: '2.3758461067427543px 0 1px rgba(0,30,255,0.5), -2.3758461067427543px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '60%':{ textShadow: '2.202193051050636px 0 1px rgba(0,30,255,0.5), -2.202193051050636px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '65%':{ textShadow: '2.8638780614874975px 0 1px rgba(0,30,255,0.5), -2.8638780614874975px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '70%':{ textShadow: '0.48874025155497314px 0 1px rgba(0,30,255,0.5), -0.48874025155497314px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '75%':{ textShadow: '1.8948491305757957px 0 1px rgba(0,30,255,0.5), -1.8948491305757957px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '80%':{ textShadow: '0.0833037308038857px 0 1px rgba(0,30,255,0.5), -0.0833037308038857px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '85%':{ textShadow: '0.09769827255241735px 0 1px rgba(0,30,255,0.5), -0.09769827255241735px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '90%':{ textShadow: '3.443339761481782px 0 1px rgba(0,30,255,0.5), -3.443339761481782px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '95%':{ textShadow: '2.1841838852799786px 0 1px rgba(0,30,255,0.5), -2.1841838852799786px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
          '100%':{ textShadow: '2.6208764473832513px 0 1px rgba(0,30,255,0.5), -2.6208764473832513px 0 1px rgba(255,0,80,0.3), 0 0 3px' },
        }
      },
      maxWidth: {
        '2/3': '66.666%',
        '7.5': '1.875rem',
        '300': '300px',
        'code-wrapper': '398px',
      },
      minHeight: {
        '11': '2.75rem',
      },
      minWidth: {
        '35.5': '8.875rem',
      },
      spacing: {
        'unset': 'unset',
        '1/3': '33.3333%',
        '1/2-screen': '50vh',
        '1/2-screen-50': 'calc(50vh - 50px)',
        '1/3-screen': '33.3333vh',
        '2/3-screen': '66.6666vh',
        '0.75': '0.1875rem',
        '1.25': '0.3125rem',
        '3.75': '0.9375rem',
        '6.25': '1.5625rem',
        '7.5': '1.875rem',
        '8.5': '2.125rem',
        '8.75': '2.1875rem',
        '10.75': '2.6875rem',
        '11.25': '2.8125rem',
        '14.5': '3.625rem',
        '15': '3.75rem',
        '15.5': '3.875rem',
        '15.75': '3.9375rem',
        '16.25': '4.0625rem',
        '21': '5.25rem',
        '21.5': '5.375rem',
        '22.5': '5.625rem',
        '25': '6.25rem',
        '32.5': '8.125rem',
        '37.5': '9.375rem',
        '45': '11.25rem',
        '47.5': '11.875rem',
        '65': '16.25rem',
        '0.75em': '0.75em',
      },
      transitionProperty: {
        'max-width': 'max-width',
      }
    },
  },
  plugins: [],
};
