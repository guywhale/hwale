// import Swiper JS
import Swiper, { Navigation, Pagination, Controller, Keyboard, Mousewheel } from 'swiper';

const WorkSlider = (el) => {
  const contentSlider = new Swiper(document.querySelector('[data-content-slider]'), {
    allowTouchMove: false,
    direction: 'vertical',
    loop: true,
    resistanceRatio: 1,
    slidesPerView: 1,
  })

  const imageSlider = new Swiper(document.querySelector('[data-image-slider]'), {
    controller: {
      control: contentSlider,
      inverse: true,
    },
    direction: 'vertical',
    keyboard: true,
    loop: true,
    mousewheel: {
      eventsTarget: '.wp-block-work-slider',
      forceToAxis: true,
      thresholdDelta: 20,
    },
    modules: [Navigation, Pagination, Controller, Keyboard, Mousewheel],
    resistanceRatio: 1,
    slidesPerView: 1,
  })
}

export default WorkSlider;
