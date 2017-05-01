/*
* PRODUCTS PAGE
* Swiping slider
* Dependencies: HammerJS, jQuery
*/

// Initializing
$('.swipe-footer').hide() // Hiding Discover button of each section
$('.swipe-helper').find('img').hide().css('opacity','1').fadeIn() // Display helper icon with animation
$('.active').find('.swipe-footer').fadeIn()

// Style and animate the active section
$('.swipe-item').click(function () {
  $('.swipe-section').children().removeClass('active')
  $('.swipe-footer').hide()
  $(this).addClass('active')
  $(this).find('.swipe-footer').fadeIn()
})

// Slider System using swipe method
var swipes = [] // Initializing empty array
$('.swiper').each(function () {
swipes.push(new Swiper(this)) // Create new instance with the Slider Main Container
})

//Initializing swipe method, passing the sections container w/o args
var productsSlider = new Hammer(document.querySelector('.swipe-section'), null);

// When swipe action is detected
productsSlider.on('swipe', function(e) {
if (e.offsetDirection == 2) { // If right swiping
  swipes[0].swipeToNext()
}
if (e.offsetDirection == 4) { // If left swiping
  swipes[0].swipeToPrev()
}
});