//Masonry Settings

$(window).load(function(){

//Init Masonry
$('#gallery').masonry({
  itemSelector: '.project',
  hiddenStyle: {opacity: 0},
  visibleStyle: {opacity: 1},
  transitionDuration: 0,
});

//Infinite scroll settings
var $container = $('#gallery');
$container.infinitescroll({
  navSelector  : ".gallery__pagination",
  nextSelector : ".gallery__pagination .btn-pagination--next",
  itemSelector : ".project",
  msg: null,
  msgText: null,
  finishedMsg: "test",
  img: null

  },

  // trigger Masonry as a callback when adding new items
  function( newElements ) {
    var $newElems = $( newElements );
    $container.masonry( 'appended', $newElems );
  }
);

});
