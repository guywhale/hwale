import {domReady} from '@roots/sage/client';
import Alpine from 'alpinejs';
import Swup from 'swup';
import Headroom from "headroom.js";

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code

  // Initialize Alpine
  window.Alpine = Alpine;

  Alpine.start();

  //Initiate Swup
  const swup = new Swup({
    animationSelector: '[class*="swup-transition-"]',
    cache: false,
  });

  // reload init functions after swup page transition
  swup.on('contentReplaced', init);

  init();

  function init() {
    // Headroom
    const header = document.querySelector('header');
    const headroom  = new Headroom(header, { offset: header.offsetHeight / 2 });
    headroom.init();

    // Typed and exploding text
    if (document.querySelector('[data-exploding-code]')) {
      const explodingCodes = document.querySelectorAll('[data-exploding-code]');

      import('./Components/ExplodingCode')
        .then((ExplodingCode) => {
          [...explodingCodes].map(el => ExplodingCode.default(el));
        })
        .catch((err) => {
          console.log(err);
        });
    }

    if (document.querySelector('[data-score]')) {
      const scores = document.querySelectorAll('[data-score]');

      import('./Components/CountUp')
        .then((CountUp) => {
          [...scores].map(el => CountUp.default(el));
        })
        .catch((err) => {
          console.log(err);
        });
    }

    if (document.querySelector('.swiper')) {
      // const sliders = document.querySelectorAll('.swiper');

      import('./Components/WorkSlider')
        .then((WorkSlider) => {
          WorkSlider.default();
          // [...sliders].map(el => WorkSlider.default());
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
