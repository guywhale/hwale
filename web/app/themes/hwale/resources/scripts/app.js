import {domReady} from '@roots/sage/client';
import Alpine from 'alpinejs';
import Swup from 'swup';
import SwupFormsPlugin from '@swup/forms-plugin';
import SwupPreloadPlugin from '@swup/preload-plugin';
import SwupScrollPlugin from '@swup/scroll-plugin';
import SwupGtagPlugin from 'swup-gtag-plugin';
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
    plugins: [
      new SwupFormsPlugin(),
      new SwupPreloadPlugin(),
      new SwupScrollPlugin({ doScrollingRightAway: true }),
      new SwupGtagPlugin({ gaMeasurementId: "G-E815JXWLQ9" }),
    ],
  });

  // reload init functions after swup page transition
  swup.on('contentReplaced', init);

  init();

  function init() {
    // Ensures scroll lock applied to body by nav menu is removed
    // when the page is changed by swup
    if (document.querySelector('body').classList.contains('overflow-y-hidden')) {
      document.querySelector('body').classList.remove('overflow-y-hidden');
    }

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
      import('./Components/WorkSlider')
        .then((WorkSlider) => {
          WorkSlider.default();
        })
        .catch((err) => {
          console.log(err);
        });
    }

    if (document.querySelector('[data-animated-arrow]')) {
      const arrows = document.querySelectorAll('[data-animated-arrow]');

      import('./Components/AnimatedArrow')
        .then((AnimatedArrow) => {
          [...arrows].map(el => AnimatedArrow.default(el));
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
