import anime from 'animejs/lib/anime.es.js';

const CountUp = (el) => {
    const scoreVal = el.getAttribute('data-score');

    anime({
      targets: el,
      innerHTML: [0, scoreVal],
      round: 1,
      easing: 'linear',
      duration: 1500
    })
}

export default CountUp;
