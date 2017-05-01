var Swiper = function () {
  this.init.apply(this, arguments)
}
Swiper.prototype = {
  init: function (container) {
    this.ul = container.children[0]
    this.li = this.ul.children
    //Set ul width to total li's width + 1
    this.ul.style.width = (this.li[0].clientWidth * 8) + 'px'
    //We need to know the total of items displayed on screen
    this.itemTotal = Math.round( container.clientWidth / this.li[0].clientWidth ) - 1 //div#swiper width / li.swiper-item width - the last half visible item
    //Init currentIndex to first li
    this.currentIndex = 0
  },
  swipeTo: function (idx) {
    //Check if its not first index or last index to get the li's centered
    if (idx < 0 || idx > this.li.length - this.itemTotal ) {
      console.log("not possible")
      return
    }
    //Update left position of the li's container
    this.ul.style.left = '-' + (this.li[0].clientWidth * idx) + 'px'
    //Update currentIndex
    this.currentIndex = idx
  },
  swipeToNext: function () {
    this.swipeTo(this.currentIndex + 1)
  },
  swipeToPrev: function () {
    this.swipeTo(this.currentIndex - 1)
  }
}

/* Inspired By: http://rafbm.github.io/howtomakeaslider/ */