$(document).ready(() => app.init());
  
var app = {
  text: "Hello stranger. How are you doing?",
  index: 0,
  chars: 0,
  speed: 100,
  container: ".text .content",
  
  init() {
    this.chars = this.text.length;
    return this.write();
  },
    
  write() {
    $(this.container).append(this.text[this.index]);
    if (this.index < this.chars) {
      this.index++;
      return window.setTimeout(() => app.write()
      , this.speed);
    }
  }
};