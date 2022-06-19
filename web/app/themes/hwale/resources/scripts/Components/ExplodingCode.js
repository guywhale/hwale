const ExplodingCode = (codeWrapper) => {
  // Typing animation
  class TypeIt {
    constructor(text, container, speed) {
      this.text = text;
      this.container = container;
      this.speed = speed;
      this.current = 0;
    }

    run() {
      const cont = document.querySelector(this.container);
      cont.append(this.text[this.current]);
      this.current++;
      if (this.current < this.text.length) {
          window.setTimeout( () => {
              this.run();
          }, this.speed);
      }
    }
  }
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

  function typeOpeningFunction() {
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
          span.classList.add('word');
          span.classList.add(words.color);
          span.setAttribute('data-text', words.text);
          p.appendChild(span);
      }
    }

    // Type words into empty spans
    const words = document.querySelectorAll('.word');

    for (let i = 0; i < words.length; i++) {
      const span = words[i];
      const spanParentId = span.parentElement.id;
      const spanId = span.id
      const text = span.getAttribute('data-text');
      const typeText = new TypeIt(text, `#${spanParentId} #${spanId}`, 10);// 10

      setTimeout(() => {
          typeText.run();
      }, i * 150)// 150
    }
  }
}

export default ExplodingCode;
