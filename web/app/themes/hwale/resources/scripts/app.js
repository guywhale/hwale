import {domReady} from '@roots/sage/client';
import Alpine from 'alpinejs';
import Swup from 'swup';


/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code

  // Initiate Swup
  // const swup = new Swup({
  //   animationSelector: '[class*="swup-transition-"]',
  //   cache: false
  // });

  // Initiate Alpine
  window.Alpine = Alpine;

  Alpine.start();

  // Typed and exploding text
  if (document.querySelector('[data-exploding-code]')) {
    const explodingCodes = document.querySelectorAll('[data-exploding-code]');

    await import('./Components/ExplodingCode')
      .then((exports) => {
        [...explodingCodes].map(el => exports.default(el));
      })
      .catch((err) => {
        console.log(err);
      });
  }

};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
