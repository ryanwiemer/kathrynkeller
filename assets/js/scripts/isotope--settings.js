//Isotope Settings

$(document).ready(function(){

  // init Isotope
  var $container = $('.masonry').isotope({
    masonry: {
      //columnWidth: 200,
      //itemSelector: '.gallery'
    }
  });
  // filter items on button click
  $('.gallery__categories').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });


});
