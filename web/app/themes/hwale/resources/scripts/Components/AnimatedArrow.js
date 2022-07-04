import anime from 'animejs/lib/anime.es.js';

const AnimatedArrow = (arrow) => {
  const pathRed = anime.path('#red--line');
  document.querySelector('#arrow').style.opacity = 1;

  anime({
    targets: '#arrow',
    translateX: pathRed('x'),
    translateY: pathRed('y') ,
    rotate: pathRed('angle'),
    easing: 'easeOutSine',
    duration: 1500,
  });

  anime({
    targets: '#white--cover, #red--cover',
    strokeDashoffset: [0, -2200],
    easing: 'easeOutSine',
    duration: 1500,
  });
}

export default AnimatedArrow;
