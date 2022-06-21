import {domReady} from '@roots/sage/client';
import Alpine from 'alpinejs';
import Swup from 'swup';
// import CountUpScore from './Components/CountUpScore';


/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code

  //Initiate Swup
  // const swup = new Swup({
  //   animationSelector: '[class*="swup-transition-"]',
  // });

  // Initiate Alpine
  window.Alpine = Alpine;

  Alpine.start();

  // Initiate functions
  init();


  // reload init functions after swup page transition
  // swup.on('contentReplaced', init);

  function init() {
    // Typed and exploding text
    if (document.querySelector('[data-exploding-code]')) {
      const explodingCodes = document.querySelectorAll('[data-exploding-code]');

      import('./Components/ExplodingCode')
        .then((exports) => {
          [...explodingCodes].map(el => exports.default(el));
        })
        .catch((err) => {
          console.log(err);
        });
    }

    // CountUpScore();


    // Count up skill score animation
    if (document.querySelector('[data-score]')) {
      const scores = document.querySelectorAll('[data-score]');
      // console.log(scores);

      import('./Components/CountUpScore.js')
        .then((exports) => {
          [...scores].map(el => exports.default(el));
        })
        .catch((err) => {
          console.log(err);
        });
    }
  }
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
