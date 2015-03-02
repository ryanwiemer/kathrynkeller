//Masonry Settings

$(window).load(function(){

$('#gallery').masonry({
  itemSelector: '.project'
});



var $container = $('#gallery');
$container.infinitescroll({
  navSelector  : ".gallery__pagination",
                 // selector for the paged navigation (it will be hidden)
  nextSelector : ".gallery__pagination .btn-pagination--next",
                 // selector for the NEXT link (to page 2)
  itemSelector : ".project"
                 // selector for all items you'll retrieve
  },
  // trigger Masonry as a callback
  function( newElements ) {
    var $newElems = $( newElements );
    $container.masonry( 'appended', $newElems );
  }
);



});
