//Work Page Settings

$(window).load(function(){

//Init Masonry
$('#work').masonry({
  itemSelector: '.project',
  hiddenStyle: {opacity: 0},
  visibleStyle: {opacity: 1},
  transitionDuration: 0,
});
});
