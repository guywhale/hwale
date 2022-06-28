import anime from 'animejs/lib/anime.es.js';

const AnimatedArrow = (arrow) => {
  const pathRed = anime.path('#red--line');

  anime({
    targets: '#arrow',
    translateX: pathRed('x'),
    translateY: pathRed('y') ,
    rotate: pathRed('angle'),
    easing: 'linear',
    duration: 1500,
    // loop: true
  });
}

export default AnimatedArrow;
