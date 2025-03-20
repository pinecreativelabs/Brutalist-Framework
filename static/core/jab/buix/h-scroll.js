class ScrollToggle {
  constructor(element) {
    this.container = element;
    this.toggles = this.container.querySelectorAll('.h-scroll-btn');
    this.list = this.container.querySelector('.h-scroll-list');
    this.listItems = this.list.querySelectorAll('ul.h-scroll-list li')
    this.scrollValue = 0;
  }
  init() {
    this.toggles.forEach(toggle => {
      toggle.addEventListener('mousedown', (e) => {
        this.move(e.target);
      })
      toggle.addEventListener('mouseup', (e) => {
        this.stop();
      })
    })
  }
  move(target) {
    if (target.classList.contains('h-scroll-btn-right')) {
      this.interval = setInterval(()=> {
        this.list.scrollLeft += 1;
      }, 1);
    } else {
      this.interval = setInterval(()=> {
        this.list.ScrollLeft = this.scrollValue;
        this.list.scrollLeft -= 1;  
      }, 1);
    }
  }
  stop() {
    if (this.list.scrollLeft > 0) {
      this.scrollValue = this.list.scrollLeft;
    }
    clearInterval(this.interval);   
  }
}

document.querySelectorAll('.h-scroll').forEach(el => {
  const scrollToggle = new ScrollToggle(el);
  scrollToggle.init();
})