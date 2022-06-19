// Typing animation
export class TypeIt {
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
