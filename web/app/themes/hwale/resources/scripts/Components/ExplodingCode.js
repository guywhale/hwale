import { TypeIt } from "../Classes/TypeIt";
import anime from 'animejs/lib/anime.es.js';

const ExplodingCode = (codeWrapper) => {
  // Contains all info on text that needs to be created
  const lines = [
    { //line-1 => function makeWebsite(design, developer) {
      "indent": 0,
      "break": false,
      "spans": [
        {"text": "function ", "color": "text-brown"},
        {"text": "makeWebsite", "color": "text-grey"},
        {"text": "(", "color": "text-red"},
        {"text": "design", "color": "text-white"},
        {"text": ", ", "color": "text-pink"},
        {"text": "developer", "color": "text-white"},
        {"text": ") {", "color": "text-red"}
      ]
    },
    { //line-2 => const design = designer ? getDesign(designer) : null;
      "indent": 1,
      "break": false,
      "spans": [
        {"text": "const ", "color": "text-brown"},
        {"text": "design ", "color": "text-white"},
        {"text": "= ", "color": "text-pink"},
        {"text": "designer ", "color": "text-white"},
        {"text": "? ", "color": "text-pink"},
        {"text": "getDesign", "color": "text-grey"},
        {"text": "(", "color": "text-red"},
        {"text": "designer", "color": "text-white"},
        {"text": ") ", "color": "text-red"},
        {"text": ": null; ", "color": "text-pink"}
      ]
    },
    { //line-3 => const developer = me ? getDev(me) : null;
      "indent": 1,
      "break": false,
      "spans": [
        {"text": "const ", "color": "text-brown"},
        {"text": "developer ", "color": "text-white"},
        {"text": "= ", "color": "text-pink"},
        {"text": "me ", "color": "text-white"},
        {"text": "? ", "color": "text-pink"},
        {"text": "getDev", "color": "text-grey"},
        {"text": "(", "color": "text-red"},
        {"text": "me", "color": "text-white"},
        {"text": ") ", "color": "text-red"},
        {"text": ": null; ", "color": "text-pink"}
      ]
    },
    { //line-4 => if (design && developer) {
      "indent": 1,
      "break": true,
      "spans": [
        {"text": "if ", "color": "text-pink"},
        {"text": "(", "color": "text-red"},
        {"text": "design ", "color": "text-white"},
        {"text": "&& ", "color": "text-pink"},
        {"text": "developer", "color": "text-white"},
        {"text": ") {", "color": "text-red"}
      ]
    },
    { //line-5 => return code(design);
      "indent": 2,
      "break": false,
      "spans": [
        {"text": "return ", "color": "text-pink"},
        {"text": "code", "color": "text-grey"},
        {"text": "(", "color": "text-red"},
        {"text": "design ", "color": "text-white"},
        {"text": ")", "color": "text-red"},
        {"text": ";", "color": "text-pink"}
      ]
    },
    { //line-6 => }
      "indent": 1,
      "break": false,
      "spans": [
        {"text": "}", "color": "text-red"}
      ]
    },
    { //line-7 => }
      "indent": 0,
      "break": false,
      "spans": [
        {"text": "}", "color": "text-red"}
      ]
    },
    { //line-8 => makeWebsite();
      "indent": 0,
      "break": true,
      "spans": [
        {"text": "makeWebsite", "color": "text-grey"},
        {"text": "()", "color": "text-red"},
        {"text": ";", "color": "text-pink"}
      ]
    }
  ]

  typeOpeningFunction();

  async function typeOpeningFunction() {
    // Creates paras
    for (let i = 0; i < lines.length; i++) {
      const line = lines[i];
      const p = document.createElement('p');

      if (line.break) {
          const br = document.createElement('br');
          codeWrapper.appendChild(br);
      }

      p.id = `line-${i + 1}`;
      p.classList.add('line', 'w-auto', 'my-1.25');

      if (line.indent > 0) {
          const paddingValue = line.indent * 15;
          p.style.paddingLeft = `${paddingValue}px`;
      }

      codeWrapper.appendChild(p);

      // Creates empty spans
      const spans = line.spans;

      for (let j = 0; j < spans.length; j++) {
          const words = spans[j];
          const span = document.createElement('span');

          span.id = `word-${j + 1}`;
          span.classList.add('word', 'will-change-transform');
          span.classList.add(words.color);

          if (document.querySelector('[data-explode]')) {
            span.setAttribute('data-text', words.text);
          } else {
            [...words.text].forEach(letter => {
              span.append(letter);
            });
          }

          p.appendChild(span);
      }
    }


    // Type words into empty spans
    const words = document.querySelectorAll('.word');
    let ready = false;

    for (let i = 0; i < words.length; i++) {
      const span = words[i];
      const spanParentId = span.parentElement.id;
      const spanId = span.id;

      if (document.querySelector('[data-explode]')) {
        const text = span.getAttribute('data-text');
        const typeText = new TypeIt(text, `#${spanParentId} #${spanId}`, 10);// 10

        setTimeout(() => {
            typeText.run();

            if (i === (words.length - 1)) {
              ready = true;
            }

            if (ready) {
              return new Promise(resolve => {
                resolve(wrapLettersAndExplode());
              });
            }
        }, i * 150)// 150
      } else {
        if (i === (words.length - 1)) {
          ready = true;
        }

        if (ready) {
          return new Promise(resolve => {
            resolve(wrapLettersAndExplode());
          });
        }
      }
    }
  }

  async function wrapLettersAndExplode() {
    // Unpack letters and remove line and word wrappers to allow for animation
    const lineParas = document.querySelectorAll('.line');
    const wordSpans = document.querySelectorAll('.line .word');
    let ready = false;

    wordSpans.forEach(wordSpan => {
      const textNodes = Array.from(wordSpan.childNodes).filter(node => node.nodeType === 3);
      const colorClass = wordSpan.classList[2];

      for (let i = 0; i < textNodes.length; i++) {
        const node = textNodes[i];
        const letterDiv = document.createElement('span');

        letterDiv.id = `letter-${i}`;
        letterDiv.classList.add('letter', 'inline-block', 'will-change-transform');
        letterDiv.classList.add(colorClass);
        node.after(letterDiv);
        letterDiv.appendChild(node);
      }

      wordSpan.replaceWith(...wordSpan.childNodes);
    });

    lineParas.forEach(linePara => {
      linePara.replaceWith(...linePara.childNodes);
    });

    codeWrapper.classList.add('opacity-50');

    if (document.querySelector('[data-explode]')) {
      codeWrapper.classList.remove('opacity-100');
    } else {
      codeWrapper.classList.remove('opacity-0');
    }

    ready = true;

    if (ready) {
      return new Promise(resolve => {
        resolve(explodingLetters());
      });
    }
  }

  async function explodingLetters() {
    const viewportWidth = document.documentElement.clientWidth;
    const letterTransXMin = -viewportWidth / 2;
    const letterTransXMax = viewportWidth / 2;

    const viewportHeight = document.documentElement.clientHeight;
    const letterTransYMin = (-viewportHeight / 2);
    const letterTransYMax = (viewportHeight / 2);
    let duration = 100;

    if (document.querySelector('[data-explode]')) {
      duration = 2000;
    }


    /* Exploding letters */
    anime({
      targets: '.letter',
      translateX: () => {
        return anime.random(letterTransXMin, letterTransXMax);
      },
      translateY: () => {
        return anime.random(letterTransYMin, letterTransYMax);
      },
      rotate: () => {
        return anime.random(-360, 360);
      },
      scale: () => {
        return `${anime.random(80, 120)}%`;
      },
      duration: duration,
      complete: function(anime) {
        const mediaQuery = window.matchMedia('(min-width: 1024px)')

        if (mediaQuery.matches) {
          floatingLetters();
        }

        addCursorAndType('#homeText1', '#homeText1 .typed-text');

        setTimeout(() => {
          document.querySelector('#homeText1 .animate-blinking-cursor').remove();
          addCursorAndType('#homeText2', '#homeText2 .typed-text');
        }, 1300);
      }
    })
  }

  async function floatingLetters() {
    anime({
      targets: '.letter',
      translateX: () => {
          return `+=${anime.random(-100, 100)}px`;
      },
      translateY: () => {
          return `+=${anime.random(-100, 100)}px`;
      },
      rotate: () => {
          return `+=${anime.random(-100, 100)}`;
      },
      loop: true,
      direction: 'alternate',
      duration: 20000,
      easing: 'linear',
    })
  }

  async function addCursorAndType(textElement, targetSpan) {
    const textEl = document.querySelector(textElement);
    const textToType = textEl.getAttribute('data-text');
    const blinkingCursor = document.createElement('span');
    blinkingCursor.innerText = '_';
    blinkingCursor.classList.add('animate-blinking-cursor', 'text-red');
    textEl.appendChild(blinkingCursor);
    const typeText = new TypeIt(textToType, targetSpan, 40); // 40
    typeText.run();
  }
}

export default ExplodingCode;
