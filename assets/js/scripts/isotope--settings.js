//Isotope Settings

$(document).ready(function(){

  // init Isotope
  var $container = $('.masonry').isotope({
    masonry: {
      //columnWidth: 50,
      gutter: 20
    }
  });
  // filter items on button click
  $('.gallery__categories').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });


});
