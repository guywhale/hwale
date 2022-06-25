// import Swiper JS
import Swiper, { Navigation, Pagination, Controller, Keyboard, Mousewheel } from 'swiper';

const WorkSlider = (el) => {
  const imageSlider = new Swiper(document.querySelector('[data-image-slider]'), {
    allowTouchMove: false,
    direction: 'vertical',
    loop: true,
    longSwipes: false,
    modules: [Mousewheel],
    mousewheel: {
      forceToAxis: true,
      thresholdDelta: 20,
    },
    resistanceRatio: 0.8,
    slidesPerView: 1,
  })

  const contentSlider = new Swiper(document.querySelector('[data-content-slider]'), {
    controller: {
      control: imageSlider,
      inverse: true,
    },
    direction: 'vertical',
    keyboard: true,
    loop: true,
    longSwipes: false,
    modules: [Navigation, Pagination, Controller, Keyboard, Mousewheel],
    mousewheel: {
      eventsTarget: '.wp-block-work-slider',
      forceToAxis: true,
      thresholdDelta: 20,
    },
    navigation: {
      nextEl: '.next-slide',
      prevEl: '.prev-slide',
    },
    pagination: {
      clickable: true,
      el: '.slider-pagination',
      type: 'bullets',
    },
    resistanceRatio: 0.8,
    roundLengths: true,
    slidesPerView: 1,
  })
}

export default WorkSlider;
